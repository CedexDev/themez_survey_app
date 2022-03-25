<?php

namespace App\Http\Controllers\Company;

use Modules\OfflineSubscription\Services\OfflinePayment;
use Modules\PaypalSubscription\Services\PaypalPayment;
use Modules\StripeSubscription\Services\StripePayment;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Survey;

class PaymentController extends Controller
{
    public function show(Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:plans,id',
        ]);

        $plan = Plan::findOrFail($request->plan_id);

        if ($plan->isFree()) {
            return $this->handleFreeSubscription($plan);
        }

        return view('company.payment.show', [
            'plan' => Plan::findOrFail($request->plan_id),
            'user'=> auth()->user(),
            'surveys'=> Survey::owned()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:plans,id',
            'payment_method' => [
                'required',
                Rule::in(Plan::$paymentMethods),
            ],
            'payment_note' => 'nullable|max:255',
        ]);

        session(['plan_id' => $request->plan_id]);

        $paymentMethods = [
            'stripe' => StripePayment::class,
            'offline' => OfflinePayment::class,
            'paypal' => PaypalPayment::class,
        ];

        if (in_array($request->payment_method, ['stripe', 'paypal'])) {
            return (new $paymentMethods[$request->payment_method]())->pay($request);
        } else {
            (new $paymentMethods[$request->payment_method]())->pay($request);
        }
        $user = Auth::user();
        $surveys = Survey::owned()->get();
        return redirect()->route('company.billing.plans', compact('user','surveys'));
    }

    private function handleFreeSubscription($plan)
    {
        $metadata = [
            'payment_method' => '',
            'stripe_id' => '',
            'stripe_subscription_id' => '',
        ];

        if (auth()->user()->subscribed()) {
            auth()->user()->subscription->changePlan($plan, $metadata);
        } else {
            (new Subscription())->newSubscription($plan);
        }
        // $user = Auth::user();
        $surveys = Survey::owned()->get();
        return redirect()->route('home', compact('surveys'));
    }
}

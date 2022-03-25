@if($subscription)



            <div class="table-responsive billing-table">
                <table class="table table-flush table-features mb-0" id="tableFeatures">
                <tbody>
                <tr>
                    <th width="50%" class="text-muted">{{ __('Plan') }}</td>
                    <th width="50%" class="">{{ $subscription->plan->title }}</td>
                </tr>
                <tr>
                    <th class="text-muted">{{ __('Price') }}</td>
                    <th>{{ $subscription->plan->price }} / {{ $subscription->plan->interval }}</td>
                </tr>

                @if ($subscription->payment_method)
                <tr>
                    <td class="text-muted">{{ __('Payment Method') }}</td>
                    <td>{{ ucfirst($subscription->payment_method) }}</td>
                </tr>
                @endif

                @if ($subscription->starts_at)
                <tr>
                    <td class="text-muted">{{ __('Current period starts at') }}</td>
                    <td>{{ $subscription->starts_at }}</td>
                </tr>
                @endif

                @if ($subscription->ends_at)
                <tr>
                    <td class="text-muted">{{ __('Current period ends at') }}</td>
                    <td>{{ $subscription->ends_at }}</td>
                </tr>
                @endif

                @if ($subscription->canceled_at)
                <tr>
                    <td class="text-muted">{{ __('Canceled at') }}</td>
                    <td>{{ $subscription->canceled_at }}</td>
                </tr>
                @endif
                </tbody>
                </table>
            </div>
@endif













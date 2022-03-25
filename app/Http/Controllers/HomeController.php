<?php


namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Survey;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{








public function index()
    {



        try {
            \DB::connection()->getPdo();
            $hasConnection = true;
        } catch (\Exception $e) {
            $hasConnection =  false;
        }

        if($hasConnection) {
            $plans = Plan::all();
        } else {
            $plans = [];
        }




        try {
            $templates = Survey::template()->get();

            $user = Auth::user();

            $notifications = Auth::user()->unreadNotifications;

            $surveys = Survey::owned()->get();
            return view('front.home', compact('surveys','notifications','templates','user'));
            } catch (\Exception $e) {

        }


        return view('front.home', compact('plans'));
    }

    public function store()
    {
        $this->authorize('create', Survey::class);

        $survey = Survey::create([
            'user_id' => auth()->user()->id,
            'title' => __('Untitled'),
            'welcome_message' => __('Welcome to our survey.'),
            'goodbye_text' => __('Thanks for your time.'),
            'visibility' => 1,
        ]);

        return redirect()->route('company.surveys.edit', $survey);
    }

    public function edit(Survey $survey)
    {
        // return $survey;
        $this->authorize('update', $survey);

        return view('company.survey.edit', compact('survey'));
    }

    public function update(Survey $survey, Request $request)
    {

        // return $request->all();
        $validatedData = $request->validate([
            'title' => ['required'],
            'goodbye_text' => ['required'],
            'welcome_message' => ['required'],
            'custom_css' => ['nullable'],
            'redirect_url' => ['nullable', 'url'],
            'password' => ['nullable'],
            'question_color' => ['required'],
            'answer_color' => ['required'],
            'button_color' => ['required'],
            'button_text_color' => ['required'],
            'background_color' => ['required'],
            'logo'=>['nullable'],
            'font_display'=>['nullable'],
            'font_body'=>['nullable'],
        ]);


        if(!$validatedData['font_display']){
            $validatedData['font_display']=$survey->font_display;
        }
        if(!$validatedData['font_body']){
            $validatedData['font_body']=$survey->font_body;
        }

        if($file=$request->file('logo')){
            $path=$file->storePublicly('','public');
            $validatedData['logo']=$path;
        }


        $validatedData['require_password'] = $request->has('require_password') ? 1 : 0;
        $validatedData['visibility'] = $request->has('visibility') ? 1 : 0;
        $validatedData['notify_new_responses'] = $request->has('notify_new_responses') ? 1 : 0;

        $survey->fill($validatedData)->save();

        // return redirect()->back();
        return response(['success'=>true]);
    }

    public function duplicate(Survey $survey)
    {
        $this->authorize('create', Survey::class);

        if (! $survey->isTemplate()) {
            return false;
        }

        $newSurvey = $survey->replicate();

        $newSurvey->forceFill([
            'user_id' => auth()->user()->id,
            'title' => $newSurvey->title.' (copy)',
            'created_at' => now(),
            'is_template' => 0,
            'responses_count' => 0,
            'questions_count' => 0,
        ])->save();

        $questions = $survey->questions;

        if (count($questions) > 0) {
            foreach ($questions as $question) {
                $newQuestion = $question->replicate();

                $newQuestion->forceFill([
                    'survey_id' => $newSurvey->id,
                    'created_at' => now(),
                ])->save();
            }
        }

        return redirect()->route('company.surveys.edit', $newSurvey);
    }

    public function destroy(Survey $survey)
    {
        $survey->delete();

        flash(__('Campaign deleted successfully.'))->success();

        return redirect()->route('home');
    }
}

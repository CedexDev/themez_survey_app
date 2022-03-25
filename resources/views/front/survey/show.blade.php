@extends('layouts.front')
@section('title', $survey->title)
@section('content')


<style>
    html {
        --colorOne: {{ $survey->question_color }};
        --colorTwo: {{ $survey->answer_color }};
        --colorThree: {{ $survey->button_color }};
        --colorFour: {{ $survey->button_text_color }};
        --colorFive: {{ $survey->background_color }};
        --fontDisplay: {{ ($survey->font_display?(json_decode($survey->font_display)->family):'') }};
        --fontBody: {{ ($survey->font_body?(json_decode($survey->font_body)->family):'') }};
    }
    .bg-one { background: var(--colorOne); }
    .bg-two { background: var(--colorTwo); }
    .bg-three { background: var(--colorThree); }
    .bg-four { background: var(--colorFour); }
    .bg-five { background: var(--colorFive); }
    .color-one { color: var(--colorOne); }
    .color-two { color: var(--colorTwo); }
    .color-three { color: var(--colorThree); }
    .color-four { color: var(--colorFour); }
    .color-five { color: var(--colorFive); }
    .border-color-one { border-color: var(--colorOne); }
    .border-color-two { border-color: var(--colorTwo); }
    .border-color-three { border-color: var(--colorThree); }
    .border-color-four { border-color: var(--colorFour); }
    .border-color-five { border-color: var(--colorFive); }
    .font-display { font-family: var(--fontDisplay);}
    .font-body { font-family: var(--fontBody);}
</style>



<div id="snap-0" class="snap  welcome-snap bg bg-one" data-percent="0%">
    <div class="xm-container color-two">
    <a id="mute-video" class="mute muted color-two">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-volume"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-volume-x"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line></svg></a>
        <small class="xm-page">&nbsp;</small>
        <p class="text-center"><img style="width: 200px;" src="{{ '/storage/' . $survey->logo }}" alt=""></p>
        <h1
            class="xm-display color-two font-display">
            {{ $survey->title }}</h1>
        <p
            class="xm-paragraph color-two">
            {{ $survey->welcome_message }}</p>

        <a class="xm-down" href="#snap-1">

            </a>
        <div class="xm-next color-five">
            <a class="color-two" href="{{ route('front.survey.start', array_merge(['survey' => $survey->uuid], request()->all()))}}">
            <svg
                class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="{{ $survey->background_color }}" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <polyline points="19 12 12 19 5 12"></polyline>
            </svg>
            </a>
        </div>
    </div>
</div>
@endsection



@extends('layouts.front')
@section('title', $survey->title)
@section('content')
    <script type="text/javascript">
        localStorage.setItem('soradius_survey_id', "<?php echo $survey->id; ?>")
        localStorage.setItem('soradius_attendee_item', "<?php echo $attendee; ?>")
    </script>
    <style type="text/css">
        {!! $survey->custom_css !!}

    </style>


@section('validIcons')
    <span class='valid color-four'><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-check">
            <polyline points="20 6 9 17 4 12"></polyline>
        </svg></span>
    <span class='invalid color-four'><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-alert-triangle">
            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
            <line x1="12" y1="9" x2="12" y2="13"></line>
            <line x1="12" y1="17" x2="12.01" y2="17"></line>
        </svg></span>
    <span class='spin'></span>
@endsection


@if (isset($survey) && $survey)
    @section('fonts')
        <script>
            font = JSON.parse('{!! $survey->font_display !!}')
            console.log(font);
            linkrel = document.createElement("link");
            linkrel.setAttribute("href", "https://fonts.googleapis.com/css?family=" + font.family);
            linkrel.setAttribute("rel", "stylesheet");
            document.getElementsByTagName("head")[0].appendChild(linkrel);
            </script>
        <script>
            font = JSON.parse('{!! $survey->font_body !!}')
            console.log(font);
            linkrel = document.createElement("link");
            linkrel.setAttribute("href", "https://fonts.googleapis.com/css?family=" + font.family);
            linkrel.setAttribute("rel", "stylesheet");
            document.getElementsByTagName("head")[0].appendChild(linkrel);
        </script>

    @endsection
@endif
<section class="survey">
    <div class="survey-1" x-data="{
                    questionColor: '{{ $survey->question_color }}',
                    answerColor : '{{ $survey->answer_color }}',
                    buttonColor : '{{ $survey->button_color }}',
                    buttonTextColor : '{{ $survey->button_text_color }}',
                    backgroundColor: '{{ $survey->background_color }}'
                }" x-init="document.body.style.backgroundColor = buttonColor;">


        <form id="survey_form" method="POST" action="{{ route('front.survey.submit', ['survey' => $survey->uuid]) }}">

            <style>


                .flickity-enabled.is-fade .flickity-slider > * {
                pointer-events: none;
                z-index: 0;
                }

                .flickity-enabled.is-fade .flickity-slider > .is-selected {
                pointer-events: auto;
                z-index: 1;
                }

                html {
                    --colorOne: {{ $survey->question_color }};
                    --colorTwo: {{ $survey->answer_color }};
                    --colorThree: {{ $survey->button_color }};
                    --colorFour: {{ $survey->button_text_color }};
                    --colorFive: {{ $survey->background_color }};
                    --fontDisplay: {{ $survey->font_display ? json_decode($survey->font_display)->family : 'Maven Pro' }};
                    --fontBody: {{ $survey->font_body ? json_decode($survey->font_body)->family : 'Maven Pro' }};
                }

                .bg-one {
                    background: var(--colorOne);
                }

                .bg-two {
                    background: var(--colorTwo);
                }

                .bg-three {
                    background: var(--colorThree);
                }

                .bg-four {
                    background: var(--colorFour);
                }

                .bg-five {
                    background: var(--colorFive);
                }

                .color-one {
                    color: var(--colorOne);
                }

                .color-two {
                    color: var(--colorTwo);
                }

                .color-three {
                    color: var(--colorThree);
                }

                .color-four {
                    color: var(--colorFour);
                }

                .color-five {
                    color: var(--colorFive);
                }

                .stroke-one {
                    stroke: var(--colorOne);
                }

                .stroke-two {
                    stroke: var(--colorTwo);
                }

                .stroke-three {
                    stroke: var(--colorThree);
                }

                .stroke-four {
                    stroke: var(--colorFour);
                }

                .stroke-five {
                    stroke: var(--colorFive);
                }

                .fill-one {
                    fill: var(--colorOne);
                }

                .fill-two {
                    fill: var(--colorTwo);
                }

                .fill-three {
                    fill: var(--colorThree);
                }

                .fill-four {
                    fill: var(--colorFour);
                }

                .fill-five {
                    fill: var(--colorFive);
                }

                .border-color-one {
                    border-color: var(--colorOne);
                }

                .border-color-two {
                    border-color: var(--colorTwo);
                }

                .border-color-three {
                    border-color: var(--colorThree);
                }

                .border-color-four {
                    border-color: var(--colorFour);
                }

                .border-color-five {
                    border-color: var(--colorFive);
                }

                .font-display {
                    font-family: var(--fontDisplay);
                }

                .font-body {
                    font-family: var(--fontBody);
                }

                body .multi-choice .grow-wrap:before {
                    border-color: var(--colorFive);
                }

                /* .var-two .multi-choice .grow-wrap:before { border-color: var(--colorFour); } */
                /* VAR ONE */
                body .var-one textarea,
                body .var-one .select-1,
                body .var-one .response_item {
                    color: var(--colorFour);
                }

                body .var-one .xm-check {
                    border-color: var(--colorFive) !important;
                }
                body .var-one .disabled-check  {
                    opacity: 0;
                }
                body .var-one .not-active .disabled-check  {

                    opacity: 1;
                    border-color: var(--colorFive);
                    background: var(--colorFive);
                }

                body .var-one .not-active .disabled-check.border-color-four:before {
                    content: "";
    width: 1px;
    background: var(--colorOne);
    height: 4px;
    position: absolute;
    left: 5px;
    top: 8px;
    transform: rotate(-45deg);
                }

                body .var-one .not-active .disabled-check.border-color-four:after {
                    content: "";
    width: 1px;
    background: var(--colorOne);
    height: 8px;
    position: absolute;
    left: 9px;
    top: 4.5px;
    transform: rotate(45deg);
                }

                /* VAR TWO */
                /* container */
                .gallery>.var-two {
                    padding-left: 20px;
                    padding-right: 20px;
                }
                body .var-two .q-content {
                    overflow: hidden;
                }
                /* top */
                body .var-two h2.xm-heading {
                    background: var(--colorFour);
                    color: var(--colorThree);
                    font-family: var(--fontBody);
                    border-radius: 10px 10px 10px 0;
                    padding: 20px 20px;
                    font-size: 16px;
                    max-width: 90%;
                    float: left;
                    width: auto;
                    font-weight: normal;
                    margin-bottom: 5px;
                }

                body .var-two .multi-choice {
                    margin-top: 15px;
                }

                body .var-two p.xm-paragraph {
                    background: var(--colorFour);
                    color: var(--colorThree);
                    border-radius: 10px 10px 10px 0;
                    padding: 10px 20px;
                    max-width: 80%;
                    float: left;
                    width: auto;
                    clear: left;
                }

                body .var-two p.xm-paragraph {
                    background: var(--colorFour);
                    color: var(--colorThree);
                    border-radius: 10px 10px 10px 0;
                    padding: 10px 20px;
                    max-width: 80%;
                    float: left;
                    width: auto;
                    clear: left;
                }

                body .var-two.align-center h2.xm-heading,
                body .var-two.align-center p.xm-paragraph {
                    margin-right: auto;
                    margin-left: auto;
                    float: none;
                    text-align: left;
                }


                /* textarea */
                body .var-two .inline-edit {
                    border-color: var(--colorFour);
                    border-radius: 10px 10px 0 10px;
                }

                body .var-two textarea {
                    background: var(--colorFour);
                    color: var(--colorThree);
                    border-radius: 10px 10px 0 10px;
                    padding-left: 20px;
                }

                body .var-two textarea:focus+.inline-edit {
                    border-color: var(--colorFour);
                }

                /* email+number input */
                body .var-two .stay-input input {
                    background: var(--colorFour);
                    color: var(--colorThree);
                    border-radius: 10px 10px 0 10px;
                    padding-left: 20px;
                    border-color: var(--colorFour);
                }

                body .var-two .stay-input input:focus {
                    border-color: var(--colorFour);
                }

                body .var-two .stay-input {
                    margin-left: 20%;
                    width: 80%;
                }

                /* both */
                body .var-two .grow-wrap {
                    width: 80%;
                    margin-left: 20%;
                }

                /* answers */
                body .var-two .select-1 {
                    background: var(--colorFour);
                }

                body .var-two .select-1,
                .var-two .response_item {
                    color: var(--colorThree);
                    width: 80%;
                    margin-left: 20%;
                    border-radius: 0;
                    margin-bottom: 0;
                    box-shadow: 0 0 0 0.5px rgba(1,1,1,0.07);
                    overflow: hidden;
                }
                body .var-two .select-1:first-child,
                .var-two .response_item:first-child {
                    border-radius: 10px 10px 0 0;
                }
                body .var-two .select-1:last-child,
                .var-two .response_item:last-child {
                    border-radius: 0 0 0 10px;
                }

                body .var-two .bar {
                    background: var(--colorFive);
                    border-color: var(--colorFour) !important;
                }

                body .var-two .xm-check {
                    border-color: var(--colorFive) !important;
                }

                body .var-two .mc-label {
                    display: block;
                }

                body .var-two .select-1:last-of-type,
                body .var-two .response_item:last-of-type {
                    margin-bottom: 0;
                }

                body .var-two .bar {
                    bottom: 0;
                    border: 0;
                    height: 100%;
                    left: 0;
                    z-index: -1;
                    box-sizing: content-box;
                    border-right: 100vw solid;
                    width: var(--choicePercentage);
                }

                body .var-two .percent {
                    right: 10px;
                }

                body .var-two .xm-check,
                body .var-two .disabled-check {
                    z-index: 0;
                    border-radius: 10px;
                    left: 15px;
                    width: 0px;
                    height: 0px;
                    border-width: 3px;
                    top: 16px;
                    opacity: 1;
                }

                body .var-two .disabled-check {
                    opacity: 0;
                    border-color: var(--colorThree) !important;
                }
                body .var-two .not-active .disabled-check,
                body .var-three .not-active .disabled-check  {
                    opacity: 1;
                }


                body .align-center.var-two h2.xm-heading {
                    width: 80%;
                    margin-left: auto;
                    margin-right: auto;
                    text-align: left;
                }
                .gallery > *.align-center.var-two .multiple-choice {
                    width: 80%;
                    margin-left: auto;
                    margin-right: auto;
                    text-align: left;
                }
                body .var-two.align-center .select-1,
                .var-two.align-center .response_item {
                    margin-left: 0;
                    width: 100%;
                }
                body .align-right.var-two h2.xm-heading {
                    text-align: left;
                }
                body .align-right.var-two p.xm-paragraph {
                    text-align: left;
                }
                body .var-two .multiple-choice > .select-group, body .var-two .multiple-choice .responses_container {
                    margin-top: 0;
                }
                body .var-two .multiple-choice {
                    margin-top: 15px;
                }

                body .gallery-cell.is-selected .var-two .xm-img, body .gallery-cell.is-selected .var-two .xm-vid {
                    opacity: 1;
                }







                /* VAR THREE */
                /* container */
                .gallery>.var-three {
                    padding-left: 20px;
                    padding-right: 20px;
                }
                body .var-three .q-content {
                    overflow: hidden;
                }
                /* textarea */
                body .var-three .inline-edit {
                    border-color: var(--colorFour);
                    border-radius: 10px 10px 0 10px;
                }

                body .var-three textarea {
                    background: var(--colorFour);
                    color: var(--colorThree);
                    border-radius: 10px 10px 0 10px;
                    padding-left: 20px;
                }

                body .var-three textarea:focus+.inline-edit {
                    border-color: var(--colorFour);
                }

                /* email+number input */
                body .var-three .stay-input input {
                    background: var(--colorFour);
                    color: var(--colorThree);
                    border-radius: 10px 10px 0 10px;
                    padding-left: 20px;
                    border-color: var(--colorFour);
                }

                body .var-three .stay-input input:focus {
                    border-color: var(--colorFour);
                }

                body .var-three .stay-input {
                    margin-left: 20%;
                    width: 80%;
                }

                /* both */
                body .var-three .grow-wrap {
                    width: 80%;
                    margin-left: 20%;
                }

                /* answers */
                body .var-three .select-1 {
                    background: transparent;
                }

                body .var-three .select-1,
                .var-three .response_item {
                    color: var(--colorFour);
                    border: 1px solid var(--colorFour);
                    border-radius: 10px;
                    margin-bottom: 5px;
                    overflow: hidden;
                }

                body .var-three .bar {
                    background: var(--colorFive);
                    border: 0 !important;
                }

                body .var-three .xm-check {
                    border-color: var(--colorFive) !important;
                }

                body .var-three .mc-label {
                    display: block;
                }

                body .var-three .select-1:last-of-type,
                body .var-three .response_item:last-of-type {
                    margin-bottom: 0;
                }

                body .var-three .bar {
                    bottom: 0;
                    border: 0;
                    height: 100%;
                    left: 0;
                    z-index: -1;
                    box-sizing: content-box;
                    border-right: 100vw solid;
                    width: var(--choicePercentage);
                }

                body .var-three .percent {
                    right: 10px;
                }

                body .var-three .xm-check,
                body .var-three .disabled-check {
                    z-index: 0;
                    border-radius: 10px;
                    left: 15px;
                    width: 0px;
                    height: 0px;
                    border-width: 3px;
                    top: 16px;
                    opacity: 1;
                }

                body .var-three .disabled-check {
                    opacity: 0;
                    border-color: var(--colorFour) !important;
                }

                .gallery > *.align-center.var-three .multiple-choice {
                    width: 80%;
                    margin-left: auto;
                    margin-right: auto;
                    text-align: left;
                }
                body .var-three.align-center .select-1,
                .var-three.align-center .response_item {
                    margin-left: 0;
                    width: 100%;
                }
                body .align-right.var-three h2.xm-heading {
                    text-align: right;
                }
                body .align-right.var-three p.xm-paragraph {
                    text-align: right;
                }
                body .gallery > *.align-right.var-three .multiple-choice {
                    width: 100%;
                }




.gallery-cell {
  width: 100vw;
  height: 100vh;

  margin-right: 0;
  /* counter-increment: gallery-cell; */
}

/* cell number */
.gallery-cell:before {
  /* display: block;
  text-align: center;
  content: counter(gallery-cell);
  line-height: 200px;
  font-size: 80px;
  color: white; */
}

            </style>


            <!-- <div class="xm-progress"><span class="bg-five"></span></div> -->


            @csrf

            <a id="mute-video" class="mute muted bg-one">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-volume-2 color-two"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-volume-x color-two">
                                <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                                <line x1="23" y1="9" x2="17" y2="15"></line>
                                <line x1="17" y1="9" x2="23" y2="15"></line>
                            </svg></a>
            <div class="gallery color-one">




                <div id="snap-0" class="gallery-cell bg bg-two align-mid welcome" data-percent="0%">
                    <div class="xm-container color-one align-mid align-center">
                        <div class="zoomtitle">


                        <small class="xm-page">&nbsp;</small>
                        @if ($survey->logo)
                            <p class="xm-logo"><img src="{{ '/storage/' . $survey->logo }}"
                                    alt="{{ $survey->title }}"></p>
                        @endif
                        <h1 class="xm-display color-one font-display">
                            {{ $survey->title }}</h1>
                        <p class="xm-paragraph color-one font-body">
                            {{ $survey->welcome_message }}</p>
                            <br>
                            <a href="#" class="but button--next but-large bg-five color-four"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                        </div>

                    </div>


                            @if ($survey->background_image)

                                    <img src="{{ url('/storage/' . $survey->background_image) }}" class="xm-img">


                            @endif



                </div>













                @foreach ($survey->questions as $question)

                    <div x-data="{
                    questionColor: '{{ $survey->question_color }}',
                    buttonColor : '{{ $survey->button_color }}',
                    buttonTextColor : '{{ $survey->button_text_color }}',
                    backgroundColor: '{{ $survey->background_color }}'
                }" class="gallery-cell"
                        id="snap-{{ $loop->iteration }}"
                        data-percent="{{ ($loop->iteration / ($loop->count + 1)) * 100 }}%">
                        <div class="xm-container snap-{{ $loop->iteration }}
                                @if ($question->alignment == 0)
                                align-left
                                @endif
                                @if ($question->alignment == 1)
                                align-center
                                @endif
                                @if ($question->alignment == 2)
                                align-right
                                @endif

                                @if ($question->variation == 0)
                                var-one
                                @endif
                                @if ($question->variation == 1)
                                var-two
                                @endif
                                @if ($question->variation == 2)
                                var-three
                                @endif

                                @if ($question->verticalalign == 0)
                                align-top
                                @endif
                                @if ($question->verticalalign == 1)
                                align-mid
                                @endif
                                @if ($question->verticalalign == 2)
                                align-bottom
                                @endif">
                            <div>
                            <small class="xm-page">{{ $loop->iteration }} of {{ $loop->count }}</small>
                            @if ($question->videolink)
                                <span class="xm-gradient"
                                    :style="`background: linear-gradient(180deg, ${buttonColor} -100%, transparent 20%, transparent 60%, ${buttonColor} 100%);`"></span>

                                <video src="{{ $question->videolink }}" playsinline="" muted="" pause="true" loop=""
                                    class="xm-vid"></video>

                            @endif
                            @if ($question->image)
                                @php
                                    $is_video = false;
                                    $ext = substr($question->image, -3);
                                    $ext2 = substr($question->image, -2);
                                    if (in_array($ext, ['mp4', 'avi', 'mkv', 'wmv', 'flv', 'mov']) || in_array($ext2, ['qt'])) {
                                        $is_video = true;
                                    } else {
                                        // this code for image
                                    }
                                @endphp
                                @if (!$is_video)
                                    <img data-flickity-lazyload="{{ url('/storage/' . $question->image) }}" class="xm-img">

                                @else
                                    <video src="{{ url('/storage/' . $question->image) }}" playsinline="" muted=""
                                        pause="true" class="xm-vid vid-sound"></video>

                                @endif
                                {{-- <img data-flickity-lazyload="{{ url('/storage/' . $question->image) }}" class="xm-img"> --}}
                            @endif
                            @if ($question->img_pexels)

                                @if (!Extension::isImage($question->img_pexels))


                                    <video src="{{ $question->img_pexels }}" playsinline="" muted="" pause="true"
                                        loop="" class="xm-vid"></video>
                                @else
                                    <img class="xm-img" src="{{ url('' . $question->img_pexels) }}">
                                @endif
                            @endif

                            <div class="question-fade">
                                <div class="" :style="`color: ${buttonTextColor}`">
                                    <div class="q-content @if ($question->type === \App\Models\Question::MULTIPLE_CHOICES) @endif">
                                        <h2 class="xm-heading font-display color-four @if ($question->type === \App\Models\Question::IMPACT) xm-display @endif  @if (!$question->type === \App\Models\Question::MULTIPLE_CHOICES)   @endif">
                                            {{ $question->text }}</h2>
                                        @if ($question->paragraph)
                                            <p class="font-body color-four xm-paragraph @if ($question->type === \App\Models\Question::MULTIPLE_CHOICES) @else  @endif">
                                                {{ $question->paragraph }}</p>
                                        @endif
                                    </div>

                                </div>
                                <div class="@if ($question->type === \App\Models\Question::MULTIPLE_CHOICES) @endif">

                                    @if ($question->type === \App\Models\Question::MULTIPLE_CHOICES)

                                        <div class="timeline-buttons multiple-choice zoomer w-100">
                                            <!--atas-->
                                            <input type="hidden"   id="input_{{ $question->id }}"
                                                name="response[{{ $question->id }}]" value="">
                                            <!--End atas-->
                                            <div id="question_input_{{ $question->id }}" class="select-group">
                                                @foreach ($question->choices() as $choice)
                                                @if ($choice)
                                                    <div class="select-1 p-0 w-100">
                                                        <div class="custom-control custom-radio w-100 p-0 d-block">
                                                            <input type="radio" data-sor_id="{{ $question->id }}"
                                                                id="customRadio-{{ $question->id . $loop->iteration }}"
                                                                class="custom-control-input xm-check"
                                                                name="response[{{ $question->id }}]"
                                                                value="{{ $choice }}" @if (old('response.' . $question->id) === $choice) checked
                                                @endif>
                                                <label class="mc-label"
                                                    for="customRadio-{{ $question->id . $loop->iteration }}"><span>{{ $choice }}</span></label>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach

                                </div>

                                <div class="display-none output_result" id="soradius_response_{{ $question->id }}">
                                    <div class="previous_responses">
                                        <div class="responses_container" :style="`color: ${buttonTextColor}`"
                                            id="responses_container_{{ $question->id }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="spin-question"></div>
                @endif




                @if ($question->type === \App\Models\Question::YES_NO)

                                        <div class="timeline-buttons multiple-choice zoomer w-100">
                                            <!--atas-->
                                            <input type="hidden"  id="input_{{ $question->id }}"
                                                name="response[{{ $question->id }}]" value="">
                                            <!--End atas-->
                                            <div id="question_input_{{ $question->id }}" class="select-group">
                                                @foreach ($question->choices() as $choice)

                                                    <div class="select-1 p-0 w-100">
                                                        <div class="custom-control custom-radio w-100 p-0 d-block">
                                                            <input type="radio" data-sor_id="{{ $question->id }}"
                                                                id="customRadio-{{ $question->id . $loop->iteration }}"
                                                                class="custom-control-input xm-check"
                                                                name="response[{{ $question->id }}]"
                                                                value="{{ $choice }}" @if (old('response.' . $question->id) === $choice) checked
                                                @endif>
                                                <label class="mc-label"
                                                    for="customRadio-{{ $question->id . $loop->iteration }}"><span>{{ $choice }}</span></label>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                                <div class="display-none output_result" id="soradius_response_{{ $question->id }}">
                                    <div class="previous_responses">
                                        <div class="responses_container" :style="`color: ${buttonTextColor}`"
                                            id="responses_container_{{ $question->id }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="spin-question"></div>
                @endif



                @if ($question->type === \App\Models\Question::SHORT_TEXT)
                    <div class="zoomer w-100">
                        <input type="text" required
                            class="form-control form-control-lg form-control-underline mt-6 text-center mx-auto col-md-9 col-lg-6 bg-transparent text-inherit"
                            data-sor_id="{{ $question->id }}" name="response[{{ $question->id }}]"
                            value="{{ old('response.' . $question->id) }}" placeholder="Respond here ..."
                            :style="`border-color: ${backgroundColor}`">

                        @yield('validIcons')
                    </div>
                @endif

                @if ($question->type === \App\Models\Question::IMPACT)

                @endif

                @if ($question->type === \App\Models\Question::LONG_TEXT)
                    <!-- <label for="visibility"><span
                                        class="x-small">{{ __('Visibility') }}</span></label> -->

                    <div class="form-group">
                        <div class="grow-wrap color-white" data-replicated-value="">
                            <textarea class="form-control" required data-sor_id="{{ $question->id }}"
                                name="response[{{ $question->id }}]" placeholder="Respond here ..."
                                onInput="this.parentNode.dataset.replicatedValue = this.value" rows="1" maxlength="500"
                                autocomplete="off"
                                data-lpignore="true">{{ old('response.' . $question->id) }}</textarea>
                            <span class="inline-edit border-color-five"></span>
                            @yield('validIcons')
                        </div>

                    </div>

                    <!-- <div class="zoomer text-input-box w-100">
                                    <textarea required
                                        class="form-control form-control-underline mt-6 col-md-9 col-lg-6 form-control-lg  bg-transparent text-inherit"
                                        id="" rows="1" data-sor_id="{{ $question->id }}"
                                        name="response[{{ $question->id }}]" placeholder="Respond here ..."
                                        :style="`border-color: ${backgroundColor}`">{{ old('response.' . $question->id) }}</textarea>

                                        @yield('validIcons')
                                </div> -->
                    <!-- <video src="{{ $question->text }}" playsinline="" autoplay="" muted="" loop=""></video> -->
                @endif

                @if ($question->type === \App\Models\Question::NUMBER)
                    <div class="form-group stay-input">
                        <input name="response[{{ $question->id }}]" type="number" required autocomplete="off"
                            data-lpignore="true" data-form-type="text" data-sor_id="{{ $question->id }}"
                            class="font-body color-four form-control-inline-edit full"
                            value="{{ old('response.' . $question->id) }}" placeholder="Enter number here ...">
                        @yield('validIcons')
                    </div>

                    <!-- <div class="zoomer w-100">
                                    <input type="number" required
                                        class="form-control form-control-underline mt-6 text-center mx-auto col-md-9 col-lg-6 form-control-lg bg-transparent text-inherit"
                                        data-sor_id="{{ $question->id }}" name="response[{{ $question->id }}]"
                                        value="{{ old('response.' . $question->id) }}" placeholder="Enter number here ..."
                                        :style="`border-color: ${backgroundColor}`">

                                        @yield('validIcons')
                                </div> -->
                @endif

                @if ($question->type === \App\Models\Question::EMAIL)
                    <div class="form-group stay-input">
                        <input name="response[{{ $question->id }}]" type="email" required autocomplete="off"
                            data-lpignore="true" data-form-type="text" data-sor_id="{{ $question->id }}"
                            class="font-body color-four form-control-inline-edit full"
                            value="{{ old('response.' . $question->id) }}" placeholder="Enter email here ...">
                        @yield('validIcons')
                    </div>
                    <!-- <div class="zoomer w-100" :style="`color: ${buttonTextColor}`">
                                    <input type="email" required
                                        class="form-control form-control-underline mt-6 text-center mx-auto col-md-9 col-lg-6 form-control-lg bg-transparent text-inherit"
                                        data-sor_id="{{ $question->id }}" name="response[{{ $question->id }}]"
                                        value="{{ old('response.' . $question->id) }}"
                                        placeholder="Enter your email here ..." :style="`border-color: ${backgroundColor}`">

                                        @yield('validIcons')
                                </div> -->
                @endif

                @if ($question->type === \App\Models\Question::PHONE)
                    <div class="zoomer w-100">
                        <input id="phone" required
                            class="form-control form-control-underline mt-6 text-center mx-auto col-md-9 col-lg-6 form-control-lg  bg-transparent text-inherit"
                            name="response[{{ $question->id }}]" data-sor_id="{{ $question->id }}" type="tel"
                            value="{{ old('response.' . $question->id) }}" placeholder="Enter your phone here ..."
                            :style="`border-color: ${backgroundColor}`">

                        @yield('validIcons')
                    </div>
                @endif

                @if ($question->type === \App\Models\Question::DATE)
                    <input type="date" required
                        class="form-control form-control-underline mt-6 mx-auto col-md-9 col-md-4"
                        data-sor_id="{{ $question->id }}" name="response[{{ $question->id }}]"
                        value="{{ old('response.' . $question->id) }}" placeholder="Enter date here ..."
                        :style="`border-color: ${backgroundColor}`">

                    @yield('validIcons')
                @endif

                @if ($question->type === \App\Models\Question::DROPDOWN)
                    <div class="d-flex flex-row">
                        <!--atas-->
                        <input type="hidden"  id="input_{{ $question->id }}" name="response[{{ $question->id }}]"
                            value="">
                        <!--End atas-->
                        <div id="question_input_{{ $question->id }}" style="width: 30%">
                            <select id="inputState" class="form-control col-md-12" data-sor_id="{{ $question->id }}"
                                name="response[{{ $question->id }}]"
                                value="{{ old('response.' . $question->id) }}">
                                <option selected disabled>{{ __('Choose...') }}</option>
                                @foreach ($question->choices() as $choice)
                                    <option :style="`color: ${answerColor}`" value="{{ $choice }}"
                                        @if (old('response.' . $question->id) === $choice) selected @endif>{{ $choice }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- <div id="question_input_{{ $question->id }}" class="videos">

                                        @foreach ($question->choices() as $choice)
                                        <div>{!! $choice !!}</div>
                                        @endforeach

                                    </div> -->

                    </div>
                @endif

                @if ($question->type === \App\Models\Question::RATING)
                    <div class="d-flex flex-row">
                        <input type="hidden"  id="input_{{ $question->id }}" name="response[{{ $question->id }}]"
                            value="">
                        <div id="question_input_{{ $question->id }}">
                            <div class="rating sor_rating" x-data="{rating: null}" data-sor_id="{{ $question->id }}"
                                x-init="rating = '{{ old('response.' . $question->id) }}'">
                                <input type="hidden"  x-model="rating" name="response[{{ $question->id }}]"
                                    data-sor_id="{{ $question->id }}" value="">

                                <button type="button" data-sor_value="1" data-sor_id="{{ $question->id }}"
                                    :class="{'active': rating == 1}" @click="rating = 1" class="btn pl-4 pr-4">1
                                </button>
                                <button type="button" data-sor_value="2" data-sor_id="{{ $question->id }}"
                                    :class="{'active': rating == 2}" @click="rating = 2" class="btn  pl-4 pr-4">2
                                </button>
                                <button type="button" data-sor_value="3" data-sor_id="{{ $question->id }}"
                                    :class="{'active': rating == 3}" @click="rating = 3" class="btn  pl-4 pr-4">3
                                </button>
                                <button type="button" data-sor_value="4" data-sor_id="{{ $question->id }}"
                                    :class="{'active': rating == 4}" @click="rating = 4" class="btn  pl-4 pr-4">4
                                </button>
                                <button type="button" data-sor_value="5" data-sor_id="{{ $question->id }}"
                                    :class="{'active': rating == 5}" @click="rating = 5" class="btn pl-4 pr-4">5
                                </button>
                            </div>

                        </div>

                        <div class="display-none output_result ml-5" id="soradius_response_{{ $question->id }}">
                            <div class="previous_responses pl-3 pr-5 pt-2 pb-3 elevated">
                                <div class="responses_container" id="responses_container_{{ $question->id }}">
                                </div>

                            </div>

                        </div>

                        <div class="display-none" id="soradius_loading_{{ $question->id }}" class="ripple">
                            <div class="lds-ripple">
                                <div></div>
                                <div></div>
                            </div>

                        </div>

                    </div>
                @endif

                @if ($question->type === \App\Models\Question::SLIDER)
                    <div class="quest-ranger quest-ranger-{{ $loop->iteration }}">
                        <input type="range" class="range-{{ $loop->iteration }}"
                            data-sor_id="{{ $question->id }}" min="{{ $question->choices()[0] }}"
                            max="{{ $question->choices()[1] }}" data-orientation="horizontal" name="foo">
                        <output class="slider-output slider-output-{{ $loop->iteration }}"></output>
                        <input type="hidden"  id="abc" name="response[{{ $question->id }}]" value="2"
                            class="slid-op slid-op-{{ $loop->iteration }}">
                    </div>
                @endif

                @error('response.' . $question->id)
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                @unless($loop->last)

                @endunless



                </div></div>


    </div>

    </div>
    <ul class="gallery-buttons">
  <!-- <li><a href="#" class="but button--previous but-plain but-large bg-three border-color-five color-four"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 8 12 12 16"></polyline><line x1="16" y1="12" x2="8" y2="12"></line></svg></a></li> -->
  <li><a href="#" class="but button--next but-large bg-three color-four">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
    </a></li>
</ul>

    </div>
    @endforeach



    <div class="gallery-cell thank-you-snap bg" id="snap-end" data-percent="100%">
        @if (request()->has('embed'))
            <input type="hidden"  name="embed" value="true">
        @endif
        <div class="xm-container align-mid bg-two align-center">
            <div>
            <small class="xm-page">&nbsp;</small>

            <p class="zoomtitle xm-paragraph color-one font-body">
                {{ $survey->goodbye_text ?? __('Thanks for your time') }}</p>

            @if ($survey->redirect_url)
                <p class="zoomtitle xm-paragraph color-one url-link"><a class="color-one border-color-one" target="_blank"
                        href="{{ $survey->redirect_url }}">Find out more</a></p>
            @endif

            <a class="powered-by color-one" href="/"><span>Powered by</span>
                <svg width="152px" height="40px" viewBox="0 0 152 40" version="1.1"
                    xmlns="http://www.w3.org/2010911/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="builder" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="logo" fill-rule="nonzero">
                            <polygon id="Path" fill="currentColor"
                                points="42.4298562 20.7723306 37.8611379 20.7723306 37.8611379 23.8827304 43.2230365 23.8827304 43.2230365 25.8047979 35.4815971 25.8047979 35.4815971 14.1926388 43.2071729 14.1926388 43.2071729 16.1306571 37.8611379 16.1306571 37.8611379 18.8981154 42.4298562 18.8981154">
                            </polygon>
                            <polygon id="Path" fill="currentColor"
                                points="70.9631942 25.8047979 68.674762 25.8047979 64.2199472 18.1643801 64.2199472 25.8047979 61.9315149 25.8047979 61.9315149 14.1926388 64.2199472 14.1926388 68.6823901 21.8490074 68.6823901 14.1926388 70.9631942 14.1926388">
                            </polygon>
                            <path
                                d="M93.5423924,14.1926388 C94.5523917,14.1926388 95.4501091112,14.4190323 96.2352479,14.871826 C97.0204946,15.3246196 97.6281499,15.9740454 98.058232,16.8201227 C98.4883141,17.6662 98.7033519,18.642926 98.7033519,19.7503299 L98.7033519,20.2548689 C98.7033519,21.3674477 98.4924761,22.34288 98.0707182,23.1811951 C97.6489602,24.0195103 97.045467,24.6663487 96.2602203,25.1217297 C95.4749736,25.5771108 94.5745894,25.8047979 93.5590406,25.8047979 C92.5545908,25.8047979 91.6583686,25.5796981 90.8703472,25.1294919 C90.0823257,24.6792856 89.4718958,24.0363282 89.0390389,23.2006005 C88.6061821,22.3648727 88.3869822,21.4036709 88.3814328,20.316966 L88.3814328,19.7580921 C88.3814328,18.6455133 88.5964706,17.6662 89.0265527,16.8201227 C89.4566349,15.9740454 90.0642901,15.3246196 90.8495368,14.871826 C91.6347835,14.4190323 92.5323931,14.1926388 93.5423924,14.1926388 Z M93.5423924,16.1176492 C92.7044259,16.1176492 92.0579251,16.4216632 91.6028705,17.0297004 C91.1478158,17.6377376 90.9175173,18.529081 90.9119678,19.7037571 L90.9119678,20.2548689 C90.9119678,21.4088459 91.1394917,22.3040703 91.5945463,22.9405688 C92.049601,23.5770674 92.7044258,23.8953118 93.5590406,23.8953118 C94.3970071,23.8953118 95.0407332,23.5887104 95.4902384,22.9754984 C95.9397436,22.3622864 96.1672675,21.4683558 96.1728169,20.2936796 L96.1728169,19.7425678 C96.1728169,18.5575421 95.945293,17.657143 95.4902384,17.0413436 C95.0351838,16.4255442 94.3859083,16.1176492 93.5423924,16.1176492 Z"
                                id="Combined-Shape" fill="currentColor"></path>
                            <polygon id="Path" fill="currentColor"
                                points="117.802608 14.1926388 120.63743 22.6146443 123.457093 14.1926388 126.44351 14.1926388 126.44351 25.8047979 124.162008 25.8047979 124.162008 22.6305951 124.389401 17.1515063 121.410563 25.8047979 119.849137 25.8047979 116.87788 17.1594817 117.105272 22.6305951 117.105272 25.8047979 114.831351 25.8047979 114.831351 14.1926388">
                            </polygon>
                            <polygon id="Path" fill="currentColor"
                                points="150.810109117 20.7723306 146.241289 20.7723306 146.241289 23.8827304 151.603188 23.8827304 151.603188 25.8047979 143.861748 25.8047979 143.861748 14.1926388 151.587324 14.1926388 151.587324 16.1306571 146.241289 16.1306571 146.241289 18.8981154 150.810109117 18.8981154">
                            </polygon>
                            <rect id="Rectangle" stroke="currentColor" stroke-width="2" fill-opacity="0"
                                fill="currentColor" x="0.645119947" y="0.645119947" width="23.2243181"
                                height="38.7071968" rx="5.16095958">
                            </rect>
                            <polygon id="Combined-Shape" fill="currentColor"
                                points="12.257279 18.1962816 14.4972503 14.1926388 17.3279833 14.1926388 13.8490535 19.9508661 17.4182386 25.8047979 14.5546855 25.8047979 12.257279 21.7373521 9.95987251 25.8047979 7.09631942 25.8047979 10.6655045 19.9508661 7.18657468 14.1926388 10.0173077 14.1926388">
                            </polygon>
                        </g>
                    </g>
                </svg>
            </a>

            </div>


        </div>


    </div>





    </form>
    </div>
</section>
<style type="text/css">
    body .question-fade input[type="email"]:not(:focus):not(:placeholder-shown)~.spin,
    body .question-fade input[type="text"]:not(:focus):not(:placeholder-shown)~.spin,
    body .question-fade input[type="number"]:not(:focus):not(:placeholder-shown)~.spin,
    body .question-fade textarea:not(:focus):not(:placeholder-shown)~.spin,
    .spin-question {
        border-right-color: {{ $survey->background_color }};
    }

    html {
        --question: {{ $survey->background_color }};
    }

    body .question-fade input[type="email"]:valid:not(:focus):not(:placeholder-shown)+.valid,
    body .question-fade input[type="text"]:valid:not(:focus):not(:placeholder-shown)+.valid,
    body .question-fade input[type="number"]:valid:not(:focus):not(:placeholder-shown)+.valid,
    body .question-fade textarea:valid:not(:focus):not(:placeholder-shown)+.valid {
        border-color: {{ $survey->button_text_color }};
    }

    .form-group.stay-input input,
    .form-group.stay-input input:focus {
        border-color: var(--colorFive);
    }

    body .form-control::-webkit-input-placeholder,
    .form-group.stay-input input::-webkit-input-placeholder {
        color: inherit;
        font-style: italic;
        font-weight: 200;
    }

    body .form-control::-moz-placeholder,
    .form-group.stay-input input::-moz-placeholder {
        color: inherit;
        font-style: italic;
        font-weight: 200;
    }

    body .form-control:-ms-input-placeholder,
    .form-group.stay-input input:-ms-input-placeholder {
        color: inherit;
        font-style: italic;
        font-weight: 200;
    }

    body .form-control:-moz-placeholder,
    .form-group.stay-input input:-moz-placeholder {
        color: inherit;
        font-style: italic;
        font-weight: 200;
    }
    /* @media (pointer:fine) {


    .gallery::-webkit-scrollbar {
        position: fixed;
        right: 0;
        top: 0;
        width: 10px;
        z-index: 100;
    }
    .gallery {
    scrollbar-width: thin;
    scrollbar-color: var(--thumbBG) var(--scrollbarBG);
    }
    .gallery::-webkit-scrollbar-track {
    background: var(--colorTwo);
    background: transparent;
    }
    .gallery::-webkit-scrollbar-thumb {
    background-color: var(--colorFive);
    border-radius: 0;
    width: 10px;
    }

} */
</style>


<script>
    let font = 'Maven Pro'
</script>
@yield('fonts')

@endsection

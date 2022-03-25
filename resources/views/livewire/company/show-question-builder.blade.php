<div>
@section('buttonCustom')
<div class="add-menu">
    <ul>
        @foreach ($questionTypes as $type => $label)
        <li><a class="thumb-item" href="javascript:void(0);"
                wire:click="addQuestion('{{ $survey->uuid }}', '{{ $type }}')"><div class="inside"><p>{{ $label }}</p></div></a></li>
        @endforeach
    </ul>
</div>
@endsection

<section class="position-relative">
    <div>
        <div class="" x-data="{
                    questionColor: '{{ $survey->question_color }}',
                    buttonColor : '{{ $survey->button_color }}',
                    buttonTextColor : '{{ $survey->button_text_color }}',
                    backgroundColor: '{{ $survey->background_color }}',
                    answerColor: '{{ $survey->answer_color }}'
                }" x-init="document.body.style.backgroundColor = buttonColor;">


                <style>
        html {
            --colorOne: {{ $survey->question_color }};
            --colorTwo: {{ $survey->answer_color }};
            --colorThree: {{ $survey->button_color }};
            --colorFour: {{ $survey->button_text_color }};
            --colorFive: {{ $survey->background_color }};
            --fontDisplay: {{ ($survey->font_display?(json_decode($survey->font_display)->family):'Roboto') }};
            --fontBody: {{ ($survey->font_body?(json_decode($survey->font_body)->family):'Roboto') }};
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
        .stroke-one { stroke: var(--colorOne); }
        .stroke-two { stroke: var(--colorTwo); }
        .stroke-three { stroke: var(--colorThree); }
        .stroke-four { stroke: var(--colorFour); }
        .stroke-five { stroke: var(--colorFive); }
        .border-color-one { border-color: var(--colorOne); }
        .border-color-two { border-color: var(--colorTwo); }
        .border-color-three { border-color: var(--colorThree); }
        .border-color-four { border-color: var(--colorFour); }
        .border-color-five { border-color: var(--colorFive); }
        .font-display { font-family: var(--fontDisplay);}
        .font-body { font-family: var(--fontBody);}

        body .multi-choice .grow-wrap:before { border-color: var(--colorFive); }
        /* .var-two .multi-choice .grow-wrap:before { border-color: var(--colorFour); } */


        .var-two .bg-four { background: var(--colorThree); }
        .var-two .bg-three { background: var(--colorFour); }
        .var-two .color-four { color: var(--colorThree); }
        .var-two .color-three { color: var(--colorFour); }
        .var-two .stroke-four { stroke: var(--colorThree); }
        .var-two .stroke-three { stroke: var(--colorFour); }
        .var-two .border-color-four { border-color: var(--colorThree); }
        .var-two .border-color-three { border-color: var(--colorFour); }
        .var-two .font-display { font-family: var(--fontBody);}
        .var-two .grow-wrap > textarea { background: var(--colorFour); }
        .var-two .grow-wrap label.color-four, .var-two .form-group small { color: var(--colorFour); }
        .var-two .multi-choice .grow-wrap > textarea { background: var(--colorFour); color: var(--colorThree); }
        .var-two .multi-choice .grow-wrap > textarea + .inline-edit { border-color: var(--colorThree);  }
        .var-two .btn-add-answer span { border-color: var(--colorThree); }
        .var-two .btn-add-answer { color: var(--colorFour); }
        .var-two .form-group a svg { color: var(--colorThree); }

    </style>







            <div class="builder-main">
            @include('company.survey.tab', ['activeTab' => 'questions', 'survey' => $survey])




                <form id="subForm" wire:submit.prevent="submit">
                    <div class="" x-data="{
                        questionColor: '{{ $survey->question_color }}',
                        buttonColor : '{{ $survey->button_color }}',
                        buttonTextColor : '{{ $survey->button_text_color }}',
                        backgroundColor: '{{ $survey->background_color }}',
                        answerColor: '{{ $survey->answer_color }}'
                    }">
                        @if ($activeQuestion)


                        <div class="">
                            <div class="question-tab">


                                <!-- start card -->
                                <div class="card-build
                                @if ($activeQuestion->alignment ==
                                0)
                                align-left
                                @endif
                                @if ($activeQuestion->alignment ==
                                1)
                                align-center
                                @endif
                                @if ($activeQuestion->alignment ==
                                2)
                                align-right
                                @endif

                                @if ($activeQuestion->variation ==
                                0)
                                var-one
                                @endif
                                @if ($activeQuestion->variation ==
                                1)
                                var-two
                                @endif
                                @if ($activeQuestion->variation ==
                                2)
                                var-three
                                @endif

                                @if ($activeQuestion->verticalalign ==
                                0)
                                align-top
                                @endif
                                @if ($activeQuestion->verticalalign ==
                                1)
                                align-mid
                                @endif
                                @if ($activeQuestion->verticalalign ==
                                2)
                                align-bottom
                                @endif
                                                            " :style="`background-color: ${buttonColor}`">



                                    <div class="position-relative z-index-1">




                                        @include('company.shared.expand-input', [
                                        'inputid' => 'text',
                                        'inputrows' => '1',
                                        'inputchars' => '300',
                                        'inputfont' => 'font-display',
                                        'inputcolor' => 'color-four',
                                        'inputbordercolor' => 'border-color-four',
                                        'inputname' => 'Title'
                                        ])



                                        @include('company.shared.expand-input', [
                                        'inputid' => 'paragraph',
                                        'inputrows' => '1',
                                        'inputchars' => '300',
                                        'inputfont' => 'font-body',
                                        'inputcolor' => 'color-four',
                                        'inputbordercolor' => 'border-color-four',
                                        'inputname' => 'Description (optional)'
                                        ])



                                        @if (in_array($activeQuestion->type, ['multiple-choices', 'dropdown']))
                                        <div class="multi-choice bubblewrap">
                                            <div class="form-group answers">
                                                <small class="color-four" for="answer-0">{{ __('Answers') }}</small>

                                                @foreach ($choices as $key => $choice)
                                                <div class="rel">
                                                <div class="grow-wrap color-four
                                                font-body" data-replicated-value="{{ $choice }}">
                                                    <textarea wire:change="submitForm" wire:model.debounce.500ms="choices.{{ $key }}" name="answer-{{ $loop->iteration }}" id="answer-{{ $loop->iteration }}" onInput="this.parentNode.dataset.replicatedValue = this.value" autocomplete="off" rows="1" data-lpignore="true" placeholder="Answer"></textarea>
                                                    <span class="inline-edit border-color-four"></span>

                                                </div>

                                                <a href="javascript:void(0);" wire:key="{{ $key }}"
                                                        :style="`color: ${buttonTextColor}`" class="delete-icon"
                                                        wire:click="deleteChoice('{{ $key }}')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                                        </svg>
                                                    </a>

                                                    </div>

                                                @endforeach
                                            </div>


                                                <button class="btn-add-answer color-four"
                                                    wire:click.prevent="addChoice({{ $activeQuestion->id }})">
                                                    <span class="border-color-four"></span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                </button>

                                        </div>
                                        @endif

                                        @if (in_array($activeQuestion->type, ['yes-no']))
                                        <div class="multi-choice yes-no bubblewrap">
                                            <div class="form-group answers">
                                                <small class="color-four" for="answer-0">{{ __('Answers') }}</small>

                                                @foreach ($choices as $key => $choice)
                                                <div class="rel">
                                                <div class="grow-wrap color-four
                                                font-body" data-replicated-value="{{ $choice }}">
                                                    <textarea wire:change="submitForm" wire:model.debounce.500ms="choices.{{ $key }}" name="answer-{{ $loop->iteration }}" id="answer-{{ $loop->iteration }}" onInput="this.parentNode.dataset.replicatedValue = this.value" autocomplete="off" rows="1" data-lpignore="true"></textarea>
                                                    <span class="inline-edit border-color-four"></span>

                                                </div>

                                                <a href="javascript:void(0);" wire:key="{{ $key }}"
                                                        :style="`color: ${buttonTextColor}`" class="delete-icon"
                                                        wire:click="deleteChoice('{{ $key }}')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                                        </svg>
                                                    </a>

                                                    </div>

                                                @endforeach
                                            </div>




                                        </div>
                                        @endif
















                                            @if (in_array($activeQuestion->type, ['slider']))
                                            <div class="form-group">
                                            <label
                                                for="visibility">{{ __('Enter your minimum & maximum range value for the
                                                                                                                                                    slider') }}</label>
                                            @foreach ($choices as $key => $choice)
                                            <div class="next-choice">
                                                <div class="col-md-12 col-12 px-0 d-flex">
                                                    <div class="col-md-10 px-0">
                                                        <input type="number" class="form-control"
                                                            wire:model.debounce.500ms="choices.{{ $key }}">
                                                    </div>

                                                </div>
                                            </div>
                                            @endforeach
                                            </div>
                                            @endif






                                        @if (isset($activeQuestion->image) && $activeQuestion->image)
                                            @php
                                                $is_video=false;
                                                $ext=substr($activeQuestion->image,-3);
                                                $ext2=substr($activeQuestion->image,-2);
                                                if (in_array($ext,['mp4','avi','mkv','wmv','flv']) || in_array($ext2,['qt'])) {
                                                   $is_video=true;
                                                } else {
                                                    // this code for image
                                                }
                                            @endphp

                                            @if(!$is_video)
                                            <img class="full-stretch"
                                                src="{{ url('/storage/' . $activeQuestion->image) }}"
                                                class="img-fluid back-img">

                                            @else
                                            <video class="full-stretch" src="{{ url('/storage/' . $activeQuestion->image)}}"
                                                playsinline="" muted="" loop="" autoplay></video>
                                            @endif
                                        @endif

                                        <a href="javascript:void(0);" class="full-edit"></a>

                                        @if ($activeQuestion->img_pexels)
                                            @if(!Extension::isImage($activeQuestion->img_pexels))

                                            <video class="full-stretch" src="{{ url( $activeQuestion->img_pexels)}}"
                                                playsinline="" muted="" loop="" autoplay></video>
                                            @else
                                            <img class="full-stretch"
                                                src="{{ url('' . $activeQuestion->img_pexels) }}">
                                            @endif



                                        @endif


                                    </div>
                                    <!-- <a class="back-button" href="{{ route('company.surveys.edit', $survey) }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>Back</a> -->






                                    <!-- end card -->

                                    <!-- <nav class="tab-bar">

<div>
<ul role="tablist">
	<li class="nav-item">
    <a class="done dark" href="#">@foreach(range(1, $questions->count()) as $position)
                     @if($activeQuestion->position == $position) {{ $position }} of {{ $questions->count() }} @endif </option>
                @endforeach <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

	</li>
    <li class="nav-item">
    <a class="done" href="#">Done</a>
	</li>
</ul>
</div>

</nav> -->

                                    <ul class="q-custom">
                                        <li class="edit-mode">
                                                <div class="set-group alignment-switch">
                                                    <div class="@if ($activeQuestion->alignment ==
                                                            0)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->alignment ==
                                                            2)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.alignment" type="radio" id="align-left" name="alignment" value="0">
                                                        <label for="align-left">{{ __('Align left') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left"><line x1="17" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="17" y1="18" x2="3" y2="18"></line></svg></span></label>
                                                    </div>
                                                    <div class="@if ($activeQuestion->alignment ==
                                                            1)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->alignment ==
                                                            0)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.alignment" type="radio" id="align-center" name="alignment" value="1">
                                                        <label for="align-center">{{ __('Align center') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-center"><line x1="18" y1="10" x2="6" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="18" y1="18" x2="6" y2="18"></line></svg></span></label>
                                                    </div>
                                                    <div class="@if ($activeQuestion->alignment ==
                                                            2)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->alignment ==
                                                            1)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.alignment" type="radio" id="align-right" name="alignment" value="2">
                                                        <label for="align-right">{{ __('Align right') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-right"><line x1="21" y1="10" x2="7" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="7" y2="18"></line></svg></span></label>
                                                    </div>
                                                </div>
                                        </li>

                                        <li class="edit-mode">
                                                <div class="set-group verticalalign-switch">
                                                    <div class="@if ($activeQuestion->verticalalign ==
                                                            0)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->verticalalign ==
                                                            2)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.verticalalign" type="radio" id="align-top" name="verticalalign" value="0">
                                                        <label for="align-top">{{ __('Align top') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line></svg></span></label>
                                                    </div>
                                                    <div class="@if ($activeQuestion->verticalalign ==
                                                            1)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->verticalalign ==
                                                            0)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.verticalalign" type="radio" id="align-mid" name="verticalalign" value="1">
                                                        <label for="align-mid">{{ __('Align mid') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg>
</span></label>
                                                    </div>
                                                    <div class="@if ($activeQuestion->verticalalign ==
                                                            2)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->verticalalign ==
                                                            1)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.verticalalign" type="radio" id="align-bottom" name="verticalalign" value="2">
                                                        <label for="align-bottom">{{ __('Align bottom') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="8 12 12 16 16 12"></polyline><line x1="12" y1="8" x2="12" y2="16"></line></svg></span></label>
                                                    </div>
                                                </div>
                                        </li>

                                        <li class="auto before-mode">

                                        <script>
$(document).ready(function() {

    $('.done').on("click", function() {
        $('.done-button').toggleClass("open");
        $('.q-custom > li > a.q-settings').toggleClass("below");
    });
    $('.full-edit').on("click", function() {
        $('body').toggleClass("editing-mode");
         $('.show-selected-value').toggleClass("editing-mode");
    });




    $('.card-build .grow-wrap').on("click", function() {
        $('body').addClass("editing-mode");
    });
    $('.complete').on("click", function() {
        $('body').removeClass("editing-mode");
    });
    $('.delete-section').on("click", function() {
        $('body').removeClass("editing-mode");
    });
    $('.add-button').on("click", function() {
        $('.add-section-menu').toggleClass("open");
        $(this).toggleClass("open");
    });
    $('.q-settings').on("click", function() {
        $(this).toggleClass("close");
        $('.settings-menu').toggleClass("open");
        $('.settings-overlay').toggleClass("open");
        $('.q-custom.bottom').toggleClass("down");
    });

    $('.pexels-btn').on("click", function() {
        $(this).toggleClass("close");
        $('.pexels-modal').toggleClass("show");
    });
    $('.pexels-modal .close-pexels').on("click", function() {
        $('.pexels-modal').removeClass("show");
    });
    $('.builder .add').on("click", function() {
        $(this).toggleClass("close");
        $('.add-menu').toggleClass("overlay");
    });

    $('input[type=radio][name=visibility]').change(function(){
      if (this.value == '1'){
        $('input[type=radio][name=visibility]').parent().removeClass('top');
        $('input[type=radio][name=visibility]').parent().removeClass('visible');
        $(this).parent().next().addClass("top");
        $(this).parent().addClass("visible");
      }
      if (this.value == '0'){
        $('input[type=radio][name=visibility]').parent().removeClass('top');
        $('input[type=radio][name=visibility]').parent().removeClass('visible');
        $(this).parent().prev().addClass("top");
        $(this).parent().addClass("visible");
      }
  });

  $('input[type=radio][name=alignment]').change(function(){
    var parent = $(this).parent().parent().parent().parent().parent();
        if (this.value == '0'){
        $('input[type=radio][name=alignment]').parent().removeClass('top visible');
        $('#align-center').parent().addClass("top");
        $(this).parent().addClass("visible");
        parent.addClass("align-left");
        parent.removeClass("align-center align-right");
      }
      if (this.value == '1'){
        $('input[type=radio][name=alignment]').parent().removeClass('top visible');
        $('#align-right').parent().addClass("top");
        $(this).parent().addClass("visible");
        parent.removeClass("align-left align-right");
        parent.addClass("align-center");
      }
      if (this.value == '2'){
        $('input[type=radio][name=alignment]').parent().removeClass('top visible');
        $('#align-left').parent().addClass("top");
        $(this).parent().addClass("visible");
        parent.removeClass("align-left");
        parent.removeClass("align-center");
        parent.addClass("align-right");
      }
  });

  $('input[type=radio][name=verticalalign]').change(function(){
    var parent = $(this).parent().parent().parent().parent().parent();
        if (this.value == '0'){
        $('input[type=radio][name=verticalalign]').parent().removeClass('top visible');
        $('#align-mid').parent().addClass("top");
        $(this).parent().addClass("visible");
        parent.addClass("align-top");
        parent.removeClass("align-mid");
        parent.removeClass("align-bottom");
      }
      if (this.value == '1'){
        $('input[type=radio][name=verticalalign]').parent().removeClass('top visible');
        $('#align-bottom').parent().addClass("top");
        $(this).parent().addClass("visible");
        parent.removeClass("align-top");
        parent.addClass("align-mid");
        parent.removeClass("align-bottom");
      }
      if (this.value == '2'){
        $('input[type=radio][name=verticalalign]').parent().removeClass('top visible');
        $('#align-top').parent().addClass("top");
        $(this).parent().addClass("visible");
        parent.removeClass("align-top");
        parent.removeClass("align-mid");
        parent.addClass("align-bottom");
      }
  });

  $('input[type=radio][name=variation]').change(function(){
    var parent = $(this).parent().parent().parent().parent().parent();
      if (this.value == '0'){
        $('input[type=radio][name=variation]').parent().removeClass('top visible');
        $('#var-two').parent().addClass("top");
        $(this).parent().addClass("visible");
        parent.addClass("var-one");
        parent.removeClass("var-two var-three");
      }
      if (this.value == '1'){
        $('input[type=radio][name=variation]').parent().removeClass('top visible');
        $('#var-three').parent().addClass("top");
        $(this).parent().addClass("visible");
        parent.removeClass("var-one var-three");
        parent.addClass("var-two");
      }
      if (this.value == '2'){
        $('input[type=radio][name=variation]').parent().removeClass('top visible');
        $('#var-one').parent().addClass("top");
        $(this).parent().addClass("visible");
        parent.removeClass("var-one var-two");
        parent.addClass("var-three");
      }
  });



});
</script>

<div class="done-button">
    <a class="done" href="javascript:void(0);">
        <span>
                        @php $j=1; @endphp
                        @foreach($questions as $position)

                     @if($activeQuestion && $position->id == $activeQuestion->id) {{ $j }} of {{ $questions->count() }}
                    @endif
                </option>
                 @php $j++; @endphp
                @endforeach
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
    </a>
        <ul wire:sortable="updateTaskOrder">

        @php $i=1; @endphp
        @foreach ($questions as $question)
        <li wire:sortable.item="{{ $question->id }}" wire:key="question-{{ $question->id }}">


            <a href="javascript:void(0);" wire:click="showQuestion('{{ $question->id }}')"
            class="@if ($activeQuestion && $question->id == $activeQuestion->id) active @endif"
            data-toggle="flickity"
            data-target="#coworkingOptions" data-slide="2">




                    <!-- <img src="{{ asset('company/img')}}/{{$question['type']}}.svg"> -->
                    <span><span>{{ $i }}</span> {{ $question->text }}

                    <small wire:sortable.handle><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-move"><polyline points="5 9 2 12 5 15"></polyline><polyline points="9 5 12 2 15 5"></polyline><polyline points="15 19 12 22 9 19"></polyline><polyline points="19 9 22 12 19 15"></polyline><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line></svg></small></span>



            </a>

        </li>
    @php $i++; @endphp
    @endforeach
    </ul>

</div>
</li>

                        @if($select_type == 'multiple-choices')
                        <li class="edit-mode">
                            <select id="name" wire:change="ChooseShow($event.target.value)">
                                 <option value="">Select value</option>
                                 @foreach($privilegeArray as $Privilegearray_key => $Privilegearray_value)

                                <option value="{{$Privilegearray_key}}">{{$Privilegearray_value['name']}}</option>
                                @endforeach
                            </select>
                        </li>
                        @endif
                         <li class="edit-mode">

                             @if($select_type != 'multiple-choices')
                            <select id="name" wire:change="ChooseShow($event.target.value)">
                                 <option value="">Select value</option>
                                 @foreach($privilegeArray as $Privilegearray_key => $Privilegearray_value)

                                <option value="{{$Privilegearray_key}}">{{$Privilegearray_value['name']}}</option>
                                @endforeach
                            </select>
                              @endif

                        </li>
                                        <!-- <li class="before-mode">

                                            <a class="edit-button" href="#">

                                            </a>
                                        </li> -->

                                        <li class="before-mode push-right">

                                            <a class="q-settings" href="#">
                                                <span><span></span></span>
                                            </a>

                                            <div class="settings-menu">

                                                <div class="set-group visibility-switch">
                                                    <div class="@if ($activeQuestion->visibility ==
                                                            1)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->visibility ==
                                                            0)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.visibility" type="radio" id="yes" name="visibility" value="1">
                                                        <label for="yes">{{ __('Visible') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span></label>
                                                    </div>
                                                    <div class="@if ($activeQuestion->visibility ==
                                                            0)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->visibility ==
                                                            1)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.visibility" type="radio" id="no" name="visibility" value="0">
                                                        <label for="no">{{ __('Hidden') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg></span></label>
                                                    </div>
                                                </div>

                                                <!-- <div class="set-group is-required-switch">
                                                    <div class="@if ($activeQuestion->is_required ==
                                                            1)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->is_required ==
                                                            0)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.is_required" type="radio" id="reqd" name="is_required" value="1">
                                                        <label for="reqd">{{ __('Required') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></span></label>
                                                    </div>
                                                    <div class="@if ($activeQuestion->is_required ==
                                                            0)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->is_required ==
                                                            1)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.is_required" type="radio" id="not" name="is_required" value="0">
                                                        <label for="not">{{ __('Not required') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="15" x2="16" y2="15"></line><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg></span></label>
                                                    </div>
                                                </div> -->

                                                @if ($activeQuestion->attributes)
                                                    @if (array_key_exists('choice_selection_count',
                                                    $activeQuestion->attributes))
                                                    <input type="hidden"
                                                        wire:model.defer="activeQuestion.attributes.choice_selection_count"
                                                        value="1">
                                                    @endif


                                                    @if (array_key_exists('date_format', $activeQuestion->attributes))
                                                    <div class="set-group">
                                                        <label for="date_format"><span
                                                                class="x-small text-black-60">{{ __('Date
                                                                                                                                        Format') }}</span></label>
                                                        <select wire:model.defer="activeQuestion.attributes.date_format"
                                                            class="form-select form-control-underline">
                                                            <option value="MMDDYYYY" selected>MMDDYYYY</option>
                                                            <option value="DDMMYYYY">DDMMYYYY</option>
                                                            <option value="YYYYMMDD">YYYYMMDD</option>
                                                        </select>
                                                    </div>
                                                    @endif

                                                    @if (array_key_exists('alphabetical_order',
                                                    $activeQuestion->attributes))
                                                    <div class="set-group">
                                                        <label for="alphabetical_order"><span
                                                                class="x-small text-black-60">{{ __('Alphabetical Order') }}</span></label>
                                                        <select
                                                            wire:model.defer="activeQuestion.attributes.alphabetical_order"
                                                            class="form-select form-control-underline">
                                                            <option value="1" selected>{{ __('Yes') }}</option>
                                                            <option value="0">{{ __('No') }}</option>
                                                        </select>
                                                    </div>
                                                    @endif
                                                @endif

                                                <a href="javascript:void(0);" class="delete-section"
                                                    wire:click="deleteQuestion('{{ $activeQuestion->id }}')">
                                                    Delete<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></span>
                                                </a>


                                            </div>
                                            <div class="settings-overlay">
                                            </div>
                                        </li>

                                        <li class="auto edit-mode">
                                            <a href="javascript:void(0);" class="complete" wire:click="submitForm">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>


                                            </a>
                                                                </li>

                                    </ul>



                                    <ul class="q-custom bottom">



                                        <li class="edit-mode">




                                                    <div class="file-input">
                                                        <input id="img_inp" type="file" wire:change="submitForm"
                                                            class="add-media display-4 full d-block w-100  form-control-inline-edit @error('image') is-invalid @enderror text-center"
                                                            name="image" autocomplete="off" data-lpignore="true"
                                                            data-form-type="text" value="" wire:model="image"
                                                            wire:blur="submitForm">
                                                        <span
                                                            class='button'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg></span>
                                                        <span class='label color-two' data-js-label></label>
                                                            @error('image')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                    </div>



                                            <script>
                                            var inputs = document.querySelectorAll('.file-input')

                                            for (var i = 0, len = inputs.length; i < len; i++) {
                                                customInput(inputs[i])
                                            }

                                            function customInput(el) {
                                                const fileInput = el.querySelector('.add-media')
                                                const label = el.querySelector('[data-js-label]')

                                                fileInput.onchange =
                                                    fileInput.onmouseout = function() {
                                                        if (!fileInput.value) return

                                                        var value = fileInput.value.replace(/^.*[\\\/]/, '')
                                                        el.className += ' -chosen'
                                                        label.innerText = value
                                                    }
                                            }
                                            </script>
                                        </li>

                                        <li class="auto before-mode">
                                        <a class="add-button" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>

                                        </li>

                                        <li class="edit-mode">
                                                <div class="set-group variation-switch">
                                                    <div class="@if ($activeQuestion->variation ==
                                                            0)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->variation ==
                                                            2)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.variation" type="radio" id="var-one" name="variation" value="0">
                                                        <label for="var-one">{{ __('Variation one') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="27" height="10" viewBox="0 0 27 10">
  <g id="one" transform="translate(-6443 3690)">
    <g id="Ellipse_17" data-name="Ellipse 17" transform="translate(6443 -3690)" fill="none" stroke="#fff" stroke-width="1">
      <circle cx="5" cy="5" r="5" stroke="none"/>
      <circle cx="5" cy="5" r="4.5" fill="none"/>
    </g>
    <rect id="Rectangle_4109" data-name="Rectangle 4109" width="14" height="2" rx="1" transform="translate(6456 -3686)" fill="#fff"/>
  </g>
</svg>

</span></label>
                                                    </div>
                                                    <div class="@if ($activeQuestion->variation ==
                                                            1)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->variation ==
                                                            0)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.variation" type="radio" id="var-two" name="variation" value="1">
                                                        <label for="var-two">{{ __('Variation two') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" viewBox="0 0 24 14">
  <g id="two" transform="translate(-6402 3692)">
    <path id="Rectangle_4108" data-name="Rectangle 4108" d="M5,0H19a5,5,0,0,1,5,5v9a0,0,0,0,1,0,0H5A5,5,0,0,1,0,9V5A5,5,0,0,1,5,0Z" transform="translate(6402 -3692)" fill="#fff"/>
    <circle id="Ellipse_17" data-name="Ellipse 17" cx="3" cy="3" r="3" transform="translate(6405 -3688)" fill="#0d111d"/>
    <rect id="Rectangle_4109" data-name="Rectangle 4109" width="9" height="2" rx="1" transform="translate(6414 -3686)" fill="#0d111d"/>
  </g>
</svg>

</span></label>
                                                    </div>
                                                    <div class="@if ($activeQuestion->variation ==
                                                            2)
                                                            visible
                                                            @endif
                                                            @if ($activeQuestion->variation ==
                                                            1)
                                                            top
                                                            @endif">
                                                        <input wire:model.defer="activeQuestion.variation" type="radio" id="var-three" name="variation" value="2">
                                                        <label for="var-three">{{ __('Variation three') }}<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" viewBox="0 0 24 14">
  <g id="three" transform="translate(-6488 3692)">
    <g id="Rectangle_4108" data-name="Rectangle 4108" transform="translate(6488 -3692)" fill="none" stroke="#fff" stroke-width="1">
      <rect width="24" height="14" rx="5" stroke="none"/>
      <rect x="0.5" y="0.5" width="23" height="13" rx="4.5" fill="none"/>
    </g>
    <circle id="Ellipse_17" data-name="Ellipse 17" cx="3" cy="3" r="3" transform="translate(6491 -3688)" fill="#fff"/>
    <rect id="Rectangle_4109" data-name="Rectangle 4109" width="9" height="2" rx="1" transform="translate(6500 -3686)" fill="#fff"/>
  </g>
</svg>


</span></label>
                                                    </div>
                                                </div>
                                        </li>

                                        <li class="edit-mode">
                                        <button type="button" class="pexels-btn" data-toggle="modal"
                                                data-target="#exampleModalCenter">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="36px" height="36px" viewBox="0 0 32 32">
<path d="M2 0h28a2 2 0 0 1 2 2v28a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" fill="#05A081"></path>
<path d="M13 21h3.863v-3.752h1.167a3.124 3.124 0 1 0 0-6.248H13v10zm5.863 2H11V9h7.03a5.124 5.124 0 0 1 .833 10.18V23z" fill="#fff"></path>
</svg>
                                            </button>



                                        </li>




                                    </ul>

                                    <div class="add-section-menu">
                                        <div class="add-sections">
                                            <ul>

                                                @foreach ($questionTypes as $type => $label)
                                                <li>
                                                    <a class="section-icon" href="javascript:void(0);"
                                                        wire:click="addQuestion('{{ $survey->uuid }}', '{{ $type }}')">
                                                        <div><img class="icon" src="{{ asset('company/img')}}/{{$type}}.svg"><p>{{ $label }}</p></div>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>



                                </div>






                            </div>
                        </div>





                        @else

<div class="empty-sections">

<h1 class="i-heading dark"  data-aos="fade">Ok ...</h1>

<div class="empty" data-aos="fade-up">
    <img src="{{ asset('company/img/empty.svg') }}" class="img-fluid">
<p>Experience polls are a 'give and take' relationship. Engage your audience and receive feedback. We suggest breaking the ice with some good old <a href="javascript:void(0);" wire:click="addQuestion('{{ $survey->uuid }}', 'multiple-choices')">multi-choice</a>.</p><p>Build up your narrative and spice up the visuals with background imagery.</p>
<p></p>
</div>



</div>





                        @endif



                </form>


            </div>
        </div>


        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="pexels-modal" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                            <form id="search_form" action="">

                                                                    <div class="search-bar">
                                                                    <div class="filter">
                                    <input onclick="searchType(this)" checked class="ml-2" type="radio" name="search_type"
                                        id="search_type_photos" value="photos"><label
                                        for="search_type_photos">Photos</label>
                                    <input onclick="searchType(this)" class="ml-2" type="radio" name="search_type"
                                        id="search_type_videos" value="videos"><label
                                        for="search_type_videos">Videos</label>
                                        </div>
                            <input type="text" name="search" placeholder="Search by keyword ..." id="search" class="search-input">



                            <button type="submit" class="search-pexels"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>

                            </div>
                            </form>


                        <div id="img_list" class="imgs"></div>

                        <div id="pexels_pagination" class="pagination"></div>



                        <button type="button" class="close-pexels" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}


                    <a class="provided-by" href="https://www.pexels.com">Photos provided by Pexels</a>


        </div>



        <style>
        .pexel-img:hover {
            box-shadow: 2px 2px 2px 2px black;
        }
        </style>




        <script>

        let is_photo_search = 1

        let search_form = document.getElementById('search_form')
        let search = document.getElementById('search')
        let pexels_pagination = document.getElementById('pexels_pagination')
        let pixels_inp = document.getElementById('pixels_inp')

        let pxls_total_results = 0
        let pxls_per_page = 0
        let pxls_pages = 0

        let current_page = 0

        function searchType(e) {
            console.log(e.value);
            if (e.value == 'photos') {
                is_photo_search = 1
            } else {
                is_photo_search = 0

            }
        }

        search_form.onsubmit = function() {
            event.preventDefault()

            if (search.value) {
                pexelsSearch(search.value)
            }

        }

        pexelsSearch()

        function makePagination() {
            let pages = Math.ceil(pxls_total_results / pxls_per_page)
            let search_val = search.value ? search.value : ''
            console.log('pages', pages);
            let pg_str = ''
            for (let i = 0; i < pages; i++) {
                pg_str +=
                    ` <button ${(i+1)==current_page?'disabled':''} onclick="pexelsSearch('${search_val}',${i+1})">${i+1}</button> `

            }
            pexels_pagination.innerHTML = pg_str
        }



        function pexelsSearch(search = '', page = 1) {
            current_page = page
            console.log('hello'+current_page);
            let img_list = document.getElementById('img_list')

            let url = 'https://api.pexels.com/v1/search?query=' + search + '&page=' + page;
            //let url = 'https://api.pexels.com/v1/videos/search/?query=' + search + '&page=' + page;

            let api_key = '563492ad6f9170000100000109ad9a3724a7430983aa2f5c5978a7e1'
            let url2 = `https://api.pexels.com/videos/search?query='` + search + '&page=' + page;
            fetch((is_photo_search ? url : url2), {
                    method: "GET",
                    headers: {
                        "Authorization": api_key
                    }
                })
                .then(res => {
                    return res.json()
                })
                .then(res => {
                    if (res.photos) {
                        pxls_total_results = res.total_results;
                        pxls_per_page = res.per_page

                        makePagination();

                        let img_str = res.photos.map(photo => {
                            return (
                                `
                                <div class="pexel-img-item">
                                    <img onclick="imgClick('${photo.src.large}')" class="pexel-img" src="${photo.src.small}" alt="${photo.id}">

                                </div>
                                `
                            )

                        }).join('')
                        img_list.innerHTML = img_str

                    }
                    if (res.videos) {

                        pxls_total_results = res.total_results;
                        pxls_per_page = res.per_page

                        makePagination();



                        let vid_str = res.videos.map(video => {
                            let video_sizes = ''
                            if (video.video_files) {
                                video_sizes = video.video_files.map(vf => {
                                    return `<button onclick="imgClick('${vf.link}')" class="btn btn-sm btn-primary">${vf.width}x${vf.height}</button>`
                                }).join('')
                            }


                            return (
                                `
                                <div class="pexel-vid-item">
                                    <div>
                                        <img class="pexel-vid" src="${video.image}" alt="${video.id}">
                                    </div>
                                    <div> ${video_sizes} </div>
                                </div>
                                `
                            )

                        }).join('')
                        img_list.innerHTML = vid_str

                    }

                })
                .catch(err => {
                    console.log(err);
                })
        }


        function imgClick(img) {
            let pixels_inp = document.getElementById('pixels_inp')


            Livewire.emit('formSubmit', img)

            document.getElementById('exampleModalCenter').classList.remove('show')
            document.querySelectorAll('.modal-backdrop.fade')[0].style.visibility = "hidden"
            document.querySelectorAll('.modal-backdrop.fade')[1].style.visibility = "hidden"

        }

        </script>

{{-- <p id="font-list"></p> --}}

<script>

    let google_font=''
    let font_display=document.getElementById('font_display')
    let font_body=document.getElementById('font_body')
    let font_list=document.getElementById('font-list')
    let url = 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDEW-e2vvnPOBkFjt8dpse0kdlaVITAKWU'

    window.onload = function() {
        fetch(url, {
                method: "GET"
            })
            .then(res => {
                return res.json()
            })
            .then(res => {
                console.log(res);
                google_font=res
                if(res.items){

                        let survey_dp_font=JSON.parse('{!! $survey->font_display??"{}" !!}')
                        let survey_bd_font=JSON.parse('{!! $survey->font_body??"{}" !!}')

                        console.log('survey_dp_font',survey_dp_font);
                    let font_str=''
                    let font_str2=''
                    if(survey_dp_font.family){
                     font_str=` <option value="">${survey_dp_font.family},${survey_dp_font.category}</option> `
                    }else{
                     font_str=' <option value="">Select Display font</option> '

                    }
                    if(survey_bd_font.family){
                     font_str=` <option value="">${survey_bd_font.family},${survey_bd_font.category}</option> `

                    }else{
                     font_str2='  <option value="">Select Body font</option> '

                    }

                    res.items.forEach(font=>{
                        // set font to header


                        // console.log(JSON.stringify(font));
                        font_str+= `<option style="font-family:${font.family}" value='${''+JSON.stringify(font)}'>${font.family+', '+font.category}</option>`

                        font_str2+= `<option style="font-family:${font.family}" value='${''+JSON.stringify(font)}'>${font.family+', '+font.category}</option>`
                        // font_str2+= `<p style="font-family:'${font.family}'">${font.family}</p>`
                    })
                    font_display.innerHTML=font_str
                    font_body.innerHTML=font_str2
                    // font_list.innerHTML=font_str2

                }

            })
            .catch(err => {
                console.log(err);
            })
    }
</script>


<script>
// let font=''
// set survey font
let survey={!! $survey !!}

if(survey){
    if(survey.font_display){
        let font=JSON.parse(survey.font_display)
        console.log(font);
        linkrel = document.createElement("link");
        linkrel.setAttribute("href", "https://fonts.googleapis.com/css?family=" + font.family);
        linkrel.setAttribute("rel", "stylesheet");
        document.getElementsByTagName("head")[0].appendChild(linkrel);
    }
    if(survey.font_body){
        let font=JSON.parse(survey.font_body)
        console.log(font);
        linkrel = document.createElement("link");
        linkrel.setAttribute("href", "https://fonts.googleapis.com/css?family=" + font.family);
        linkrel.setAttribute("rel", "stylesheet");
        document.getElementsByTagName("head")[0].appendChild(linkrel);
    }
}
</script>






</section>

</div>

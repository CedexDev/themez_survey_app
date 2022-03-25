@extends('layouts.company')

<!-- @include('company.shared.header-edit') -->



@section('content')

    <!-- <a class="menu-link" href="{{ route('company.surveys.index', $survey) }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a> -->
    <!-- <a class="close-button" href="{{ route('company.surveys.index', $survey) }}"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a> -->

    <!-- <div class="grad"></div> -->

    <div class="full-dark" x-data>


        <form id="setup_form" onsubmit="setUpFormSubmit()" class="form-horizontal" method="POST"
            action="{{ route('company.surveys.update', $survey) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div x-data>

                @include('company.survey.tab', ['activeTab' => 'general', 'survey' => $survey])


                <!-- @include('company.shared.custom-styles') -->

                <div class="edit-heading" data-aos="fade">
                    <div class="form-group">
                        <div class="grow-wrap color-white" data-replicated-value="{{ $survey->title }}">
                            <textarea wire:change="submitForm" wire:model.defer="survey.title" onchange="setUpFormSubmit()"
                                name="title" id="title" onInput="this.parentNode.dataset.replicatedValue = this.value"
                                rows="1" maxlength="300" autocomplete="off"
                                data-lpignore="true">{{ old('title', $survey->title) }}</textarea>
                            <span class="inline-edit border-white"></span>
                            <label class="" for="title">Name your project</label>
                        </div>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <section class="setup" data-aos="fade">

                    <!-- <div class="actions"> -->
                    <!-- <a href="{{ route('company.surveys.questions.index', $survey) }}"
                                class=""><span>Build sections</span> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>

                <a href="{{ route('company.surveys.questions.index', $survey) }}"
                                class=""><span>Share</span> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                <a href="{{ route('company.surveys.result.index', $survey) }}"
                    class=""><span>See results</span> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a> -->


                    <h2>Welcome page</h2>


                    <div class="form-group">
                        <div class="grow-wrap color-white" data-replicated-value="{{ $survey->welcome_message }}">
                            <textarea wire:change="submitForm" wire:model.defer="survey.welcome_message"
                                onchange="setUpFormSubmit()" name="welcome_message" id="welcome_message"
                                onInput="this.parentNode.dataset.replicatedValue = this.value" rows="1" maxlength="300"
                                autocomplete="off"
                                data-lpignore="true">{{ old('welcome_message', $survey->welcome_message) }}</textarea>
                            <span class="inline-edit border-white"></span>
                            <label class="" for="welcome_message">Welcome message</label>
                        </div>
                        @error('welcome_message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="color_select no-border">
                        <label>Text color</label>
                        <div class="colors">
                            <div class="color">
                                <input name="question_color" type="text" onchange="setUpFormSubmit()" class="coloris one"
                                    value="{{ $survey->question_color }}">
                            </div>
                        </div>
                    </div>

                    <div class="color_select">
                        <label>Background color</label>
                        <div class="colors">
                            <div class="color">
                                <input name="answer_color" type="text" onchange="setUpFormSubmit()" class="coloris two"
                                    value="{{ $survey->answer_color }}">
                            </div>
                        </div>
                    </div>

                    <div class="color_select">
                        <label>Button color</label>
                        <div class="colors">
                            <div class="color">
                                <input name="background_color" type="text" onchange="setUpFormSubmit()" class="coloris five"
                                    value="{{ $survey->background_color }}">
                            </div>
                        </div>
                    </div>



                    <style>
                        html {
                            --colorOne: {{ $survey->question_color }};
                            --colorTwo: {{ $survey->answer_color }};
                            --colorThree: {{ $survey->button_color }};
                            --colorFour: {{ $survey->button_text_color }};
                            --colorFive: {{ $survey->background_color }};
                            --fontDisplay: @if ($survey->font_display) {{ $survey->font_display ? json_decode($survey->font_display)->family : '' }} @else "Maven Pro", sans-serif @endif;
                            --fontBody: @if ($survey->font_display) {{ $survey->font_body ? json_decode($survey->font_body)->family : '' }} @else "Maven Pro", sans-serif @endif;
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

                    </style>

                    <div class="font_select">
                        <label for="font_display">Select a display font</label>
                        <select name="font_display" id="font_display" onchange="setUpFormSubmit()" class="select select--display">
                            <option class="select__option" value=""></option>
                        </select>
                        <div class="font_display_box font-display">
                            {{ $survey->font_display ? json_decode($survey->font_display)->family : 'Maven Pro' }}</div>
                    </div>

                    <div class="font_select">
                        <label for="font_body">And a body font</label>
                        <select name="font_body" id="font_body" class="select select--body" onchange="setUpFormSubmit()">
                            <option class="select__option" value=""></option>
                        </select>
                        <div class="font_body_box font-body">
                            {{ $survey->font_body ? json_decode($survey->font_body)->family : 'Maven Pro' }}</div>
                    </div>

                    <div class="file-edit" onchange="setUpFormSubmit()">

                        @if ($survey->logo)

                            <img id="img_logo" class="welcome-logo" src="/storage/{{ old('logo', $survey->logo) }}"
                                alt="">

                        @else

                            <img id="img_logo" class="welcome-logo" src="" alt="">
                           <!--  <svg class="welcome-logo" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg> -->

                        @endif
                        <input id="img_inp" type="file" class=" @error('logo') is-invalid @enderror" name="logo"
                            autocomplete="off" data-lpignore="true" data-form-type="text" value="">

                        <label class='label color-white' data-js-label>Add a logo </label>
                        @error('logo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="file-edit" onchange="setUpFormSubmit()">
                        @if ($survey->background_image)

                            <img id="img_logo2" class="welcome-logo" src="/storage/{{ old('background_image', $survey->background_image) }}"
                                alt="">

                        @else

                        <img id="img_logo2" class="welcome-logo" src="" alt="">

                           <!--  <svg class="welcome-logo" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg> -->

                        @endif
                        <input id="img_inp2" type="file" class=" @error('background_image') is-invalid @enderror" name="background_image"
                            autocomplete="off" data-lpignore="true" data-form-type="text" value="">

                        <label class='label color-white' data-js-label>Add a Background Image </label>
                        @error('background_image')
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
                            const fileInput = el.querySelector('[type="file"]')
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

<div class="form-group form-check-center left">
                        <div class="check-center">
                            <input value="1" name="notify_new_responses" onchange="setUpFormSubmit()"
                                id="notify_new_responses" type='checkbox' @if ($survey->notify_new_responses) checked
                            @endif
                            />
                            <label for='notify_new_responses' class="color-white">
                                <span class="border-color-white">
                                    <span class="border-color-dark"></span></span>
                                <i>{{ __('Turn email notifications on') }}</i>
                                <ins><i>{{ __('Turn email notifications off') }}</i></ins>
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-check-center left">
                        <div class="check-center">
                            <input value="0" name="visibility" id="visibility" onchange="setUpFormSubmit()" type='checkbox'
                                @if ($survey->visibility) checked @endif />
                            <label for='visibility' class="color-white">
                                <span class="border-color-white">
                                    <span class="border-color-dark"></span></span>
                                <i>{{ __('Turn visibility on') }}</i>
                                <ins><i>{{ __('Turn visibility off') }}</i></ins>
                            </label>
                        </div>
                    </div>



                    <div class="form-group stay-input">
                        <label class="" for="password">{{ __('Password (optional)') }}</label>
                        <input name="password" type="password" onchange="setUpFormSubmit()" id="password" autocomplete="off"
                            data-lpignore="true" data-form-type="text"
                            class="font-body color-white form-control-inline-edit full @error('password') is-invalid @enderror"
                            value="{{ old('password', $survey->password) }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group form-check-center left">
                        <div class="check-center">
                        <input value="1" name="require_password" onchange="setUpFormSubmit()" id="require_password"
                                type='checkbox' @if ($survey->require_password) checked @endif />
                            <label for='require_password' class="color-white">
                                <span class="border-color-white">
                                    <span class="border-color-dark"></span></span>
                                <i>{{ __('Turn password on') }}</i>
                                <ins><i>{{ __('Turn password off') }}</i></ins>
                            </label>
                        </div>
                    </div>

                    <h2>Main sections</h2>

                    <div class="color_select">
                        <label>Text color</label>
                        <div class="colors">
                            <div class="color">
                                <input name="button_text_color" type="text" class="coloris four"
                                    value="{{ $survey->button_text_color }}" onchange="setUpFormSubmit()">
                            </div>
                        </div>
                    </div>

                    <div class="color_select">
                        <label>Background color</label>
                        <div class="colors">
                            <div class="color">
                                <input name="button_color" type="text" class="coloris three"
                                    value="{{ $survey->button_color }}" onchange="setUpFormSubmit()">
                            </div>
                        </div>
                    </div>

                    <h2>Thank you page</h2>

                    <div class="form-group">
                        <div class="grow-wrap color-white" data-replicated-value="{{ $survey->goodbye_text }}">
                            <textarea wire:change="submitForm" wire:model.defer="survey.goodbye_text"
                                onchange="setUpFormSubmit()" name="goodbye_text" id="goodbye_text"
                                onInput="this.parentNode.dataset.replicatedValue = this.value" rows="1" maxlength="300"
                                autocomplete="off"
                                data-lpignore="true">{{ old('goodbye_text', $survey->goodbye_text) }}</textarea>
                            <span class="inline-edit border-white"></span>
                            <label class="" for="goodbye_text">Thank you message</label>
                        </div>
                        @error('goodbye_text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group stay-input">
                        <label class=""
                            for="redirect_url">{{ __('Add a redirect URL (optional)') }}</label>
                        <input name="redirect_url" type="url" onchange="setUpFormSubmit()" id="redirect_url"
                            autocomplete="off" data-lpignore="true" data-form-type="text"
                            class="font-body color-white form-control-inline-edit full @error('redirect_url') is-invalid @enderror"
                            value="{{ old('redirect_url', $survey->redirect_url) }}">
                        @error('redirect_url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <h2>Advanced settings</h2>



                </section>


                <!-- <div class="i-pages">


    <ul class="pages-row" role="tablist">

        <li class="bg-one color-two">
            <div>
                @if ($survey->logo)
                <img id="img_logo" class="preview-logo" src="/storage/{{ old('logo', $survey->logo) }}"
                    alt="{{ $survey->title }}">
                @endif
                <h2 class="color-two font-display">{{ $survey->title }}</h2>

                @if ($survey->welcome_message)
                <p class="color-two font-body">{{ $survey->welcome_message }}</p>
                @endif
            </div>
        </li>

        @foreach ($survey->questions as $question)

        <li class="bg-three">
            <div>
                <h2 class="color-four small my-4 d-block w-100">
                    {{ $question->text }}</h2>
                <p class="color-four my-4 pb-0 col-lg-9 mx-auto x-small d-block w-100">
                    {{ $question->paragraph }}</p>
            </div>
            @if ($question->videolink)
            <video src="{{ $question->videolink }}" playsinline="" autoplay="" muted="" pause=""
                loop=""></video>
            @endif
            @if ($question->image)
            <img src="{{ url('/storage/' . $question->image) }}" class="img-fluid back-img">
            @endif
        </li>

        @endforeach

        <li class="bg-one color-two">
            <div>
                <h2 class="color-two font-display">Thank you</h2>

                @if ($survey->goodbye_text)
                <p class="color-two font-body">{{ $survey->goodbye_text }}</p>
                @endif
            </div>
        </li>
    </ul>


    </div> -->

                <section class="setup-fields">







                    <div class="trigger-more-settings"><a href="javascript:void(0);"><span class="show"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus-square">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg> Show custom CSS</span><span><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-square">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg> Hide
                                custom css</span></a></div>
                    <script>
                        $(document).ready(function() {
                            $('.trigger-more-settings a').on("click", function() {
                                $('.trigger-more-settings a span').toggleClass("show");
                                $('.more-settings').toggleClass("show");
                            });
                        });
                    </script>

                    <div class="more-settings">






                        <div class="window-body">
                            <textarea placeholder="// Add CSS here" onchange="setUpFormSubmit()" name="custom_css" rows="10" autocomplete="off"
                                data-lpignore="true" data-form-type="text"
                                :style="`color: ${answerColor}`,`border-color: ${buttonColor}`"
                                class="code-input">{{ old('custom_css', $survey->custom_css) }}</textarea>
                        </div>


                    </div>

                </section>


                <script>
                    $(".color .one").change(function() {
                        var one = $(this).val();
                        $("html").css("--colorOne", one);
                    });
                    $(".color .two").change(function() {
                        var one = $(this).val();
                        $("html").css("--colorTwo", one);
                    });
                    $(".color .three").change(function() {
                        var one = $(this).val();
                        $("html").css("--colorThree", one);
                    });
                    $(".color .four").change(function() {
                        var one = $(this).val();
                        $("html").css("--colorFour", one);
                    });
                    $(".color .five").change(function() {
                        var one = $(this).val();
                        $("html").css("--colorFive", one);
                    });
                    $("#font_display").change(function() {
                        var display = $(this).find('option:selected').text();
                        $(".font_select .font-display").text(display);
                        $("html").css("--fontDisplay", display);
                    });
                    $("#font_body").change(function() {
                        var fbody = $(this).find('option:selected').text();
                        $(".font_select .font-body").text(fbody);
                        $("html").css("--fontBody", fbody);
                    });
                </script>

            </div>



            <script>
                $('document').ready(function () {
                    $("#img_inp").change(function () {
                        if (this.files && this.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $('#img_logo').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(this.files[0]);
                        }
                    });
                });
            </script>

             <script>
                $('document').ready(function () {
                    $("#img_inp2").change(function () {
                        if (this.files && this.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $('#img_logo2').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(this.files[0]);
                        }
                    });
                });
            </script>

            <script>
                let setup_form = document.getElementById('setup_form')

                function setUpFormSubmit() {
                    event.preventDefault()

                    let fd = new FormData(setup_form)
                    console.log(...fd);
                    console.log(setup_form.action);

                    axios.post(setup_form.action, fd, {
                            "Accept": "application/json"
                        })
                        .then(res => {
                            console.log(res);
                            if (res.data.success) {
                                window.location.reload();
                            }
                        })
                        .catch(err => {
                            console.log(err);
                        })

                    // fetch(setup_form.action,{
                    //     method:"POST",
                    //     body:fd,
                    //     headers:{"Accept":"application/json"}
                    // })
                    // .then(res=>{
                    // return res.json()
                    //     console.log(res);
                    // })
                    // .then(data=>{
                    //     console.log(data);
                    // })
                    // .catch(err=>{
                    //     // console.log(err);
                    // })



                }
            </script>

            {{-- <p id="font-list"></p> --}}

            <script>
                let google_font = ''
                let font_display = document.getElementById('font_display')
                let font_body = document.getElementById('font_body')
                let font_list = document.getElementById('font-list')
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
                            google_font = res
                            if (res.items) {

                                let survey_dp_font = JSON.parse('{!! $survey->font_display ?? '{}' !!}')
                                let survey_bd_font = JSON.parse('{!! $survey->font_body ?? '{}' !!}')

                                console.log('survey_dp_font', survey_dp_font);
                                let font_str = ''
                                let font_str2 = ''
                                if (survey_dp_font.family) {
                                    font_str =
                                        ` <option value="">${survey_dp_font.family},${survey_dp_font.category}</option> `
                                } else {
                                    font_str = ' <option value="">Select Display font</option> '

                                }
                                if (survey_bd_font.family) {
                                    font_str =
                                        ` <option value="">${survey_bd_font.family},${survey_bd_font.category}</option> `

                                } else {
                                    font_str2 = '  <option value="">Select Body font</option> '

                                }

                                res.items.forEach(font => {
                                    // set font to header


                                    // console.log(JSON.stringify(font));
                                    font_str +=
                                        `<option style="font-family:${font.family}" value='${''+JSON.stringify(font)}'>${font.family+', '+font.category}</option>`

                                    font_str2 +=
                                        `<option style="font-family:${font.family}" value='${''+JSON.stringify(font)}'>${font.family+', '+font.category}</option>`
                                    // font_str2+= `<p style="font-family:'${font.family}'">${font.family}</p>`
                                })
                                font_display.innerHTML = font_str
                                font_body.innerHTML = font_str2
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
                let survey = {!! $survey !!}

                if (survey) {
                    if (survey.font_display) {
                        let font = JSON.parse(survey.font_display)
                        console.log(font);
                        linkrel = document.createElement("link");
                        linkrel.setAttribute("href", "https://fonts.googleapis.com/css?family=" + font.family);
                        linkrel.setAttribute("rel", "stylesheet");
                        document.getElementsByTagName("head")[0].appendChild(linkrel);
                    }
                    if (survey.font_body) {
                        let font = JSON.parse(survey.font_body)
                        console.log(font);
                        linkrel = document.createElement("link");
                        linkrel.setAttribute("href", "https://fonts.googleapis.com/css?family=" + font.family);
                        linkrel.setAttribute("rel", "stylesheet");
                        document.getElementsByTagName("head")[0].appendChild(linkrel);
                    }
                }
            </script>






    </div>
@endsection

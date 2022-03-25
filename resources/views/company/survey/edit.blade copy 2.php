@extends('layouts.company')




@section('content')

<div class="get-started">
    <div>
        <h1>{{ __('Get started') }}</h1>
        <a class="close" href="{{ route('company.surveys.index', $survey) }}">{{ __('Close') }}</a>
    </div>
</div>

<div class="spacer-70"></div>


<form id="setup_form" onsubmit="setUpFormSubmit()" class="form-horizontal" method="POST"
    action="{{ route('company.surveys.update', $survey) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- <button type="submit" class="btn-update"><span>{{ __('Save') }}</span></button> --}}

    <h2 class="divide t-70">Setup</h2>

<div class="form-switch">
    <input class="form-check-input" type="checkbox" onChange="setUpFormSubmit()"
        name="visibility" id="visibility" @if ($survey->visibility) checked
    @endif value="1">
    <label class="form-check-label" for="visibility"><span
            class="x-small text-black-60">{{ __('Visibility') }}</span></label>
</div>


                                                    <div class="input-group survey-colorpicker">
                                                        <div class="mx-auto">
                                                            <span
                                                                class="input-group-text colorpicker-input-addon"><i></i></span>
                                                        </div>
                                                        <label for="answer_color"
                                                            class="py-2 d-block w-100 x-small text-center"><span
                                                                :style="`color: ${answerColor}`">{{ __('Text') }}</span></label>
                                                        <input onchange="setUpFormSubmit()" type="text"
                                                            class="form-control-color-edit text-center d-block w-100"
                                                            value="{{ $survey->answer_color }}" name="answer_color"
                                                            :style="`color: ${answerColor}`" />
                                                    </div>

                                                    <div class="input-group survey-colorpicker">
                                                        <div class="mx-auto">
                                                            <span
                                                                class="input-group-text colorpicker-input-addon"><i></i></span>
                                                        </div>
                                                        <label for="question_color"
                                                            class="py-2 d-block w-100 x-small text-center"><span
                                                                :style="`color: ${answerColor}`">{{ __('Background') }}</span></label>
                                                        <input onchange="setUpFormSubmit()" type="text"
                                                            class="form-control-color-edit text-center d-block w-100"
                                                            value="{{ $survey->question_color }}" name="question_color"
                                                            :style="`color: ${answerColor}`" />
                                                    </div>

                                                    <div class="input-group survey-colorpicker">
                                                        <div class="mx-auto">
                                                            <span
                                                                class="input-group-text colorpicker-input-addon"><i></i></span>
                                                        </div>
                                                        <label for="button_text_color"
                                                            class="py-2 d-block w-100 x-small text-center"><span
                                                                :style="`color: ${buttonTextColor}`">{{ __('Text') }}</span></label>
                                                        <input onchange="setUpFormSubmit()" type="text"
                                                            class="form-control-color-edit text-center d-block w-100"
                                                            value="{{ $survey->button_text_color }}"
                                                            name="button_text_color" :style="`color: ${buttonTextColor}`" />
                                                    </div>

                                                    <div class="input-group survey-colorpicker">
                                                        <div class="mx-auto">
                                                            <span
                                                                class="input-group-text colorpicker-input-addon"><i></i></span>
                                                        </div>
                                                        <label for="button_color"
                                                            class="py-2 d-block w-100 x-small text-center"><span
                                                                :style="`color: ${buttonTextColor}`">{{ __('Background') }}</span></label>
                                                        <input onchange="setUpFormSubmit()" type="text"
                                                            class="form-control-color-edit text-center d-block w-100"
                                                            value="{{ $survey->button_color }}" name="button_color"
                                                            :style="`color: ${buttonTextColor}`" />
                                                    </div>

                                                    <div class="input-group survey-colorpicker">
                                                        <div class="mx-auto">
                                                            <span
                                                                class="input-group-text colorpicker-input-addon"><i></i></span>
                                                        </div>
                                                        <label for="background_color"
                                                            class="py-2 d-block w-100 x-small text-center"><span
                                                                :style="`color: ${buttonTextColor}`">{{ __('Primary brand') }}</span></label>
                                                        <input onchange="setUpFormSubmit()" type="text"
                                                            class="form-control-color-edit text-center d-block w-100"
                                                            value="{{ $survey->background_color }}"
                                                            name="background_color" :style="`color: ${buttonTextColor}`" />
                                                    </div>

                                                    <div class="input-group survey-colorpicker">
                                                        <div class="mx-auto">
                                                            {{-- <span
                                                            class="input-group-text colorpicker-input-addon"><i></i></span> --}}
                                                        </div>
                                                        {{-- <label for="question_color"
                                                            class="py-2 d-block w-100 x-small text-center"><span
                                                                :style="`color: ${answerColor}`">{{ __('Select display font') }}</span></label> --}}
                                                        {{-- <input onchange="setUpFormSubmit()" type="text"
                                                        class="form-control-color-edit text-center d-block w-100"
                                                        value="{{ $survey->question_color }}" name="question_color"
                                                        :style="`color: ${answerColor}`" /> --}}

                                                        <select onchange="setUpFormSubmit()" name="font_display" id="font_display"
                                                            class="py-2 d-block w-100 x-small text-center">
                                                            <option value="">Select display font</option>
                                                        </select>
                                                    </div>

                                                    <div class="input-group survey-colorpicker">
                                                        <div class="mx-auto">
                                                            {{-- <span
                                                            class="input-group-text colorpicker-input-addon"><i></i></span> --}}
                                                        </div>
                                                        {{-- <label for="question_color"
                                                            class="py-2 d-block w-100 x-small text-center"><span
                                                                :style="`color: ${answerColor}`">{{ __('Select body font') }}</span></label> --}}
                                                        {{-- <input onchange="setUpFormSubmit()" type="text"
                                                        class="form-control-color-edit text-center d-block w-100"
                                                        value="{{ $survey->question_color }}" name="question_color"
                                                        :style="`color: ${answerColor}`" /> --}}

                                                        <select onchange="setUpFormSubmit()" name="font_body" id="font_body"
                                                            class="py-2 d-block w-100 x-small text-center">
                                                            <option value="">Select body font</option>
                                                        </select>
                                                    </div>


<h2 class="divide t-100">Welcome page</h2>






                                        <div class="form-group my-1">
                                            <div class="position-relative">
                                                <img id="img_logo" style="height: 100px;width: 100;"
                                                    src="/storage/{{ old('logo', $survey->logo) }}" alt="">
                                                <input id="img_inp" onchange="setUpFormSubmit()" type="file"
                                                    class="display-4 full d-block w-100  form-control-inline-edit @error('logo') is-invalid @enderror text-center"
                                                    name="logo" autocomplete="off" data-lpignore="true"
                                                    data-form-type="text" value="" :style="`color: ${answerColor}`">

                                                <span class="inline-edit o-50"
                                                    :style="`border-color: ${answerColor}`"></span>
                                                <label for="logo"><span class="display-4"
                                                        :style="`color: ${answerColor}`">{{ __('Logo') }}</span></label>
                                                @error('logo')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group my-1">
                                            <div class="position-relative">
                                                <input  onchange="setUpFormSubmit()" type="text"
                                                    class="display-4 full d-block w-100  form-control-inline-edit @error('title') is-invalid @enderror text-center"
                                                    name="title" autocomplete="off" data-lpignore="true"
                                                    data-form-type="text" value="{{ old('title', $survey->title) }}"
                                                    :style="`color: ${answerColor};font-family:{{ ($survey->font_display?(json_decode($survey->font_display)->family):'') }}`">
                                                <span class="inline-edit o-50"
                                                    :style="`border-color: ${answerColor}`"></span>
                                                <label for="title"><span class="display-4"
                                                        :style="`color: ${answerColor}`">{{ __('Name your xMap') }}</span></label>
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group my-1">
                                            <div class="position-relative">
                                                <textarea onchange="setUpFormSubmit()" name="welcome_message" rows="3"
                                                    maxlength="200" autocomplete="off" data-lpignore="true"
                                                    data-form-type="text"
                                                    :style="`color: ${answerColor}`,`font-family:{{ ($survey->font_body?(json_decode($survey->font_body)->family):'') }}`,`border-color: ${buttonColor}`"
                                                    class="full text-center d-block w-100 form-control-inline-edit @error('welcome_message') is-invalid @enderror">{{ old('welcome_message', $survey->welcome_message) }}</textarea>
                                                <span class="inline-edit o-50"
                                                    :style="`border-color: ${answerColor}`"></span>
                                                <label for="welcome_message"><span
                                                        :style="`color: ${answerColor}`">{{ __('Welcome your audience') }}</span></label>
                                                @error('welcome_message')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="card p-6 rounded-2 mb-5">
                    <h3 class="font-sans-serif mb-5">Password</h3>
                    <div class="form-group row">
                        <label for="password" class="col-12 text-sm-right col-form-label mb-n5"><span
                                class="x-small text-black-60">{{ __('Add a password') }}</span></label>
                        <div class="col-12">
                            <input type="text"
                                class="form-control form-control-underline @error('password') is-invalid @enderror"
                                name="password" value="{{ old('password', $survey->password) }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-check form-switch">

                        <div class="col-sm-12">
                            <input class="form-check-input form-check-input-sm" type="checkbox" name="require_password"
                                @if ($survey->require_password) checked @endif value="1">
                            <label class="form-check-label form-check-label-sm" for="require_password"><span
                                    class="small text-black-60">{{ __('Turn password on') }}</span></label>

                        </div>

                    </div>
                </div>












                                <div class="card p-6 pt-3" :style="`background-color: ${buttonColor}`">
                                    <div class="cont800">
                                        <!-- <div class="col-6 pt-4 start-0 position-absolute" :style="`background-color: ${backgroundColor}`"></div> -->
                                        <!-- <p class="mt-6 mb-2 x-small o-50 text-center" :style="`color: ${buttonTextColor}`">Design your inside pages</p> -->
                                        <div class="form-group my-3">
                                            <div class="position-relative">
                                                <h2 class="display-5 full d-block w-100  form-control-inline-edit text-center"
                                                    :style="`color: ${buttonTextColor}`">Inside pages

                                                </h2>
                                            </div>
                                        </div>


                                        <div class="form-group my-1 pb-5">
                                            <div class="position-relative text-center row d-flex">
                                                <div class="col-6 mx-auto rotate-45">
                                                    <h3 :style="`color: ${buttonTextColor}`" class="small my-3">
                                                        Question?
                                                    </h3>
                                                    <p class="col-12 border border-1 rounded-pill mx-auto my-1"
                                                        :style="`color: ${buttonTextColor}; border-color: ${backgroundColor}!important;`">
                                                        ––––</p>

                                                    <p class="col-12 border border-1 rounded-pill mx-auto my-2"
                                                        :style="`color: ${buttonTextColor}; border-color: ${backgroundColor}!important;`">
                                                        ––––</p>
                                                    <p class="col-12 border border-1 rounded-pill mx-auto my-1"
                                                        :style="`color: ${buttonTextColor}; border-color: ${backgroundColor}!important;`">
                                                        ––––</p>
                                                </div>

                                                <!-- <div class="col-3 me-auto">
                                            <h3 :style="`color: ${buttonTextColor}`">Question?</h3>

                                                <div class="d-flex">
                                                <p  class="col-4 py-5 border border-1 rounded-circle x-small my-3 mx-auto" :style="`color: ${buttonTextColor}; border-color: ${backgroundColor}!important;`">Agree</p>
                                                <p  class="col-4 py-5 border border-1 rounded-circle x-small my-3 mx-auto" :style="`color: ${buttonTextColor}; border-color: ${backgroundColor}!important;`">Disagree</p>
                                                </div>
                                            </div> -->


                                            </div>
                                        </div>


                                        <!-- <div class="row pt-6 d-flex">

                                        @foreach ($survey->questions as $question)

                                        <div class="card col-2" :style="`background-color: ${buttonColor}`">
                                            <div class="container">
                                                <div class="row">
                                                    <div :style="`color: ${buttonTextColor}`"
                                                        class="mb-0 pb-0 col-lg-9 mx-auto d-block w-100">

                                                        <div>
                                                            <small class="iteration x-small d-block w-100" :style="`color: ${backgroundColor}`"
                                                                class="mb-2">{{ $loop->iteration }} of
                                                                {{ $loop->count }}</small>
                                                            <h2 :style="`color: ${buttonTextColor}`" class="small my-4 d-block w-100">
                                                                {{ $question->text }}</h2>
                                                            <p :style="`color: ${buttonTextColor}`"
                                                                class="my-4 pb-0 col-lg-9 mx-auto x-small d-block w-100">
                                                                {{ $question->paragraph }}</p>
                                                        </div>
                                                        @if ($question->videolink)
                                                        <video src="{{ $question->videolink }}" playsinline="" autoplay="" muted="" pause=""
                                                            loop=""></video>
                                                        @endif
                                                        @if ($question->image)
                                                        <img src="{{ url('/storage/' . $question->image) }}" class="img-fluid back-img">
                                                        @endif
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                        @endforeach

                                    </div> -->


                                        <div class="row pt-6 ">













                                        </div>

                                    </div>
                                </div>








                                <h2 class="divide t-130">Thank you</h2>




                                        <div class="form-group my-1">
                                            <div class="position-relative">
                                                <textarea name="goodbye_text" rows="1" maxlength="50"
                                                    class="full text-center d-block w-100 form-control-inline-edit @error('goodbye_text') is-invalid @enderror"
                                                    :style="`color: ${answerColor}`">{{ old('goodbye_text', $survey->goodbye_text) }}</textarea>
                                                <span class="inline-edit o-50"
                                                    :style="`border-color: ${answerColor}`"></span>

                                                <label for="goodbye_text"><span
                                                        :style="`color: ${answerColor}`">{{ __('Thank your audience') }}</span></label>
                                                @error('goodbye_text')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>






                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <h3 class="font-sans-serif mb-5">Redirect to your website</h3>

<div class="form-group row">
    <label for="redirect_url" class="col-12 text-sm-right col-form-label mb-n5"><span
            class="x-small text-black-60">{{ __('Add a redirect URL') }}</span></label>
    <div class="col-12">
        <input type="text"
            class="form-control form-control-underline @error('redirect_url') is-invalid @enderror"
            name="redirect_url" value="{{ old('redirect_url', $survey->redirect_url) }}">
        @error('redirect_url')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



<h2 class="divide t-160">Advanced setup</h2>

                <h3 class="font-sans-serif mb-5">Email notifications</h3>
                <div class="form-check form-switch me-auto">
                    <div class="col-sm-12 ms-auto ps-5 py-3">
                        <input class="form-check-input" type="checkbox" name="notify_new_responses"
                            id="notify_new_responses" @if ($survey->notify_new_responses) checked @endif value="1">
                        <label class="form-check-label" for="notify_new_responses"><span
                                class="x-small text-black-60">{{ __('Email notifications') }}</span></label>
                    </div>
                </div>




                <h3 class="font-sans-serif mb-5">Custom CSS</h3>
                <div class="form-group my-1">
                    <div class="position-relative">

                        <textarea name="custom_css" rows="1" autocomplete="off" data-lpignore="true" data-form-type="text"
                            :style="`color: ${answerColor}`,`border-color: ${buttonColor}`"
                            class="text-center d-block w-100 form-control-inline-edit">{{ old('custom_css', $survey->custom_css) }}</textarea>
                        <span class="inline-edit o-50" :style="`border-color: ${answerColor}`"></span>
                        <label for="custom_css"><span
                                :style="`color: ${answerColor}`">{{ __('Add custom CSS') }}</span></label>
                    </div>
                </div>


            </div>
        </div>
        <button type="submit" class="close-builder-foot"></button>








        <style type="text/css">
            /* .form-check-input:checked {
        opacity: 1;
        background-color: {{ $survey->button_color }};

    }

    .form-check-input {
        opacity: 0.5;
        background-color: {{ $survey->button_color }};
    }
    .nav-tabs .nav-link.active {
        border-color: transparent transparent {{ $survey->button_color }};
    }
    .nav-tabs .nav-link.active,
    .nav-tabs .nav-link,
    body .navbar .text-white {
        color: {{ $survey->question_color }}!important;
    } */

        </style>

    </form>



    <!-- <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
    </div>

    <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
    </div>

    <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
    </div> -->


    <script>
        function showImage(src, target) {
            var fr = new FileReader();

            fr.onload = function(e) {
                target.src = this.result;
            };

            src.addEventListener("change", function() {

                fr.readAsDataURL(src.files[0]);
            });

        }

        function putImage() {
            var src = document.getElementById("img_inp");
            var target = document.getElementById("img_logo");
            showImage(src, target);
        }
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
                        window.location.reload()
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






@endsection

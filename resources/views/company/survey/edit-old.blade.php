
@extends('layouts.company')




@section('content')

<form class="form-horizontal" method="POST" action="{{ route('company.surveys.update', $survey) }}">
    @csrf
    @method('PUT')

    @include('company.survey.tab', ['activeTab' => 'general', 'survey' => $survey])



    <div class="py-10">
        <div class="welcome-snap" x-data="{
                    questionColor: '{{ $survey->question_color}}',
                    buttonColor : '{{ $survey->button_color }}',
                    buttonTextColor : '{{ $survey->button_text_color }}',
                    backgroundColor: '{{ $survey->background_color }}'
                }" x-init="document.body.style.backgroundColor = backgroundColor;">
            <div class="container-lg ">
                <div class="row question-fade">
                    <div class="col-12" :style="`color: ${questionColor}`" style="color: #FFFFFF">
                        <div>

                            <div class="form-group my-8">
                                <div class="position-relative">
                                    <input type="text"
                                        class="display-4 d-block w-100  form-control-inline-edit @error('title') is-invalid @enderror text-center"
                                        name="title" autocomplete="off" data-lpignore="true" data-form-type="text"
                                        value="{{ old('title', $survey->title) }}" :style="`color: ${questionColor}`">
                                    <span class="inline-edit o-50" :style="`border-color: ${questionColor}`"></span>
                                    <label for="title"><span class="display-4"
                                            :style="`color: ${questionColor}`">{{ __('Name your xMap') }}</span></label>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group my-8">
                                <div class="position-relative">
                                    <textarea name="welcome_message" rows="1" autocomplete="off" data-lpignore="true"
                                        data-form-type="text"
                                        :style="`color: ${questionColor}`,`border-color: ${buttonColor}`"
                                        class="text-center d-block w-100 form-control-inline-edit @error('welcome_message') is-invalid @enderror">{{ old('welcome_message', $survey->welcome_message) }}</textarea>
                                    <span class="inline-edit o-50" :style="`border-color: ${questionColor}`"></span>
                                    <label for="welcome_message"><span class=" "
                                            :style="`color: ${questionColor}`">{{ __('Welcome message') }}</span></label>
                                    @error('welcome_message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="goodbye_text" class="col-12 text-sm-right col-form-label mb-n5"><span
                                    class="x-small text-black-60">{{ __('Goodbye text') }}</span></label>
                            <div class="col-12">
                                <textarea name="goodbye_text" rows="1"
                                    class="form-control form-control-underline @error('goodbye_text') is-invalid @enderror">{{ old('goodbye_text', $survey->goodbye_text) }}</textarea>
                                @error('goodbye_text')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="question_color" class="col-12 text-sm-right col-form-label mb-n5"><span
                                            class="x-small text-black-60">{{ __('Question') }}</span></label>
                                    <div class="col-12 ">
                                        <div class="input-group survey-colorpicker">
                                            <input type="text" class="form-control form-control-underline input-lg"
                                                value="{{ $survey->question_color }}" name="question_color" />
                                            <span class="input-group-append ms-3">
                                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="answer_color" class="col-12 text-sm-right col-form-label mb-n5"><span
                                            class="x-small text-black-60">{{ __('Answer') }}</span></label>
                                    <div class="col-12">
                                        <div class="input-group survey-colorpicker">
                                            <input type="text" class="form-control form-control-underline input-lg"
                                                value="{{ $survey->answer_color }}" name="answer_color" />
                                            <span class="input-group-append ms-3">
                                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="button_color" class="col-12 text-sm-right col-form-label mb-n5"><span
                                            class="x-small text-black-60">{{ __('Button') }}</span></label>
                                    <div class="col-12">
                                        <div class="input-group survey-colorpicker">
                                            <input type="text" class="form-control form-control-underline input-lg"
                                                value="{{ $survey->button_color }}" name="button_color" />
                                            <span class="input-group-append ms-3">
                                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="button_text_color"
                                        class="col-12 text-sm-right col-form-label mb-n5"><span
                                            class="x-small text-black-60">{{ __('Button Text') }}</span></label>
                                    <div class="col-12">
                                        <div class="input-group survey-colorpicker">
                                            <input type="text" class="form-control form-control-underline input-lg"
                                                value="{{ $survey->button_text_color }}" name="button_text_color" />
                                            <span class="input-group-append ms-3">
                                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="background_color"
                                        class="col-12 text-sm-right col-form-label mb-n5"><span
                                            class="x-small text-black-60">{{ __('Background') }}</span></label>
                                    <div class="col-12">
                                        <div class="input-group survey-colorpicker">
                                            <input type="text" class="form-control form-control-underline input-lg"
                                                value="{{ $survey->background_color }}" name="background_color" />
                                            <span class="input-group-append ms-3">
                                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="form-group row">
                                <label for="custom_css" class="col-12 text-sm-right col-form-label mb-n5"><span
                                        class="x-small text-black-60">{{ __('Custom CSS') }}</span></label>
                                <div class="col-12">
                                    <textarea name="custom_css" rows="1"
                                        class="form-control form-control-underline">{{ old('custom_css', $survey->custom_css) }}</textarea>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <div class="card p-6 rounded-2 mb-5">
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

    </div>


    <div class="card p-6 rounded-2 mb-5">
        <h3 class="font-sans-serif mb-5">Password</h3>
        <div class="form-group row">
            <label for="password" class="col-12 text-sm-right col-form-label mb-n5"><span
                    class="x-small text-black-60">{{ __('Add a password') }}</span></label>
            <div class="col-12">
                <input type="text" class="form-control form-control-underline @error('password') is-invalid @enderror"
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
                    @if($survey->require_password) checked @endif value="1">
                <label class="form-check-label form-check-label-sm" for="require_password"><span
                        class="small text-black-60">{{ __('Turn password on') }}</span></label>

            </div>

        </div>
    </div>







    <div class="position-fixed bottom-0 start-0 w-100 z-index-1" x-data="{
                    questionColor: '{{ $survey->question_color}}',
                    buttonColor : '{{ $survey->button_color }}',
                    buttonTextColor : '{{ $survey->button_text_color }}',
                    backgroundColor: '{{ $survey->background_color }}'
                }" :style="`background: ${backgroundColor}`">

        <div class="p-2 border-top d-flex container-fluid w-100" :style="`border-color: ${questionColor}`">



            <div class="form-check form-switch">
                <div class="col-sm-12 ms-auto ps-5 py-3">
                    <input class="form-check-input" type="checkbox" name="notify_new_responses"
                        @if($survey->notify_new_responses) checked @endif value="1">
                    <label class="form-check-label" for="notify_new_responses"><span
                            class="small text-black-60">{{ __('Get email for new responses') }}</span></label>
                </div>
            </div>

            <div class="form-check form-switch">
                <div class="col-sm-12 ms-auto ps-5">
                    <input class="form-check-input" type="checkbox" name="visibility" @if($survey->visibility) checked
                    @endif value="1">
                    <label class="form-check-label" for="visibility"><span
                            class="small text-black-60">{{ __('Visibility') }}</span></label>
                </div>
            </div>

            <div class="form-group row pt-5">

                <div class="col-12">
                    <button type="submit" class="btn w-100 btn-primary">{{ __('Save changes') }}</button>
                </div>
            </div>

        </div>

    </div>



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



@endsection

@extends('layouts.company')

@section('content')
    <!-- @include('company.survey.tab', ['activeTab' => 'share', 'survey' => $survey]) -->
    <!-- <a class="back-link" href="{{ route('company.surveys.edit', $survey) }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 8 12 12 16"></polyline><line x1="16" y1="12" x2="8" y2="12"></line></svg></a>
    <a class="menu-link" href="{{ route('company.surveys.edit', $survey) }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a> -->
    @include('company.survey.tab', ['activeTab' => 'share', 'survey' => $survey])


    <div class="share">

        <h1 class="i-share dark" data-aos="fade">See <a href="{{ $survey->url() }}" target="_blank"
                class="btn w-100 btn-primary">{{ __('Preview') }}</a></h1>



        <div class="row" x-data="{
            src : '{{ $survey->url() }}',
            embedUrl: '{{ $survey->embedUrl() }}',
            width: 640,
            height: 640}">

            <h2 data-aos="fade">Share me</h2>

            <div class="copy-group" data-aos="fade-right">
                <div data-replicated-value="Ok">
                    <input type="text" id="survey-url" x-model="src" />
                    <span class="copy btn-clipboard" data-clipboard-target="#survey-url">{{ __('Copy') }}</span>
                </div>
            </div>

            <h2 data-aos="fade">Put me places</h2>

            <div class="embed-dimensions" data-aos="fade">
                <div class="small-group">
                    <label>{{ __('Embed Width') }}</label>
                    <input type="text" x-model="width" />
                </div>
                <div class="small-group">
                    <label>{{ __('Embed Height') }}</label>
                    <input type="text" x-model="height" />
                </div>
            </div>

            <div class="copy-group" data-aos="fade-right">
                <div data-replicated-value="Ok">
                    <input type="text" id="embed-survey"
                        x-bind:value="`<iframe src='${embedUrl}' width='${width}' height='${height}' frameborder='0' marginwidth='0' marginheight='0'>Loading</iframe>`" />
                    <span class="copy btn-clipboard" data-clipboard-target="#embed-survey">{{ __('Copy') }}</span>
                </div>
            </div>





            @if (settings()->get('sharethis_status'))

                <label class="col-12 text-sm-right col-form-label mb-n5"><span
                        class="x-small text-black-60">{{ __('Share') }}</span></label>
                <div class="col-12">
                    <div class="sharethis-inline-share-buttons"></div>
                </div>

            @endif












        </div>






        </form>

    </div>

@endsection

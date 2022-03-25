@extends('layouts.company')
<div class="results">
@section('content')

@include('company.survey.tab', ['activeTab' => 'result', 'survey' => $survey])


    @if(empty($results))

    <h1 class="i-heading dark"  data-aos="fade">Go wild ...</h1>

<div class="empty" data-aos="fade-up">
<img src="{{ asset('company/img/results.svg') }}" class="img-fluid">
    <p><a href="{{ route('company.surveys.share.show', $survey) }}">Share me</a> with your audience.
</p>
</div>

    @else
<div class="i-results">

    <h1 data-aos="fade">{{ __('Understand your audience') }}</h1>
    <div class="results-row" data-aos="fade-left">
        <div>
            <h3>{{ $attendees_count }}</h3>
            <p>{{ __('Respondents') }}</p>
        </div>
        <div>
            <h3>{{ $total_completed }}</h3>
            <p>{{ __('Completed') }}</p>
        </div>
        <div>
            <h3>{{ $completion_rate }}%</h3>
            <p>{{ __('Completion') }}</p>
        </div>
    </div>
</div>


                    <div class="results-group" data-aos="fade-up">


                        <h2>{{ __('Sections') }} <a href="{{ route('company.surveys.export', $survey) }}"
                                class="csv">
                                {{ __('Download CSV') }}



                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-download">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>

                            </a></h2>

                        @foreach($results as $result)

                        @if(in_array($result['type'], ['phone', 'email', 'short-text', 'long-text', 'date', 'number']))

                        <div class="results-group-item">
                            <div class="i-top">
                                <div>
                                    <img class="icon" src="{{ asset('company/img')}}/{{$result['type']}}.svg">
                                    <h3>{{ $result['text'] }}</h3>
                                </div>

                            </div>
                            <div class="options">

                            <p>{{ $result['total_responses'] }} out of {{ $attendees_count }} people answered this
                                question.</p>

                            @foreach($result['responses'] as $response)
                            <p>{{ $response }}</p>
                            @endforeach
                            </div>
                        </div>
                        @endif

                        @if(in_array($result['type'], ['multiple-choices', 'dropdown', 'yes-no','slider']))
                        <div class="results-group-item">
                            <div class="i-top">
                                <div>
                                <img class="icon" src="{{ asset('company/img')}}/{{$result['type']}}.svg">
                                    <h3>{{ $result['text'] }}</h3>
                                </div>

                            </div>
                            <div class="options">
                                <p>{{ $result['total_responses'] }} out of
                                    {{ $attendees_count }} people answered this question.</p>

                                @foreach($result['responses_aggregate'] as $option => $response)
                                <small>{{ $option }} ({{ count($response) }})</small>
                                <div class="progress bar-align">

                                    <div data-aos="fade-right" class="progress-bar" role="progressbar"
                                        style="width: {{ (count($response) / $result['total_responses']) * 100 }}%;">
                                        <span class="progress-text"><strong></strong></span>
                                    </div>
                                    <span class="progress-response-counter"></span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @if(in_array($result['type'], ['rating']))
                        <div class="results-group-item">
                            <div class="i-top">
                                <div>
                                <img class="icon" src="{{ asset('company/img')}}/{{$result['type']}}.svg">
                                    <h3>{{ $result['text'] }}</h3>
                                </div>

                            </div>
                            <div class="options">
                                <p>{{ $result['total_responses'] }} out of
                                    {{ $attendees_count }} people answered this question.</p>

                                @foreach(collect($result['responses_aggregate'])->sortKeys() as $option => $response)
                                <div class="progress vertical bar-2-align">
                                    <div data-aos="fade-right" class="progress-bar" role="progressbar"
                                        style="height: {{ (count($response) / $result['total_responses']) * 100 }}%;">
                                        <span class="progress-text-vertical"><strong>{{ $option }}</strong></span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        @endforeach



                    </div>

                    @endif


























</div>
@endsection

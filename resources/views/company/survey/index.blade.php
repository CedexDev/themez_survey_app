@extends('layouts.company')

@section('content')
<div class="full-light">

<h1 data-aos="fade" class="i-heading">
    {{ __('Take your audience on an experiential journey.') }}
</h1>





        <div data-aos="fade-left" class="list-group">
        <div class="list-group-item add">
        <form action="{{ route('company.surveys.store') }}" method="POST">
            <div class="i-top">
                    <div>

                            @csrf
                            <button type="submit" class="btn w-100 btn-primary lift">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </button>

                        <!-- <h2>{{ __('Create a new project') }}</h2> -->
                    </div>


                </div>

                <div class="options">
                <button type="submit" class="btn w-100 btn-primary lift">
                                Create a new project
                            </button>
</div>
                <small>
                        or create <a href="{{ route('company.surveys.templates.index') }}">from a template</a>
                    </small>

                    <img class="full-stretch" src="https://images.unsplash.com/photo-1634154369165-cadcd9af7100?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODJ8fDNkJTIwbGFuZHNjYXBlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=900&q=60">





        </div>
        </form>
            @foreach($surveys as $survey)
            @php
                $display_color=$survey->answer_color;
                $body_color=$survey->question_color;
            @endphp

            @section('fonts')
                <script>
                     font=JSON.parse('{!! $survey->font_display !!}')
                    console.log(font);
                    linkrel = document.createElement("link");
                    linkrel.setAttribute("href", "https://fonts.googleapis.com/css?family=" + font.family);
                    linkrel.setAttribute("rel", "stylesheet");
                    document.getElementsByTagName("head")[0].appendChild(linkrel);
                </script>
                <script>
                     font=JSON.parse('{!! $survey->font_body !!}')
                    console.log(font);
                    linkrel = document.createElement("link");
                    linkrel.setAttribute("href", "https://fonts.googleapis.com/css?family=" + font.family);
                    linkrel.setAttribute("rel", "stylesheet");
                    document.getElementsByTagName("head")[0].appendChild(linkrel);
                </script>
            @endsection


            <div style="background-color: {{ $body_color }}" class="list-group-item">

                <div class="i-top">
                    <div>
                    <!-- <img id="img_logo" class="logo" src="/storage/{{ old('logo', $survey->logo) }}" alt=""> -->


                    <h2>
                        <a style="font-family: {{ isset($survey->font_display)?json_decode($survey->font_display)->family:'' }}" href="{{ route('company.surveys.edit', $survey) }}"
                            class=" row-click"><span style="color: {{ $display_color }}">{{ $survey->title }}</span></a>
                    </h2>
                    </div>

                </div>

                    <small style="color: {{ $display_color }}">
                        Sections: {{ $survey->questions_count }} <span>|</span>
                        <!-- Responses: {{ $survey->responses_count }} | -->
                        Created: {{ date('d M, Y', strtotime($survey->created_at)) }}
                    </small>




                    <div class="options" style="color: {{ $display_color }}">
                        <a href="{{ route('company.surveys.edit', $survey) }}"
                            class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg><span style="border-color: {{ $display_color }}"></span></a>
                        @if($survey->visibility)
                        <a href="{{ $survey->url() }}" target="_blank"
                            class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg><span style="border-color: {{ $display_color }}"></span></a>
                        <a href="{{ route('company.surveys.result.index', $survey) }}"
                            class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg><span style="border-color: {{ $display_color }}"></span></a>
                        @endif

                        <!-- <form method="POST" action="{{ route('company.surveys.destroy',$survey) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item mt-3">{{ __('Delete') }}</button>
                        </form> -->
                    </div>


            </div>

            @endforeach

        </div>







<script>
    let font=''
</script>
@yield('fonts')


</div>
@endsection

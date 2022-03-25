@extends('layouts.company')

@section('content')
<div class="full-light">

    <h1 data-aos="fade" class="i-heading">
        {{ __('Start from our latest templates') }}
    </h1>





    <div data-aos="fade-left" class="list-group">

        @if(!$templates->isEmpty())

        @foreach($templates as $template)

        @php
                $display_color=$template->answer_color;
                $body_color=$template->question_color;
            @endphp

            @section('fonts')
                <script>
                     font=JSON.parse('{!! $template->font_display !!}')
                    console.log(font);
                    linkrel = document.createElement("link");
                    linkrel.setAttribute("href", "https://fonts.googleapis.com/css?family=" + font.family);
                    linkrel.setAttribute("rel", "stylesheet");
                    document.getElementsByTagName("head")[0].appendChild(linkrel);
                </script>
                <script>
                     font=JSON.parse('{!! $template->font_body !!}')
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
                    <h2>
                        <span>{{ $template->title }}</span>
                    </h2>
                </div>

            </div>

            <form action="{{ route('company.surveys.duplicate', $template) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn w-100 btn-outline-primary lift">{{ __('Use template') }}</button>
                        </form>

            <small>
                {{ $template->welcome_message }}
            </small>

        </div>

        @endforeach

    @endif



    </div>


</div>









<script>
let font = ''
</script>
@yield('fonts')


</div>



@endsection

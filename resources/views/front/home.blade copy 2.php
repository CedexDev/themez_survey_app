<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">


    <link rel="shortcut icon" href="{{ asset('landing/assets/favicon/favicon.ico') }}" type="image/x-icon" />
    <link href="{{ asset('company/css/company.css?917780') }}" rel="stylesheet" type="text/css">


    <link rel="stylesheet" type="text/css" href="{{ asset('company/css/coloris.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('company/css/aos.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"
        integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="module" src="https://unpkg.com/vanilla-colorful?module"></script>
    <style>
    </style>

</head>

<body class="bg-dark">
    <div class="wrapper">
        @include('company.shared.header-logged-out')
    </div>



    @guest

    <div class="hm-head">
        <div class="wrap">
            <div class="left">
                <h1>Feedback <span>+</span> Story telling</h1>
                <p>No more boring surveys. Bite sized pieces of information coupled with clever feedback mechanisms. Xenome is simple software made for organisations to connect with their audience.</p>
                <div class="dark-btns">
                    <a href="{{ route('register') }}" class="button-dark large solid"><span>Try Xenome:</span> It's
                        free</a>
                    <a href="{{ route('login') }}" class="button-dark large"><span>Or:</span> Log in</a>
                </div>
            </div>
            <div class="embed-mob">
            <iframe src='https://staging.xenome.app/s/4f51225f-f686-45d4-b530-737dc9cfa88e/start?embed=1' width='640' height='640' frameborder='0' marginwidth='0' marginheight='0'>Loading</iframe>
            </div>
            <svg class="decoration" width="342px" height="342px" viewBox="0 0 342 342" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>Group 22</title>
                    <g id="store" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group-22" transform="translate(1.000000, 1.000000)">
                            <circle id="Oval" stroke="#A575EA" cx="170.5" cy="170.5" r="21.5"></circle>
                            <circle id="Oval" stroke="#9478E7" cx="170.5" cy="170.5" r="42.5"></circle>
                            <circle id="Oval" stroke-opacity="0.834561648" stroke="#807CE4" cx="170" cy="170" r="64">
                            </circle>
                            <circle id="Oval" stroke-opacity="0.725251311" stroke="#6981E1" cx="170" cy="170" r="85">
                            </circle>
                            <circle id="Oval" stroke-opacity="0.571101369" stroke="#5F83E0" cx="170.5" cy="170.5" r="106.5"></circle>
                            <circle id="Oval" stroke-opacity="0.418586251" stroke="#5F83E0" cx="170.5" cy="170.5" r="127.5"></circle>
                            <circle id="Oval" stroke-opacity="0.248808107" stroke="#5F83E0" cx="170" cy="170" r="149">
                            </circle>
                            <circle id="Oval" stroke-opacity="0.143726589" stroke="#5F83E0" cx="170" cy="170" r="170">
                            </circle>
                        </g>
                    </g>
                </svg>
                <!-- <svg class="decoration-two" width="342px" height="342px" viewBox="0 0 342 342" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>Group 22</title>
                    <g id="store" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group-22" transform="translate(1.000000, 1.000000)">
                            <circle id="Oval" stroke="#A575EA" cx="170.5" cy="170.5" r="21.5"></circle>
                            <circle id="Oval" stroke="#9478E7" cx="170.5" cy="170.5" r="42.5"></circle>
                            <circle id="Oval" stroke-opacity="0.834561648" stroke="#807CE4" cx="170" cy="170" r="64">
                            </circle>
                            <circle id="Oval" stroke-opacity="0.725251311" stroke="#6981E1" cx="170" cy="170" r="85">
                            </circle>
                            <circle id="Oval" stroke-opacity="0.571101369" stroke="#5F83E0" cx="170.5" cy="170.5" r="106.5"></circle>
                            <circle id="Oval" stroke-opacity="0.418586251" stroke="#5F83E0" cx="170.5" cy="170.5" r="127.5"></circle>
                            <circle id="Oval" stroke-opacity="0.248808107" stroke="#5F83E0" cx="170" cy="170" r="149">
                            </circle>
                            <circle id="Oval" stroke-opacity="0.143726589" stroke="#5F83E0" cx="170" cy="170" r="170">
                            </circle>
                        </g>
                    </g>
                </svg> -->
        </div>
     </div>

    <div class="bg-white">
        <!-- <h2 class="hm-sub-head">
            Featured campaigns
        </h2> -->

        <div class="hm-big-head">
            <small>FEATURED CAMPAIGNS</small>
            <h2>Discover the <span>[not yet familiar]</span></h2>
            <!-- <p>Send your experience, inspire your audience and empower your organisation today!</p> -->
        </div>

    </div>

    <div class="bg-black">

        <div class="hm-big-head">
            <small>FEATURED CAMPAIGNS</small>
            <h2>Discover the <span>[not yet familiar]</span></h2>
            <!-- <p>Send your experience, inspire your audience and empower your organisation today!</p> -->
        </div>

    </div>

    <div class="hm-projects">
        <div>
            <small>Public opinion</small>
            <h2>Climatic change</h2>
            <p>Keen to hear your opinion ...</p>
            <!-- <div class="stats">
                <div>
                    <strong>87%</strong>
                    <span>Agrees with Australia's approach</span>
                </div>
                <div>
                    <strong>10%</strong>
                    <span>Disagrees with Australia's approach</span>
                </div>
            </div> -->
            <a href="https://staging.xenome.app/s/1b8e5a8a-f07c-4ec8-808f-78cf78874974/start?embed=1" target="myiframe" class="button-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg></a>
            <!-- <video
                src="https://player.vimeo.com/external/565853257.sd.mp4?s=dc1561a84521799fbe94a5060e2d74c8aef26f7d&profile_id=164&oauth2_token_id=57447761"
                playsinline="" autoplay="" muted="" loop=""></video> -->
                <img class="img"
                            src="{{ asset('frontend/img/forest.jpg') }}" alt="Forest">
        </div>

        <div>
            <small>Health and wellbeing</small>
            <h2>Iso again</h2>
            <p>A quick check-in ...</p>
            <!-- <div class="stats">
                <div>
                    <strong>87%</strong>
                    <span>Isolated properly</span>
                </div>
                <div>
                    <strong>5%</strong>
                    <span>Attempted to isolate</span>
                </div>
            </div> -->
            <a href="#" class="button-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg></a>
            <!-- <video
                src="https://player.vimeo.com/external/476505621.sd.mp4?s=35b69f8141feed7d924efc8e5440d91cfbde9782&profile_id=139&oauth2_token_id=57447761"
                playsinline="" autoplay="" muted="" loop=""></video> -->
            <img class="img"
                            src="{{ asset('frontend/img/window.jpg') }}" alt="Window">
        </div>

        <div>
            <small>Product review</small>
            <h2>Bugger.. whoo?</h2>
            <p>Which stroller works for you ...</p>
            <a href="#" class="button-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg></a>
            <!-- <video
                src="https://player.vimeo.com/external/496754107.sd.mp4?s=fbcaf76b8dd3a63966a6935694b6576902dfdacd&profile_id=165&oauth2_token_id=57447761"
                playsinline="" autoplay="" muted="" loop=""></video> -->
                <img class="img"
                            src="{{ asset('frontend/img/pram.jpg') }}" alt="Pram">
        </div>
    </div>


    @endguest

    @auth
    <div class="cam-head">
        <div class="wrap">
            <h1>
            Campaigns
            </h1>
            <!-- <p>Take your audience on an experiential journey.</p> -->
            <form action="{{ route('company.surveys.store') }}" method="POST">
            @csrf
            <div class="side-btns">
            <button type="submit" class="button-dark large dashed">
            <span>Create:</span> From scratch</button>
            <a href="#templates" class="button-dark large dashed"><span>Or:</span> Use a template</a>
            </div>
            </form>
        </div>
    </div>

    <h2 class="hm-sub-head">
            Your campaigns
        </h2>
        <div class="list-group">


            @foreach ($surveys as $survey)
                @php
                    $display_color = $survey->answer_color;
                    $body_color = $survey->question_color;
                @endphp

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




                <div style="background-color: {{ $display_color }}" class="list-group-item">

                    <div class="i-top">
                        <div>
                            @if ($survey->logo)
                                <img id="img_logo" class="logo-card" src="/storage/{{ old('logo', $survey->logo) }}"
                                    alt="">
                            @endif

                            <h2>
                                <a style="font-family: {{ isset($survey->font_display) ? json_decode($survey->font_display)->family : '' }}"
                                    href="{{ route('company.surveys.edit', $survey) }}" class="survey-click"><span
                                        style="color: {{ $body_color }}">{{ $survey->title }}</span></a>
                            </h2>
                        </div>

                    </div>

                    <small style="color: {{ $body_color }}">
                        Sections: {{ $survey->questions_count }} <span>|</span>
                        <!-- Responses: {{ $survey->responses_count }} | -->
                        Created: {{ date('d M, Y', strtotime($survey->created_at)) }}
                    </small>




                    <div class="options">
                        <a href="{{ route('company.surveys.edit', $survey) }}" style="color: {{ $body_color }}"
                            class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg><span style="border-color: {{ $body_color }}"></span></a>
                        @if ($survey->visibility)
                            <a href="{{ $survey->url() }}"
                                style="color: {{ $body_color }}; border-color: {{ $body_color }}" target="_blank"
                                class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg><span style="border-color: {{ $body_color }}"></span></a>
                            <a href="{{ route('company.surveys.result.index', $survey) }}"
                                style="color: {{ $body_color }}" class="dropdown-item"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-pie-chart">
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                </svg><span style="border-color: {{ $body_color }}"></span></a>
                        @endif



                    </div>
                    <a href="#" class="delete-more" style="color: {{ $body_color }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
</a>
                    <div class="delete-menu" style="color: {{ $body_color }}">
                        <form method="POST" action="{{ route('company.surveys.destroy',$survey) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item mt-3">{{ __('Delete') }}</button>
                        </form>
                    </div>



                </div>

            @endforeach

            <div class="list-group-item add">
                <form action="{{ route('company.surveys.store') }}" method="POST">


                            @csrf
                            <button type="submit" class="btn w-100 btn-primary lift">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="0.5" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </button>
                            </form>
                        </div>

        </div>


        <h2 id="templates" class="hm-sub-head">
            Templates
        </h2>


        <div class="list-group">

            @if (!$templates->isEmpty())

                @foreach ($templates as $template)


                    @php
                        $display_color = $template->answer_color;
                        $body_color = $template->question_color;
                    @endphp

                    @section('fonts')
                        <script>
                            font = JSON.parse('{!! $template->font_display !!}')
                            console.log(font);
                            linkrel = document.createElement("link");
                            linkrel.setAttribute("href", "https://fonts.googleapis.com/css?family=" + font.family);
                            linkrel.setAttribute("rel", "stylesheet");
                            document.getElementsByTagName("head")[0].appendChild(linkrel);
                        </script>
                        <script>
                            font = JSON.parse('{!! $template->font_body !!}')
                            console.log(font);
                            linkrel = document.createElement("link");
                            linkrel.setAttribute("href", "https://fonts.googleapis.com/css?family=" + font.family);
                            linkrel.setAttribute("rel", "stylesheet");
                            document.getElementsByTagName("head")[0].appendChild(linkrel);
                        </script>
                    @endsection


                    <div style="background-color: {{ $display_color }}" class="list-group-item bg-one">

                        <div class="i-top">
                            <div>
                                <h2>
                                    <span class="color-two">{{ $template->title }}</span>
                                </h2>
                            </div>

                        </div>

                        <form action="{{ route('company.surveys.duplicate', $template) }}" method="POST">
                            @csrf
                            <button type="submit" class="template-button"
                                style="color: {{ $body_color }}; border-color: {{ $body_color }}">{{ __('Use template') }}</button>
                        </form>

                        <small>
                            {{ $template->welcome_message }}
                        </small>

                    </div>

                @endforeach




            @endif

        </div>

        <script>
            let font = ''
        </script>
        @yield('fonts')



    @endauth

    @include('company.shared.footer')

    <div class="fs-box">
        <a href="#" class="bck">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
        </a>
    <iframe  name="myiframe" width='640' height='640' frameborder='0' marginwidth='0' marginheight='0'>Loading</iframe>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('company/plugins/jquery/jquery.min.js') }}"></script>
    <!-- <script src="{{ asset('company/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
    <script src="{{ asset('company/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('frontend/js/alpine.min.js') }}" defer></script>
    <!-- <script src="{{ asset('company/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script> -->
    <!-- <script src="{{ asset('company/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script> -->
    <script src="{{ asset('company/plugins/clipboard/js/clipboard.min.js') }}"></script>
    <script src="{{ asset('company/js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
    <script type="text/javascript" src="{{ asset('company/js/coloris.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('company/js/aos.js') }}"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });
    </script>

<script>
    $(document).ready(function() {
        $('.delete-more').on("click", function(e) {
            e.preventDefault();
            $(this).toggleClass("open");
            $(this).next().toggleClass("open");
        });
        $('.hm-projects > div > a').on("click", function() {
            $('.fs-box').addClass("open");
            $('body').addClass("open-fs-box");
        });
        $('.bck').on("click", function() {
            $('.fs-box').removeClass("open");
            $('body').removeClass("open-fs-box");
        });
    });
</script>

</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="icon" href="{{ asset('landing/img/delta-fav.png') }}" type="image/gif" sizes="16x16">
    <title>Xenome</title>
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/boxicons/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}"> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('company/css/google.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('landing/assets/favicon/favicon.ico') }}" type="image/x-icon" />

    <!-- Map CSS -->

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/libs.bundle.css') }}" />

    <!--
      Theme Sans Serif CSS
      Remove the "disabled" attribute if you want to enable Sans Serif for headings.
    -->
    <!-- <link rel="stylesheet" href="{{ asset('landing/assets/css/theme-sans-serif.bundle.css') }}" id="themeSansSerif" disabled /> -->

    <!--
      Demo JS
      Remove the code below on a production website.
    -->
    <!-- <script src="{{ asset('landing/assets/js/demo.bundle.js') }}"></script> -->

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/theme.bundle.css') }}" />

    <!-- <link rel="stylesheet" href="https://unpkg.com/lookforward@0.1.1/css/lookforward.min.css"> -->

</head>

<body class="bg-white">





    @auth



    @include('company.shared.header')

    @include('flash::message')




    <!-- <a href="{{ route('company.surveys.index') }}" class="btn rounded-3 btn-primary btn-sm js-lookforward" data-transition-enter="slideup" data-transition-leave="slidedown">Dashboard</a> -->

    @endauth
    <!-- note the end auth -->


    @guest

    <a href="{{ route('login') }}" class="btn rounded-3 btn-primary btn-sm js-lookforward"
        data-transition-enter="slideup" data-transition-leave="slidedown">Sign In</a>
    <a href="{{ route('register') }}" class="btn rounded-3 btn-sm btn-white lift ms-3">Register</a>

    @endguest
















    <!-- CASES -->
    <section class="pt-11 pt-md-13 pb-11 pb-md-16 bg-dark">

        <!-- Content -->
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-md-12 col-xl-12 text-center">
                    <h6 class="text-uppercase text-warning mb-5">
                        Employee experience mapping for
                        <span class="d-none d-xl-inline"><span
                                data-typed='{"strings": ["Enterprise", "Startups", "Agencies"]}'></span></span><span
                            class="text-underline-warning d-xl-none">business</span>
                    </h6>
                    <h1 class="display-2 mb-4 text-white">
                        Empower&nbsp;your team through
                        multi-dimensional social input.
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10 text-center">
                    <!-- Text -->
                    <p class="lead text-muted">
                        Drive key initiatives and activate
                        human-centred business decisions.
                    </p>

                    <!-- Buttons -->
                    <!-- <a
                        class="btn btn-lg btn-primary lift cta-38811-trigger"
                        href="{{ route('register') }}"
                      >
                        Get started
                      </a> -->
                    <!-- <a class="btn btn-lg btn-white lift ms-3" href="https://surveybird:8890/public/s/a8a50fff-1166-4c0b-9d45-4eb3a213ddc9">
                        <span class="d-none d-sm-inline-block">Demo</span>
                      </a> -->
                </div>
            </div>
        </div>
        <!-- <div class="container-lg">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-8 text-center">

            \
            <h6 class="text-uppercase text-warning mb-5">
              Selling on the go
            </h6>


            <h2 class="display-4 text-white mb-9">
              Your site is more than a landing so we built <span class="text-underline-primary-light">supporting pages</span>.
            </h2>

          </div>
        </div>
      </div> -->

        <!-- Slider -->
        <!-- <div class="flickity-buttons-responsive flickity-items-fade" data-flickity='{"imagesLoaded": true, "wrapAround": true}'>
        <div style="width: calc(100% - 2rem); max-width: 920px;">

          <a href="/">
            <img class="img-fluid rounded" src="assets/img/screenshots/desktop/page-blog-article.jpg" alt="...">
          </a>
          <div class="flickity-hidden py-6 text-center">
            <h6 class="text-uppercase text-white">
              Blog Article
            </h6>
            <p class="fs-sm text-center text-white-80 mb-0">
              Featured image with beautiful type and galleries.
            </p>

          </div>

        </div>



      </div> -->

    </section>

    <!-- SHAPE -->
    <div class="position-relative">

        <!-- Shape -->
        <div class="shape shape-fluid-x shape-top text-white">
            <div class="shape-img pb-9 pb-md-15">
                <svg viewBox="0 0 100 50" preserveAspectRatio="none">
                    <path d="M0 0h25l50 25h25v75H0z" fill="currentColor" />
                </svg>
            </div>
        </div>

        <!-- Decoration -->
        <div class="position-absolute top-end text-primary-dark mt-n12">
            <svg width="342px" height="342px" viewBox="0 0 342 342" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Group 22</title>
                <g id="store" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Group-22" transform="translate(1.000000, 1.000000)">
                        <circle id="Oval" stroke="#A575EA" cx="170.5" cy="170.5" r="21.5"></circle>
                        <circle id="Oval" stroke="#9478E7" cx="170.5" cy="170.5" r="42.5"></circle>
                        <circle id="Oval" stroke-opacity="0.834561648" stroke="#807CE4" cx="170" cy="170" r="64">
                        </circle>
                        <circle id="Oval" stroke-opacity="0.725251311" stroke="#6981E1" cx="170" cy="170" r="85">
                        </circle>
                        <circle id="Oval" stroke-opacity="0.571101369" stroke="#5F83E0" cx="170.5" cy="170.5" r="106.5">
                        </circle>
                        <circle id="Oval" stroke-opacity="0.418586251" stroke="#5F83E0" cx="170.5" cy="170.5" r="127.5">
                        </circle>
                        <circle id="Oval" stroke-opacity="0.248808107" stroke="#5F83E0" cx="170" cy="170" r="149">
                        </circle>
                        <circle id="Oval" stroke-opacity="0.143726589" stroke="#5F83E0" cx="170" cy="170" r="170">
                        </circle>
                    </g>
                </g>
            </svg>
        </div>








        <!-- NAVBAR -->
        <nav class="navbar navborder navbar-expand-lg navbar-light bg-light">
            <div class="container-lg">

                <!-- Brand -->
                <a class="navbar-brand" href="/">
                    <svg width="152px" height="40px" viewBox="0 0 152 40" version="1.1"
                        xmlns="http://www.w3.org/2010911/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="builder" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="logo" fill-rule="nonzero">
                                <polygon id="Path" fill="#010911"
                                    points="42.4298562 20.7723306 37.8611379 20.7723306 37.8611379 23.8827304 43.2230365 23.8827304 43.2230365 25.8047979 35.4815971 25.8047979 35.4815971 14.1926388 43.2071729 14.1926388 43.2071729 16.1306571 37.8611379 16.1306571 37.8611379 18.8981154 42.4298562 18.8981154">
                                </polygon>
                                <polygon id="Path" fill="#010911"
                                    points="70.9631942 25.8047979 68.674762 25.8047979 64.2199472 18.1643801 64.2199472 25.8047979 61.9315149 25.8047979 61.9315149 14.1926388 64.2199472 14.1926388 68.6823901 21.8490074 68.6823901 14.1926388 70.9631942 14.1926388">
                                </polygon>
                                <path
                                    d="M93.5423924,14.1926388 C94.5523917,14.1926388 95.4501091112,14.4190323 96.2352479,14.871826 C97.0204946,15.3246196 97.6281499,15.9740454 98.058232,16.8201227 C98.4883141,17.6662 98.7033519,18.642926 98.7033519,19.7503299 L98.7033519,20.2548689 C98.7033519,21.3674477 98.4924761,22.34288 98.0707182,23.1811951 C97.6489602,24.0195103 97.045467,24.6663487 96.2602203,25.1217297 C95.4749736,25.5771108 94.5745894,25.8047979 93.5590406,25.8047979 C92.5545908,25.8047979 91.6583686,25.5796981 90.8703472,25.1294919 C90.0823257,24.6792856 89.4718958,24.0363282 89.0390389,23.2006005 C88.6061821,22.3648727 88.3869822,21.4036709 88.3814328,20.316966 L88.3814328,19.7580921 C88.3814328,18.6455133 88.5964706,17.6662 89.0265527,16.8201227 C89.4566349,15.9740454 90.0642901,15.3246196 90.8495368,14.871826 C91.6347835,14.4190323 92.5323931,14.1926388 93.5423924,14.1926388 Z M93.5423924,16.1176492 C92.7044259,16.1176492 92.0579251,16.4216632 91.6028705,17.0297004 C91.1478158,17.6377376 90.9175173,18.529081 90.9119678,19.7037571 L90.9119678,20.2548689 C90.9119678,21.4088459 91.1394917,22.3040703 91.5945463,22.9405688 C92.049601,23.5770674 92.7044258,23.8953118 93.5590406,23.8953118 C94.3970071,23.8953118 95.0407332,23.5887104 95.4902384,22.9754984 C95.9397436,22.3622864 96.1672675,21.4683558 96.1728169,20.2936796 L96.1728169,19.7425678 C96.1728169,18.5575421 95.945293,17.657143 95.4902384,17.0413436 C95.0351838,16.4255442 94.3859083,16.1176492 93.5423924,16.1176492 Z"
                                    id="Combined-Shape" fill="#010911"></path>
                                <polygon id="Path" fill="#010911"
                                    points="117.802608 14.1926388 120.63743 22.6146443 123.457093 14.1926388 126.44351 14.1926388 126.44351 25.8047979 124.162008 25.8047979 124.162008 22.6305951 124.389401 17.1515063 121.410563 25.8047979 119.849137 25.8047979 116.87788 17.1594817 117.105272 22.6305951 117.105272 25.8047979 114.831351 25.8047979 114.831351 14.1926388">
                                </polygon>
                                <polygon id="Path" fill="#010911"
                                    points="150.810109117 20.7723306 146.241289 20.7723306 146.241289 23.8827304 151.603188 23.8827304 151.603188 25.8047979 143.861748 25.8047979 143.861748 14.1926388 151.587324 14.1926388 151.587324 16.1306571 146.241289 16.1306571 146.241289 18.8981154 150.810109117 18.8981154">
                                </polygon>
                                <rect id="Rectangle" stroke="#2B8DD8" stroke-width="1.29023989" fill-opacity="0"
                                    fill="#010911" x="0.645119947" y="0.645119947" width="23.2243181"
                                    height="38.7071968" rx="5.16095958"></rect>
                                <polygon id="Combined-Shape" fill="#010911"
                                    points="12.257279 18.1962816 14.4972503 14.1926388 17.3279833 14.1926388 13.8490535 19.9508661 17.4182386 25.8047979 14.5546855 25.8047979 12.257279 21.7373521 9.95987251 25.8047979 7.09631942 25.8047979 10.6655045 19.9508661 7.18657468 14.1926388 10.0173077 14.1926388">
                                </polygon>
                            </g>
                        </g>
                    </svg></a>

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Navigation -->
                    <ul class="navbar-nav mx-auto">
                        <!-- <li class="nav-item">
              <a class="nav-link" href="./employee-experience.html">
                Employee xMaps
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./customer-experience.html">
                Customer xMaps
              </a>
            </li> -->

                    </ul>

                    <!-- Button -->
                    <!-- <a class="btn btn-sm rounded-3  btn-primary d-none d-lg-inline-block cta-38811-trigger" href="#">
            Request a demo
          </a> -->


                </div>

            </div>
        </nav>





        <!-- WELCOME -->
        <section class="pt-6 pt-md-11 pb-10 bg-light">
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-xl-12 text-center">
                        <h6 class="text-uppercase text-warning mb-5">
                            Employee experience mapping for
                            <span class="d-none d-xl-inline"><span
                                    data-typed='{"strings": ["Enterprise", "Startups", "Agencies"]}'></span></span><span
                                class="text-underline-warning d-xl-none">business</span>
                        </h6>
                        <h1 class="display-2 mb-4">
                            Empower&nbsp;your team through
                            multi-dimensional social input.
                        </h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10 text-center">
                        <!-- Text -->
                        <p class="lead text-muted">
                            Drive key initiatives and activate
                            human-centred business decisions.
                        </p>

                        <!-- Buttons -->
                        <!-- <a
                        class="btn btn-lg btn-primary lift cta-38811-trigger"
                        href="{{ route('register') }}"
                      >
                        Get started
                      </a> -->
                        <!-- <a class="btn btn-lg btn-white lift ms-3" href="https://surveybird:8890/public/s/a8a50fff-1166-4c0b-9d45-4eb3a213ddc9">
                        <span class="d-none d-sm-inline-block">Demo</span>
                      </a> -->
                    </div>
                </div>
            </div>
        </section>




        <!-- SHAPE -->
        <div class="position-relative">
            <div class="shape shape-fluid-x shape-bottom text-light pb-17 pb-lg-18">
                <div class="shape-img pb-8 pb-md-11">
                    <svg viewBox="0 0 100 50" preserveAspectRatio="none">
                        <path d="M0 0h100v25H75L25 50H0z" fill="currentColor" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- CLIENTS -->
        <section class="pt-9 pt-md-11">
            <div class="container-lg">
                <div class="row mx-n4 mb-9 mb-md-10">
                    <div class="col-6 col-md-3 px-4">

                        <!-- Image -->
                        <img class="img-fluid rounded shadow-lg mt-md-8"
                            src="{{ asset('landing/assets/img/pic1@2x.png') }}" alt="..." data-aos="fade-up"
                            data-aos-delay="125">

                        <!-- Image -->
                        <img class="img-fluid rounded shadow-lg mt-5 d-md-none"
                            src="{{ asset('landing/assets/img/pic2@2x.png') }}" alt="...">

                    </div>
                    <div class="col-3 px-4 d-none d-md-block" data-aos="fade-up" data-aos-delay="150">

                        <!-- Image -->
                        <img class="img-fluid rounded shadow-lg" src="{{ asset('landing/assets/img/pic2@2x.png') }}"
                            alt="...">

                        <!-- Image -->
                        <img class="img-fluid rounded shadow-lg mt-5"
                            src="{{ asset('landing/assets/img/pic4@2x.png') }}" alt="...">

                    </div>
                    <div class="col-6 col-md-3 px-4">

                        <!-- Image -->
                        <img class="img-fluid rounded shadow-lg mt-9"
                            src="{{ asset('landing/assets/img/pic5@2x.png') }}" alt="..." data-aos="fade-up"
                            data-aos-delay="200">

                    </div>
                    <div class="col-3 px-4 d-none d-md-block">

                        <!-- Image -->
                        <div class="position-relative mt-8">

                            <!-- Decoration -->
                            <div class="position-absolute top-end text-primary-light mt-n12 me-n11">
                                <svg width="342px" height="342px" viewBox="0 0 342 342" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>Group 22</title>
                                    <g id="store" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Group-22" transform="translate(1.000000, 1.000000)">
                                            <circle id="Oval" stroke="#A575EA" cx="170.5" cy="170.5" r="21.5"></circle>
                                            <circle id="Oval" stroke="#9478E7" cx="170.5" cy="170.5" r="42.5"></circle>
                                            <circle id="Oval" stroke-opacity="0.834561648" stroke="#807CE4" cx="170"
                                                cy="170" r="64"></circle>
                                            <circle id="Oval" stroke-opacity="0.725251311" stroke="#6981E1" cx="170"
                                                cy="170" r="85"></circle>
                                            <circle id="Oval" stroke-opacity="0.571101369" stroke="#5F83E0" cx="170.5"
                                                cy="170.5" r="106.5"></circle>
                                            <circle id="Oval" stroke-opacity="0.418586251" stroke="#5F83E0" cx="170.5"
                                                cy="170.5" r="127.5"></circle>
                                            <circle id="Oval" stroke-opacity="0.248808107" stroke="#5F83E0" cx="170"
                                                cy="170" r="149"></circle>
                                            <circle id="Oval" stroke-opacity="0.143726589" stroke="#5F83E0" cx="170"
                                                cy="170" r="170"></circle>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <!-- Image -->
                            <img class="position-relative img-fluid rounded-top-start rounded shadow-lg"
                                src="{{ asset('landing/assets/img/pic3@2x.png') }}" alt="..." data-aos="fade-up"
                                data-aos-delay="250">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STEPS -->
        <section class="pt-9 pt-md-11 bg-white">
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10 text-center">

                        <!-- Preheading -->
                        <h6 class="text-uppercase text-primary mb-5">
                            What is Xenome?
                        </h6>

                        <!-- Heading -->
                        <h2 class="display-4 mb-9">
                            The ultimate mobile platform for telling a story while understanding the <span
                                class="text-underline-warning">entire employee journey</span>.
                        </h2>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-12">

                        <!-- Timeline -->
                        <ol class="timeline timeline-expand-lg timeline-warning mb-0">
                            <li class="timeline-item active">

                                <!-- Heading -->
                                <h2>
                                    Visual story-telling
                                </h2>

                                <!-- Text -->
                                <p class="text-muted mb-4 p-right-10 ps-4 pe-4">
                                    An xMap (experience map) combines video, text and imagery with various feedback
                                    mechanisms creating an interactive and linear experience that maps out the employee
                                    journey.
                                </p>

                                <!-- Link -->
                                <!-- <a class="h4 font-sans-serif" href="#!">
                        Page types <i class="fe fe-chevron-right ms-1"></i>
                      </a> -->

                            </li>
                            <li class="timeline-item active">

                                <!-- Heading -->
                                <h2>
                                    Instant feedback
                                </h2>

                                <!-- Text -->
                                <p class="text-muted mb-4 ps-4 pe-4">
                                    A clever drag and drop mechanism collects scaled, multi-directional and qualitative
                                    data where the user sees an instant overview of how others have responded in the
                                    form of a heat map.
                                </p>
                                <!-- . Both the scale(two-directional) and quad(multi-directional) charts let you. -->

                                <!-- Link -->
                                <!-- <a class="h4 font-sans-serif" href="#!">
                        Mechanisms <i class="fe fe-chevron-right ms-1"></i>
                      </a> -->

                            </li>
                            <li class="timeline-item active">

                                <!-- Heading -->
                                <h2>
                                    Social input
                                </h2>

                                <!-- Text -->
                                <p class="text-muted mb-4 ps-4 pe-4">
                                    By surfacing "real world" feedback and "just enough transparency"
                                    it provokes opinion and subsequently sparks conversation that empowers human-centred
                                    business decisions.
                                </p>

                                <!-- Link -->
                                <!-- <a class="h4 font-sans-serif" href="#!">
                          Inputs <i class="fe fe-chevron-right ms-1"></i>
                        </a> -->

                            </li>
                        </ol>

                    </div>
                </div>
            </div>
        </section>




        <!-- DOWNLOAD -->
        <section id="why">
            <div class="container-lg position-relative" style="z-index: 1">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-4 pt-10 pt-md-12">
                        <!-- Image -->
                        <div class="position-relative">
                            <!-- Decoration -->
                            <div class="position-absolute top-end text-warning mt-n8 me-n13">
                                <svg width="342px" height="342px" viewBox="0 0 342 342" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="store" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Group-22" transform="translate(1.000000, 1.000000)">
                                            <circle id="Oval" stroke="#A575EA" cx="170.5" cy="170.5" r="21.5"></circle>
                                            <circle id="Oval" stroke="#9478E7" cx="170.5" cy="170.5" r="42.5"></circle>
                                            <circle id="Oval" stroke-opacity="0.834561648" stroke="#807CE4" cx="170"
                                                cy="170" r="64"></circle>
                                            <circle id="Oval" stroke-opacity="0.725251311" stroke="#6981E1" cx="170"
                                                cy="170" r="85"></circle>
                                            <circle id="Oval" stroke-opacity="0.571101369" stroke="#5F83E0" cx="170.5"
                                                cy="170.5" r="106.5"></circle>
                                            <circle id="Oval" stroke-opacity="0.418586251" stroke="#5F83E0" cx="170.5"
                                                cy="170.5" r="127.5"></circle>
                                            <circle id="Oval" stroke-opacity="0.248808107" stroke="#5F83E0" cx="170"
                                                cy="170" r="149"></circle>
                                            <circle id="Oval" stroke-opacity="0.143726589" stroke="#5F83E0" cx="170"
                                                cy="170" r="170"></circle>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <!-- Decoration -->

                            <div class="row align-items-center mb-9 mb-md-10">
                                <div class="col-12">


                                    <!-- Image -->
                                    <img class="position-relative img-fluid rounded"
                                        src="{{ asset('landing/assets/img/sea.jpg') }}" alt="...">

                                </div>
                                <div class="col-12 offset-n12 text-center">

                                    <!-- Button -->
                                    <a class="btn btn-circle btn-white p-6" data-bigpicture='{"ytSrc": "MyiKpnVUiL4"}'
                                        href="#!">
                                        <span class="d-inline-block" style="transform: translateX(.125rem)">
                                            <svg width="0.727em" height="1em" viewBox="0 0 8 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 9.63V1.19C0 .683.567.38.988.664l6.455 4.334A.634.634 0 017.43 6.06L.975 10.166A.635.635 0 010 9.631z"
                                                    fill="currentColor" />
                                            </svg> </span>
                                    </a>



                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 pt-8 pb-10 py-md-12 text-center text-md-start">

                        <!-- Preheading -->
                        <h6 class="text-uppercase text-primary mb-5">
                            Why Xenome?
                        </h6>
                        <!-- Heading -->
                        <h2 class="display-4 mb-6">Today's world.</h2>

                        <!-- Text -->
                        <p>Today’s world gives us a chance to rethink, restructure and rebuild. For organisations to
                            prioritise what really matters, a test of humanity, dignity, adversity
                            and prosperity. An opportunity to balance work with life. Make the most of the past, the
                            present and the future. Ask yourself – do you have your say or are you a victim to those
                            that did? Are you empowered by the voice of many or limited by the voice of few? How can we
                            gather as one? Reimagine, understand, diversify, connect and transform.</p>


                        <a class="btn btn-lg btn-primary lift cta-38811-trigger" href="{{ route('register') }}">
                            Join the discovery
                        </a>

                        <!-- Buttons -->
                        <!-- <div
              class="d-flex flex-nowrap justify-content-center justify-content-md-start"
            >
              <a class="lift" href="#!" style="max-width: 180px">
                <img
                  class="img-fluid"
                  src="{{ asset('landing/assets/img/buttons/button-app.png') }}"
                  alt="..."
                />
              </a>
              <a class="lift ms-2" href="#!" style="max-width: 180px">
                <img
                  class="img-fluid"
                  src="{{ asset('landing/assets/img/buttons/button-play.png') }}"
                  alt="..."
                />
              </a>
            </div> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- SHAPE -->
        <div class="position-relative mt-md-n13">
            <div class="shape shape-fluid-x shape-bottom text-white">
                <div class="shape-img pb-9 mb-md-14"><svg viewBox="0 0 100 50" preserveAspectRatio="none">
                        <path d="M0 0h100v50H75L25 25H0z" fill="currentColor" />
                    </svg></div>
            </div>

        </div>

        <!-- FEATURES -->
        <section class="pt-10 pt-md-16 bg-dark">
            <div class="container-lg position-relative">
                <div class="position-absolute top-start text-warning ms-n12 mt-n17">
                    <svg width="342px" height="342px" viewBox="0 0 342 342" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>Group 22</title>
                        <g id="store" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group-22" transform="translate(1.000000, 1.000000)">
                                <circle id="Oval" stroke="#A575EA" cx="170.5" cy="170.5" r="21.5"></circle>
                                <circle id="Oval" stroke="#9478E7" cx="170.5" cy="170.5" r="42.5"></circle>
                                <circle id="Oval" stroke-opacity="0.834561648" stroke="#807CE4" cx="170" cy="170"
                                    r="64"></circle>
                                <circle id="Oval" stroke-opacity="0.725251311" stroke="#6981E1" cx="170" cy="170"
                                    r="85"></circle>
                                <circle id="Oval" stroke-opacity="0.571101369" stroke="#5F83E0" cx="170.5" cy="170.5"
                                    r="106.5"></circle>
                                <circle id="Oval" stroke-opacity="0.418586251" stroke="#5F83E0" cx="170.5" cy="170.5"
                                    r="127.5"></circle>
                                <circle id="Oval" stroke-opacity="0.248808107" stroke="#5F83E0" cx="170" cy="170"
                                    r="149"></circle>
                                <circle id="Oval" stroke-opacity="0.143726589" stroke="#5F83E0" cx="170" cy="170"
                                    r="170"></circle>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">

                        <!-- Heading -->
                        <h2 class="display-4 text-center text-white mb-4 mb-md-6">
                            A strong brand experience.
                        </h2>
                        <p class="fs-lg text-white-80 mb-10 text-center">Each&nbsp;touch point is paired with relative
                            content and clever feedback mechanisms in order to bind employee opinions with key business
                            decisions.</p>



                    </div>
                </div>
                <div class="row mt-n8 mt-md-n9" data-aos="fade-up">
                    <div class="col-md-6 col-lg-4">

                        <!-- Item -->
                        <div class="d-flex mt-8 mt-md-9">

                            <!-- Icon -->
                            <div class="icon text-primary-light">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M0 0h24v24H0z" />
                                        <path fill="#335EEA" opacity=".3" d="M5 15l-2 6.5 6.5-2z" />
                                        <path
                                            d="M13.5 21a9.5 9.5 0 110-19 9.5 9.5 0 010 19zM9 8a1 1 0 100 2h9a1 1 0 000-2H9zm0 4a1 1 0 000 2h5a1 1 0 000-2H9z"
                                            fill="#335EEA" />
                                    </g>
                                </svg>
                            </div>

                            <!-- Body -->
                            <div class="ms-5">

                                <!-- Title -->
                                <p class="fs-lg fw-bold text-white mb-1">
                                    Contextual feedback
                                </p>

                                <!-- Text -->
                                <p class="fs-sm text-white-60 mb-0">
                                    Feedback is requested within the context of visual story-telling.
                                </p>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4">

                        <!-- Item -->
                        <div class="d-flex mt-8 mt-md-9">

                            <!-- Icon -->
                            <div class="icon text-primary-light">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M0 0h24v24H0z" />
                                        <path
                                            d="M16 15.632V12a3 3 0 00-3-3H6.162V5.526A2.526 2.526 0 018.688 3h11.79a2.526 2.526 0 012.526 2.526v7.58l.017 4.68a.5.5 0 01-.854.356l-2.51-2.51H16z"
                                            fill="#335EEA" />
                                        <path
                                            d="M1.985 18v-5a2 2 0 012-2h8a2 2 0 012 2v5a2 2 0 01-2 2H4.101l-1.244 1.19a.5.5 0 01-.846-.36v-2.506A2.014 2.014 0 011.985 18zM6.5 14a.5.5 0 100 1h5a.5.5 0 100-1h-5zm3 2a.5.5 0 100 1h2a.5.5 0 100-1h-2z"
                                            fill="#335EEA" opacity=".3" />
                                    </g>
                                </svg>
                            </div>

                            <!-- Body -->
                            <div class="ms-5">

                                <!-- Title -->
                                <p class="fs-lg fw-bold text-white mb-1">
                                    Employee voice
                                </p>

                                <!-- Text -->
                                <p class="fs-sm text-white-60 mb-0">
                                    An opportunity for employees to have their say (with or without words).
                                </p>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4">

                        <!-- Item -->
                        <div class="d-flex mt-9">

                            <!-- Icon -->
                            <div class="icon text-primary-light">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M0 0h24v24H0z" />
                                        <path
                                            d="M4 4l7.631-1.43a2 2 0 01.738 0L20 4v9.283a8.51 8.51 0 01-4 7.217l-3.47 2.169a1 1 0 01-1.06 0L8 20.5a8.51 8.51 0 01-4-7.217V4z"
                                            fill="#335EEA" opacity=".3" />
                                        <path
                                            d="M11.175 14.75a.946.946 0 01-.67-.287l-1.917-1.917a.926.926 0 010-1.342c.383-.383 1.006-.383 1.341 0l1.246 1.246 3.163-3.162a.926.926 0 011.341 0 .926.926 0 010 1.341l-3.833 3.834a.946.946 0 01-.671.287z"
                                            fill="#335EEA" />
                                    </g>
                                </svg>
                            </div>

                            <!-- Body -->
                            <div class="ms-5">

                                <!-- Title -->
                                <p class="fs-lg fw-bold text-white mb-1">
                                    Brand awareness
                                </p>

                                <!-- Text -->
                                <p class="fs-sm text-white-60 mb-0">
                                    Visual story-telling enables a strong brand has a strong brand experience.
                                </p>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4">

                        <!-- Item -->
                        <div class="d-flex mt-8 mt-md-9">

                            <!-- Icon -->
                            <div class="icon text-primary-light">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M0 0h24v24H0z" />
                                        <path d="M12 21a9 9 0 110-18 9 9 0 010 18zm0-3a6 6 0 100-12 6 6 0 000 12z"
                                            fill="#335EEA" />
                                        <path d="M12 16a4 4 0 100-8 4 4 0 000 8z" fill="#335EEA" opacity=".3" />
                                    </g>
                                </svg>
                            </div>

                            <!-- Body -->
                            <div class="ms-5">

                                <!-- Title -->
                                <p class="fs-lg fw-bold text-white mb-1">
                                    Transparency
                                </p>

                                <!-- Text -->
                                <p class="fs-sm text-white-60 mb-0">
                                    An opportunity to form trust and spark intelligent conversation.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 col-lg-4">

                        <!-- Item -->
                        <div class="d-flex mt-8 mt-md-9">

                            <!-- Icon -->
                            <div class="icon text-primary-light">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M0 0h24v24H0z" />
                                        <path
                                            d="M2.56 10.682l2.122-2.121a1.5 1.5 0 012.121 0l2.122 2.121a1.5 1.5 0 010 2.121l-2.122 2.122a1.5 1.5 0 01-2.121 0l-2.121-2.122a1.5 1.5 0 010-2.121zm12 0l2.122-2.121a1.5 1.5 0 012.121 0l2.122 2.121a1.5 1.5 0 010 2.121l-2.122 2.122a1.5 1.5 0 01-2.121 0l-2.121-2.122a1.5 1.5 0 010-2.121z"
                                            fill="#335EEA" opacity=".3" />
                                        <path
                                            d="M8.56 16.682l2.122-2.121a1.5 1.5 0 012.121 0l2.122 2.121a1.5 1.5 0 010 2.121l-2.122 2.122a1.5 1.5 0 01-2.121 0l-2.121-2.122a1.5 1.5 0 010-2.121zm0-12l2.122-2.121a1.5 1.5 0 012.121 0l2.122 2.121a1.5 1.5 0 010 2.121l-2.122 2.122a1.5 1.5 0 01-2.121 0L8.561 6.803a1.5 1.5 0 010-2.121z"
                                            fill="#335EEA" />
                                    </g>
                                </svg>
                            </div>

                            <!-- Body -->
                            <div class="ms-5">

                                <!-- Title -->
                                <p class="fs-lg fw-bold text-white mb-1">
                                    Connected learning
                                </p>

                                <!-- Text -->
                                <p class="fs-sm text-white-60 mb-0">
                                    Instant feedback and ongoing conversation enhances learning.
                                </p>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4">

                        <!-- Item -->
                        <div class="d-flex mt-8 mt-md-9">

                            <!-- Icon -->
                            <div class="icon text-primary-light">
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M0 0h24v24H0z" />
                                        <path d="M5 19h15a1 1 0 010 2H4a1 1 0 01-1-1V4a1 1 0 112 0v15z"
                                            fill="#335EEA" />
                                        <path
                                            d="M8.73 14.684a1 1 0 11-1.46-1.368l3.75-4a1 1 0 011.38-.077l2.959 2.526 3.856-4.885a1 1 0 011.57 1.24l-4.5 5.7a1 1 0 01-1.434.14l-3.024-2.58-3.097 3.304z"
                                            fill="#335EEA" opacity=".3" />
                                    </g>
                                </svg>
                            </div>

                            <!-- Body -->
                            <div class="ms-5">

                                <!-- Title -->
                                <p class="fs-lg fw-bold text-white mb-1">
                                    Retention
                                </p>

                                <!-- Text -->
                                <p class="fs-sm text-white-60 mb-0">
                                    Employee relationships empower human-centered business decisions.
                                </p>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- CTA -->
        <section class="py-12 py-md-16 bg-dark position-relative">
            <!-- Decoration -->
            <div class="position-absolute top-end text-warning me-n13">
                <svg width="342px" height="342px" viewBox="0 0 342 342" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>Group 22</title>
                    <g id="store" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group-22" transform="translate(1.000000, 1.000000)">
                            <circle id="Oval" stroke="#A575EA" cx="170.5" cy="170.5" r="21.5"></circle>
                            <circle id="Oval" stroke="#9478E7" cx="170.5" cy="170.5" r="42.5"></circle>
                            <circle id="Oval" stroke-opacity="0.834561648" stroke="#807CE4" cx="170" cy="170" r="64">
                            </circle>
                            <circle id="Oval" stroke-opacity="0.725251311" stroke="#6981E1" cx="170" cy="170" r="85">
                            </circle>
                            <circle id="Oval" stroke-opacity="0.571101369" stroke="#5F83E0" cx="170.5" cy="170.5"
                                r="106.5"></circle>
                            <circle id="Oval" stroke-opacity="0.418586251" stroke="#5F83E0" cx="170.5" cy="170.5"
                                r="127.5"></circle>
                            <circle id="Oval" stroke-opacity="0.248808107" stroke="#5F83E0" cx="170" cy="170" r="149">
                            </circle>
                            <circle id="Oval" stroke-opacity="0.143726589" stroke="#5F83E0" cx="170" cy="170" r="170">
                            </circle>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="position-absolute bottom-start text-warning ms-n14">
                <svg width="342px" height="342px" viewBox="0 0 342 342" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>Group 22</title>
                    <g id="store" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group-22" transform="translate(1.000000, 1.000000)">
                            <circle id="Oval" stroke="#A575EA" cx="170.5" cy="170.5" r="21.5"></circle>
                            <circle id="Oval" stroke="#9478E7" cx="170.5" cy="170.5" r="42.5"></circle>
                            <circle id="Oval" stroke-opacity="0.834561648" stroke="#807CE4" cx="170" cy="170" r="64">
                            </circle>
                            <circle id="Oval" stroke-opacity="0.725251311" stroke="#6981E1" cx="170" cy="170" r="85">
                            </circle>
                            <circle id="Oval" stroke-opacity="0.571101369" stroke="#5F83E0" cx="170.5" cy="170.5"
                                r="106.5"></circle>
                            <circle id="Oval" stroke-opacity="0.418586251" stroke="#5F83E0" cx="170.5" cy="170.5"
                                r="127.5"></circle>
                            <circle id="Oval" stroke-opacity="0.248808107" stroke="#5F83E0" cx="170" cy="170" r="149">
                            </circle>
                            <circle id="Oval" stroke-opacity="0.143726589" stroke="#5F83E0" cx="170" cy="170" r="170">
                            </circle>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-12 text-center">
                        <!-- Preheading -->
                        <h6 class="text-uppercase text-primary-light mb-5">
                            There's no time like now
                        </h6>

                        <!-- Heading -->
                        <h2 class="display-1 text-white mb-6">Take your employees on an experiential journey.</h2>

                        <!-- Text -->
                        <p class="text-white-80">
                            We will guide you through creating your first xMap (experience map) so you can put your best
                            foot forward.
                        </p>

                        <!-- Button -->
                        <a class="btn btn-lg btn-primary lift cta-38811-trigger" href="{{ route('register') }}">
                            Get started
                        </a>
                        <!-- <a class="btn btn-lg btn-white lift ms-3 cta-38811-trigger" href="{{ route('register') }}">
             <span class="d-sm-none">Find out more</span
             ><span class="d-none d-sm-inline-block">Find out more</span>
           </a> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="footer py-8 pt-md-11 bg-dark border-top border-gray-900">
            <div class="container-lg">
                <!-- <div class="row">
          <div class="col-md-4">

            <h2 class="font-serif text-white mb-1">
              <svg width="155px" height="42px" viewBox="0 0 155 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>Group</title>
                  <g id="store" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Group" fill-rule="nonzero">
                          <g id="Group-3">
                              <polygon id="Path" fill="#FFFFFF" points="43.2428191 20.9926671 38.5541596 20.9926671 38.5541596 24.0879942 44.0568224 24.0879942 44.0568224 26.0007477 36.1121495 26.0007477 36.1121495 14.4448598 44.0405424 14.4448598 44.0405424 16.3734867 38.5541596 16.3734867 38.5541596 19.1275341 43.2428191 19.1275341"></polygon>
                              <polygon id="Path" fill="#FFFFFF" points="72.2242991 26.0007477 69.8452892 26.0007477 65.21415 18.3973544 65.21415 26.0007477 62.8351402 26.0007477 62.8351402 14.4448598 65.21415 14.4448598 69.8532192 22.0641265 69.8532192 14.4448598 72.2242991 14.4448598"></polygon>
                              <path d="M94.9749533,14.4448598 C96.0350249,14.4448598 96.9771349,14.6701562 97.8013114,15.1207557 C98.625488,15.5713551 99.2632688,16.2176339 99.7146729,17.0596112 C100.166077,17.9015885 100.391776,18.8735814 100.391776,19.975619 L100.391776,20.477713 C100.391776,21.5849003 100.170445,22.5556058 99.7277781,23.3898586 C99.2851108,24.2241113 98.6516984,24.8678152 97.8275219,25.3209896 C97.0033453,25.7741639 96.0583231,26.0007477 94.9924269,26.0007477 C93.9381798,26.0007477 92.997526,25.7767387 92.1704371,25.3287141 C91.3433483,24.8806894 90.7026553,24.2408478 90.2483389,23.4091699 C89.7940224,22.577492 89.5639554,21.620948 89.5581308,20.5395092 L89.5581308,19.9833435 C89.5581308,18.8761562 89.7838295,17.9015885 90.2352336,17.0596112 C90.6866378,16.2176339 91.3244186,15.5713551 92.1485951,15.1207557 C92.9727717,14.6701562 93.9148816,14.4448598 94.9749533,14.4448598 Z M94.9749533,16.3605418 C94.0954433,16.3605418 93.4168911,16.6630826 92.9392765,17.2681733 C92.4616618,17.8732641 92.2199458,18.760288 92.2141212,19.9292718 L92.2141212,20.477713 C92.2141212,21.626098 92.452925,22.5169842 92.9305396,23.1503983 C93.4081543,23.7838125 94.0954432,24.1005148 94.9924269,24.1005148 C95.8719369,24.1005148 96.5475768,23.7953991 97.0193669,23.1851587 C97.491157,22.5749182 97.7299608,21.6853195 97.7357853,20.5163356 L97.7357853,19.9678944 C97.7357853,18.7886112 97.4969816,17.8925754 97.0193669,17.2797601 C96.5417522,16.6669448 95.8602878,16.3605418 94.9749533,16.3605418 Z" id="Combined-Shape" fill="#FFFFFF"></path>
                              <polygon id="Path" fill="#FFFFFF" points="119.960224 14.4448598 122.781308 22.8260532 125.587307 14.4448598 128.559252 14.4448598 128.559252 26.0007477 126.288807 26.0007477 126.288807 22.8419267 126.515097 17.3893889 123.550695 26.0007477 121.996836 26.0007477 119.039977 17.3973257 119.266267 22.8419267 119.266267 26.0007477 117.003364 26.0007477 117.003364 14.4448598"></polygon>
                              <polygon id="Path" fill="#FFFFFF" points="153.745997 20.9926671 149.057337 20.9926671 149.057337 24.0879942 154.56 24.0879942 154.56 26.0007477 146.615327 26.0007477 146.615327 14.4448598 154.54372 14.4448598 154.54372 16.3734867 149.057337 16.3734867 149.057337 19.1275341 153.745997 19.1275341"></polygon>
                              <rect id="Rectangle" stroke="#2B8DD8" stroke-width="1.86278373" fill-opacity="0" fill="#2B8DD8" x="0.931391867" y="0.931391867" width="23.4157209" height="39.3050667" rx="7.45113493"></rect>
                              <polygon id="Combined-Shape" fill="#FFFFFF" points="12.6392523 18.4291014 14.9902738 14.4448598 17.961345 14.4448598 14.3099416 20.1751833 18.0560748 26.0007477 15.0505564 26.0007477 12.6392523 21.9530122 10.2279482 26.0007477 7.22242991 26.0007477 10.9685631 20.1751833 7.31715971 14.4448598 10.2882308 14.4448598"></polygon>
                          </g>
                      </g>
                  </g>
              </svg>
            </h2>

          </div>
          <div class="col-6 pt-lg-3 col-md">

            <ul class="list-unstyled">
              <li class="mb-3">
                <a class="text-white-60" href="#!">Features</a>
              </li>
              <li class="mb-3">
                <a class="text-white-60" href="#!">Pricing</a>
              </li>
            </ul>

          </div>
          <div class="col-6 pt-lg-3 col-md">

            <ul class="list-unstyled">
              <li class="mb-3">
                <a class="text-white-60" href="#!">About</a>
              </li>
              <li class="mb-3">
                <a class="text-white-60" href="#!">Contact</a>
              </li>

            </ul>

          </div>
          <div class="col-6 pt-lg-3 col-md">
            <ul class="list-unstyled">

              <li class="mb-3">
                <a class="text-white-60" href="#!">Privacy</a>
              </li>
              <li>
                <a class="text-white-60" href="#!">Terms</a>
              </li>
            </ul>

          </div>

        <div class="row">
          <div class="col-12">

            <hr class="bg-white-10 my-7">

          </div>
        </div> -->
                <div class="row align-items-center">
                    <div class="col-12 col-md">


                        <ul class="list-inline list-unstyled text-gray-600 small mb-md-0">
                            <li class="list-inline-item">
                                © 2021 Xenome
                            </li>

                        </ul>

                    </div>
                    <div class="col-12 col-md-auto">

                        <ul class="list-inline list-unstyled text-gray-600 mb-0">

                            <li class="list-inline-item ms-1">
                                <a class="icon icon-sm text-reset" href="https://www.linkedin.com/company/xenome">


                                    <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path
                                                d="M18.75,0 C19.44,0 20,0.56 20,1.25 L20,18.75 C20,19.44 19.44,20 18.75,20 L1.25,20 C0.56,20 0,19.44 0,18.75 L0,1.25 C0,0.56 0.56,0 1.25,0 L18.75,0 Z M6.875,6.875 L4.375,6.875 L4.375,15.625 L6.875,15.625 L6.875,6.875 Z M10.625,6.875 L8.125,6.875 L8.125,15.625 L10.625,15.625 L10.625,10.625 L10.6301323,10.477375 C10.6813721,9.76116943 11.1150391,9.375 11.875,9.375 C12.66625,9.375 13.125,9.805 13.125,10.625 L13.125,10.625 L13.125,15.625 L15.625,15.625 L15.625,11.25 L15.6241597,11.0372741 C15.6046281,8.64438776 15.2283036,6.875 12.811875,6.875 C11.0675,6.875 10.7675,7.51125 10.625,8.125 L10.625,8.125 L10.625,6.875 Z M5.625,3.75 C4.93464406,3.75 4.375,4.30964406 4.375,5 C4.375,5.69035594 4.93464406,6.25 5.625,6.25 C6.31535594,6.25 6.875,5.69035594 6.875,5 C6.875,4.30964406 6.31535594,3.75 5.625,3.75 Z"
                                                id="linked-in" fill="currentColor" fill-rule="nonzero"></path>
                                        </g>
                                    </svg> </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </footer>


        <!-- Vendor JS -->
        <script src="{{ asset('landing/assets/js/vendor.bundle.js') }}"></script>

        <!-- Theme JS -->
        <script src="{{ asset('landing/assets/js/theme.bundle.js') }}"></script>

        <!-- <script src="https://unpkg.com/lookforward@0.1.1/js/lookforward.min.js"></script>

    <script>
    var lookforward = new LookForward('.js-lookforward');
    lookforward.on('open',function(e){
      console.log('open');
    });
    lookforward.on('close',function(e){
      console.log('close');
    });
    lookforward.on('closeAll',function(e){
      console.log('closeAll');
    });
  </script> -->



        <!--Price section-->
        <!-- <section class="section bg-grey" id="pricing">
        <div class="text-center">
            <h2 class="mb-4">Pricing Plans</h2>
            <p class="px-2">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
        <div class="container">
            <div class="row">
                @foreach($plans as $plan)
                    <div class="col-lg-4 col-md-12 col-12 mt-5">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h3 class="pricing-title">{{ $plan->title }}</h3>
                            </div>
                            <div class="pricing-body">
                                <div class="number">
                                    <span>{{ $loop->index + 1}}</span>
                                </div>
                                <div class="price-wrapper">
                                    <span class="currency">$</span>
                                    <span class="price">{{ $plan->price }}</span>
                                    <span class="period">/{{ ucfirst($plan->interval) }}</span>
                                </div>
                                <ul class="list">
                                    @foreach (explode("\n", str_replace("\r", "", $plan->description)) as $feature)
                                        <li class="active">{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="{{ route('register') }}" class="btn btn-primary">Select Plan</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> -->


        <!-- <script src="{{ asset('landing/js/jquery-3.6.0.slim.min.js') }}"></script>
    <script src="{{ asset('landing/js/popper.min.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('landing/js/custom.js') }}"></script> -->
</body>

</html>

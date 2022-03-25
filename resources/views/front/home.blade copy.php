<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Styles -->
    <!-- <link href="{{ asset('company/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('company/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('company/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('company/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('company/css/style.css') }}" rel="stylesheet"> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('company/css/google.css') }}">

    <link rel="shortcut icon" href="{{ asset('landing/assets/favicon/favicon.ico') }}" type="image/x-icon" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/libs.bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('landing/assets/css/theme.bundle.css') }}" />

    <!-- <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />
    <link rel="stylesheet" href="{{ asset('landing/assets/css/libs.bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('landing/assets/css/theme-sans-serif.bundle.css') }}" id="themeSansSerif" disabled />
    <script src="{{ asset('landing/assets/js/demo.bundle.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('landing/assets/css/theme.bundle.css') }}" /> -->

    @livewireStyles

</head>

<body class="bg-white">











    <!-- CASES -->
    <section class="pt-0 pb-3 bg-light position-relative">




        @include('company.shared.header-logged-out')




        <div class="video-background">

            <!-- <video playsinline="" autoplay="" loop="" muted="" class="fillWidth"
                poster="https://d1stfnrnklw432.cloudfront.net/website/Collections/Stills/businessandindustry.jpg">
                <source src="https://d1stfnrnklw432.cloudfront.net/website/Collections/Trailers/businessandindustry.mp4"
                    data-src="https://d1stfnrnklw432.cloudfront.net/website/Collections/Trailers/businessandindustry.mp4"
                    type="video/mp4">
                Your browser does not support the video tag. I suggest you upgrade your browser.
            </video> -->

        </div>

        <!-- Content -->
        <div class="container-lg pt-10 pt-md-11">
            <div class="row justify-content-center">
                <div class="col-md-12 col-xl-12 text-center">
                    <h6 class="text-uppercase text-warning mb-5">
                        Experience mapping for
                        <span class="d-none d-xl-inline"><span
                                data-typed='{"strings": ["Enterprise", "Startups", "Agencies"]}'></span></span><span
                            class="text-underline-warning d-xl-none">business</span>
                    </h6>
                    <h1 class="display-2 mb-4 fw-bolder">
                        Empower&nbsp;your audience through
                        multi-dimensional social input.
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-12 text-center">
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
        <div class="col-12 overflow-hidden pb-12 pt-11 mb-n11">
            <div class="container-fluid px-lg-9">
                <div class="row">
                    <div class="col-12 z-index-2">

                        <!-- Slider -->
                        <div class="flickity-viewport-visible mx-n4"
                            data-flickity='{"cellAlign": "left", "imagesLoaded": true, "pageDots": false, "prevNextButtons": false, "contain": true}'>
                            <div class="col-12 px-4" style="max-width: 378px;">

                                <!-- Card -->
                                <div class="card card-sm bg-white rounded lift">
                                    <img class="card-img rounded-top-start rounded-top-end"
                                        src="{{ asset('landing/assets/img/sydney.jpg') }}" alt="...">
                                    <div class="position-relative">
                                        <div class="shape shape-fluid-x shape-top text-white">
                                            <div class="shape-img pb-4">
                                                <svg viewBox="0 0 100 50" preserveAspectRatio="none">
                                                    <path d="M0 25h25L75 0h25v50H0z" fill="currentColor" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-black">
                                        <div class="d-flex align-items-center mb-3">
                                            <h3 class=" mb-1">Today's world</h3>
                                            <!--  -->
                                        </div>
                                        <small class=" small">Coming soon ...</small>
                                        <div class="text-primary pt-3">
                                            <i class="fe fe-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 px-4" style="max-width: 378px;">

                                <!-- Card -->
                                <div class="card card-sm bg-white rounded lift">
                                    <img class="card-img rounded-top-start rounded-top-end"
                                        src="{{ asset('landing/assets/img/girl.jpg') }}" alt="...">
                                    <div class="position-relative">
                                        <div class="shape shape-fluid-x shape-top text-white">
                                            <div class="shape-img pb-4">
                                                <svg viewBox="0 0 100 50" preserveAspectRatio="none">
                                                    <path d="M0 25h25L75 0h25v50H0z" fill="currentColor" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-black">
                                        <div class="d-flex align-items-center mb-3">
                                            <h3 class=" mb-1">Gender equality</h3>

                                        </div>
                                        <small class=" small">Coming soon ...</small>
                                        <div class="text-primary pt-3">
                                            <i class="fe fe-arrow-right"></i>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col-12 px-4" style="max-width: 378px;">

                                <!-- Card -->
                                <div class="card card-sm bg-white rounded lift">
                                    <img class="card-img rounded-top-start rounded-top-end"
                                        src="{{ asset('landing/assets/img/diversity.jpg') }}" alt="...">
                                    <div class="position-relative">
                                        <div class="shape shape-fluid-x shape-top text-white">
                                            <div class="shape-img pb-4">
                                                <svg viewBox="0 0 100 50" preserveAspectRatio="none">
                                                    <path d="M0 25h25L75 0h25v50H0z" fill="currentColor" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-black">
                                        <div class="d-flex align-items-center mb-3">
                                            <h3 class=" mb-1">Diversity</h3>

                                        </div>
                                        <small class=" small">Coming soon ...</small>
                                        <div class="text-primary pt-3">
                                            <i class="fe fe-arrow-right"></i>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col-12 px-4" style="max-width: 378px;">

                                <!-- Card -->
                                <div class="card card-sm bg-white rounded lift">
                                    <img class="card-img rounded-top-start rounded-top-end"
                                        src="{{ asset('landing/assets/img/vax.jpg') }}" alt="...">
                                    <div class="position-relative">
                                        <div class="shape shape-fluid-x shape-top text-white">
                                            <div class="shape-img pb-4">
                                                <svg viewBox="0 0 100 50" preserveAspectRatio="none">
                                                    <path d="M0 25h25L75 0h25v50H0z" fill="currentColor" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-black">
                                        <div class="d-flex align-items-center mb-3">
                                            <h3 class=" mb-1">Vaccine mandate</h3>

                                        </div>
                                        <small class=" small">Coming soon ...</small>
                                        <div class="text-primary pt-3">
                                            <i class="fe fe-arrow-right"></i>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col-12 px-4" style="max-width: 378px;">

                                <!-- Card -->
                                <div class="card card-sm bg-white rounded lift">
                                    <img class="card-img rounded-top-start rounded-top-end"
                                        src="{{ asset('landing/assets/img/city.jpg') }}" alt="...">
                                    <div class="position-relative">
                                        <div class="shape shape-fluid-x shape-top text-white">
                                            <div class="shape-img pb-4">
                                                <svg viewBox="0 0 100 50" preserveAspectRatio="none">
                                                    <path d="M0 25h25L75 0h25v50H0z" fill="currentColor" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-black">
                                        <div class="d-flex align-items-center mb-3">
                                            <h3 class=" mb-1">Back to work</h3>

                                        </div>
                                        <small class=" small">Coming soon ...</small>
                                        <div class="text-primary pt-3">
                                            <i class="fe fe-arrow-right"></i>
                                        </div>

                                    </div>
                                </div>

                            </div>



                            <div class="col-12 px-4" style="max-width: 378px;">

                                <!-- Card -->
                                <div class="card card-sm bg-white rounded lift">
                                    <img class="card-img rounded-top-start rounded-top-end"
                                        src="{{ asset('landing/assets/img/bar.jpg') }}" alt="...">
                                    <div class="position-relative">
                                        <div class="shape shape-fluid-x shape-top text-white">
                                            <div class="shape-img pb-4">
                                                <svg viewBox="0 0 100 50" preserveAspectRatio="none">
                                                    <path d="M0 25h25L75 0h25v50H0z" fill="currentColor" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-black">
                                        <div class="d-flex align-items-center mb-3">
                                            <h3 class=" mb-1">Covid passports</h3>

                                        </div>
                                        <small class=" small">Coming soon ...</small>
                                        <div class="text-primary pt-3">
                                            <i class="fe fe-arrow-right"></i>
                                        </div>

                                    </div>
                                </div>

                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>



    </section>












    <!-- SHAPE -->
    <div class="position-relative">
        <div class="shape shape-fluid-x shape-top text-white">
            <div class="shape-img pb-9 pb-md-15 svg-100">
                <svg viewBox="0 0 100 50" preserveAspectRatio="none">
                    <path d="M0 0h25l50 25h25v75H0z" fill="currentColor" />
                </svg>
            </div>
        </div>
        <!-- <div class="position-absolute top-start text-primary-dark mt-n12">
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
        </div> -->

        <!-- STEPS -->
        <section class="pt-9 pt-md-12 bg-white">
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10 text-center">

                        <!-- Preheading -->
                        <h6 class="text-uppercase text-primary mb-5">
                            What is Xenome?
                        </h6>

                        <!-- Heading -->
                        <h2 class="display-4 mb-9">
                            The ultimate platform for telling a story while understanding the <span
                                class="text-underline-warning">entire journey</span>.
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
                                    mechanisms creating an interactive and linear experience that maps out the entire
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
                <!-- <div class="position-absolute top-start text-warning ms-n12 mt-n17">
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
                </div> -->
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">

                        <!-- Heading -->
                        <h2 class="display-4 text-center text-white mb-4 mb-md-6">
                            A strong brand experience.
                        </h2>
                        <p class="fs-lg text-white-80 mb-10 text-center">Each&nbsp;touch point is paired with relative
                            content and clever feedback mechanisms in order to bind real opinions with key business
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
                                    User voice
                                </p>

                                <!-- Text -->
                                <p class="fs-sm text-white-60 mb-0">
                                    An opportunity for your audience to have their say (with or without words).
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
                                    Connected relationships empower human-centered business decisions.
                                </p>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- CTA -->
        <section class="py-12 py-md-16 bg-dark position-relative overflow-hidden">
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
                        <h2 class="display-1 text-white mb-6">Take your audiece on an experiential journey.</h2>

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


        <!-- Scripts -->
        <script src="{{ asset('company/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('company/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('company/plugins/toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('frontend/js/alpine.min.js') }}" defer></script>
        <script src="{{ asset('company/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
        <script src="{{ asset('company/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('company/plugins/clipboard/js/clipboard.min.js') }}"></script>

        @livewireScripts

        <script src="{{ asset('company/js/custom.js') }}"></script>
</body>

</html>

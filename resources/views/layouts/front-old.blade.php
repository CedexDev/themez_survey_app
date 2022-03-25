<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/rangeslider.css') }}">
    <link rel="shortcut icon" href="{{ asset('landing/assets/favicon/favicon.ico') }}" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('company/css/google.css') }}">
    <link rel="shortcut icon" href="{{ asset('landing/assets/favicon/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('frontend/css/front.css?00002') }}" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <title>@yield('title')</title>

    <meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="Xenome - Experience polls" />
<meta property="og:url" content="https://app.xenome.app/" />
<meta property="og:site_name" content="Xenome" />
<meta property="og:image" content="{{ asset('landing/assets/social.jpg') }}" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@CSS" />
</head>

<body>
    <main>
        @yield('content')
    </main>

    <script type="text/javascript" src="{{ asset('company/plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/alpine.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('frontend/js/intlTelInput.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/rangeslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/inview.js') }}"></script>
    <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>

    <script src="{{ asset('frontend/custom-soradius.js?00001') }}"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>


  <script type="text/javascript">









    var $carousel = $('.gallery').flickity({
        fade: true,
        prevNextButtons: false,
        pageDots: false
    });

   $carousel.on("change.flickity", function(event, index) {

    $(".gallery-cell.is-selected").find("video").get(0).currentTime = 0;
    $(".gallery-cell.is-selected").find("video").trigger("play");

    // gsap.fromTo(".xm-heading", {
    //     x: 600,
    //     autoAlpha: 0
    // }, {
    //     duration: 1,
    //     ease: "bounce.out",
    //     x: 0,
    //     stagger: 0.1,
    //     autoAlpha: 1,
    // });

    $(".gallery-cell:not(.is-selected)").find("video").trigger("pause");

    // gsap.fromTo(".xm-heading", {
    //     x: 600,
    //     autoAlpha: 0
    // }, {
    //     duration: 1,
    //     ease: "bounce.out",
    //     x: 0,
    //     stagger: 0.1,
    //     autoAlpha: 1,
    // });

});
// previous
$('.button--previous').on( 'click', function(e) {
    e.preventDefault();
    $carousel.flickity('previous');
    });
    // next
    $('.button--next').on( 'click', function(e) {
        e.preventDefault();
    $carousel.flickity('next');
    });



</script>



</body>

</html>

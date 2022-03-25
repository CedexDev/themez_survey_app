<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;800&display=swap" rel="stylesheet">


    <link href="{{ asset('company/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('company/css/google.css') }}">

    <link rel="shortcut icon" href="{{ asset('landing/assets/favicon/favicon.ico?123') }}" type="image/x-icon" />
    <link href="{{ asset('company/css/company.css?00057') }}" rel="stylesheet" type="text/css">


    <link rel="stylesheet" type="text/css" href="{{ asset('company/css/coloris.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('company/css/aos.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"
        integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="module" src="https://unpkg.com/vanilla-colorful?module"></script>

    <link rel="stylesheet" href="{{ asset('company/css/jquery-ui.css') }}">


    @livewireStyles
</head>

<body class=" @if (Route::is('company.surveys.edit', 'company.surveys.share.show', 'company.surveys.result.index', 'company.surveys.design.edit', 'company.surveys.questions.index'))
           bg-black
        @endif">

    <script src="https://js.stripe.com/v3/"></script>

    <div class="wrapper">

        @if (!Route::is('company.surveys.edit', 'company.surveys.share.show', 'company.surveys.result.index', 'company.surveys.design.edit', 'company.surveys.questions.index'))
        @include('company.shared.header-logged-out')

        @endif




        @include('flash::message')

        <div class="content-wrapper">
            @yield('content')
        </div>


    </div>




    @if (settings()->get('sharethis_status'))
        <script src="https://platform-api.sharethis.com/js/sharethis.js#property={{ settings()->get('sharethis_property') }}&product=inline-share-buttons"
                async="async"></script>
    @endif

    <!-- Scripts -->
    <script src="{{ asset('company/plugins/jquery/jquery.min.js') }}"></script>
    <!-- <script src="{{ asset('company/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
    <script src="{{ asset('company/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('frontend/js/alpine.min.js') }}" defer></script>
    <!-- <script src="{{ asset('company/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script> -->
    <!-- <script src="{{ asset('company/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script> -->
    <script src="{{ asset('company/plugins/clipboard/js/clipboard.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    @livewireScripts

    <script src="{{ asset('company/js/custom.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

    <script type="text/javascript" src="{{ asset('company/js/coloris.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('company/js/aos.js') }}"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });
    </script>
    <script type="text/javascript">
        Coloris({
            el: '.coloris',
            swatches: [
                '#264653',
                '#2a9d8f',
                '#e9c46a',
                '#f4a261',
                '#e76f51',
                '#d62828',
                '#023e8a',
                '#0077b6',
                '#0096c7',
                '#00b4d8',
                '#48cae4'
            ]
        });
    </script>





</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('company/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('company/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('company/css/style.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('auth/css/auth.css?917778999') }}" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script src="{{ asset('company/plugins/jquery/jquery.min.js') }}"></script>
    <!-- <script src="{{ asset('company/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('company/js/adminlte.min.js') }}"></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('company/css/google.css') }}"> -->

    <link rel="shortcut icon" href="{{ asset('landing/assets/favicon/favicon.ico') }}" type="image/x-icon" />
    <!-- <link rel="stylesheet" href="{{ asset('landing/assets/css/libs.bundle.css') }}" /> -->
    <!-- <link rel="stylesheet" href="{{ asset('landing/assets/css/theme-sans-serif.bundle.css') }}" id="themeSansSerif" disabled /> -->
    <script src="{{ asset('landing/assets/js/demo.bundle.js') }}"></script>
    <!-- <link rel="stylesheet" href="{{ asset('landing/assets/css/theme.bundle.css') }}" /> -->

</head>
<body @hasSection('body-class') class="@yield('body-class')" @endif>
    @yield('content')

    <!-- Vendor JS -->
    <script src="{{ asset('landing/assets/js/vendor.bundle.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('landing/assets/js/theme.bundle.js') }}"></script>
</body>


</html>

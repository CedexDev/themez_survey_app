<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | {{ $title ?? '' }}</title>

    <link rel="stylesheet" href="{{ asset('backend/css/google.css') }}">

    <!-- Styles -->
    <link href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/js/adminlte.min.js') }}" defer></script>
    <script src="{{ asset('backend/js/chart.min.js') }}"></script>
    <script src="{{ asset('backend/js/custom.js') }}" defer></script>

    <link rel="shortcut icon" href="{{ asset('landing/assets/favicon/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />
    <link rel="stylesheet" href="{{ asset('landing/assets/css/libs.bundle.css') }}" />
    <link rel="stylesheet" href="{{ asset('landing/assets/css/theme-sans-serif.bundle.css') }}" id="themeSansSerif" disabled />
    <script src="{{ asset('landing/assets/js/demo.bundle.js') }}"></script>
    <!-- <link rel="stylesheet" href="{{ asset('landing/assets/css/theme.bundle.css') }}" /> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/lookforward@0.1.1/css/lookforward.min.css">
<script src="https://unpkg.com/lookforward@0.1.1/js/lookforward.min.js"></script> -->
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.shared.sidebar')
        @include('admin.shared.header')
        @yield('content')
        @include('flash::message')
    </div>
</body>
</html>

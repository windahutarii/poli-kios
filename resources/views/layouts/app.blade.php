<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('dist/bootstrap5/css/bootstrap.min.css') }}">
    <link href="{{ asset('dist/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/animate/animate.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('dist/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" /> --}}

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
@yield('css')

<body>
    @include('layouts.partials.navbar')
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('dist/jquery/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('dist/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('dist/wow/wow.min.js') }}"></script>
    <script src="{{ asset('dist/easing/easing.min.js') }}"></script>
    <script src="{{ asset('dist/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('dist/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('dist/owlcarousel/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dist/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('dist/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('dist/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
 <!--   <link rel="stylesheet" href="{{ asset('dist/bootstrap5/css/bootstrap.min.css') }}"> -->
    <link href="{{ asset('dist/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">

</head>

<body>
    @include('layouts.partials.navbar')
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
   <!-- <script src="{{ asset('dist/jquery/jquery-3.6.3.min.js') }}"></script> -->
   <!--  <script src="{{ asset('dist/bootstrap5/js/bootstrap.bundle.min.js') }}"></script> -->
</body>

</html>

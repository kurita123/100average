<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        img.inrecipe{width:100%; display: block; margin: -20px auto; height: 300px; object-fit: cover;}
        .color {background-color: #ffd78c; margin: 20px auto;}
        .color2 {background-color: #ffd78c; margin: -25px 0px auto; text-align: center;}
        img.inrecip{width:100%; display: block; margin: 0 auto; height:auto; object-fit: cover;}
        #post-link {background-color:#00CC66;border-radius: 5px;padding-left: 1rem;padding-right: 1rem;}
    </style>
</head>
<style>
    .navbar {background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);}
    .background {
        background: radial-gradient(ellipse at center, rgba(96,171,248,1) 0%,rgba(155,201,247,1) 28%,rgba(155,201,247,1) 18%,rgb(255, 255, 255) 70%);
    }
</style>
<body>
@include('layouts.header')
<div class="container">
    <main class="py-4">
        @yield('content')
    </main>
</div>
@yield('footer')
</body>
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @if(View::hasSection('style'))
        <link href="/css/@yield('style').css" rel="stylesheet">
        @else
        <link href="/css/master.css" rel="stylesheet">
        @endif

        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery.imageloader.js"></script>
        <script src="/js/meta.js"></script>
    </head>
    <body>
        @if (Auth::check())
            @if(View::hasSection('header'))
                @yield('header')
            @else
                @include('layouts.header')
            @endif
        @endif
        
        @yield('view')

        @if(!View::hasSection('nofooter'))
            @include('layouts.footer')
        @endif
        <script src="/js/bootstrap.bundle.min.js"></script>
    </body>
</html>


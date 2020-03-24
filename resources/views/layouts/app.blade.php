<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <link rel="apple-touch-icon" sizes="57x57" href="/res/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/res/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/res/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/res/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/res/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/res/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/res/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/res/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/res/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/res/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/res/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/res/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/res/favicon-16x16.png">
        <link rel="manifest" href="/res/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

        <link rel="preload" href="/css/app.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link href="/css/app.min.css" rel="stylesheet"></noscript>
        
        @if(View::hasSection('style'))
        <link href="/css/@yield('style').css" rel="stylesheet">
        @else
        <link href="/css/master.css" rel="stylesheet">
        @endif

        <!-- <script src="/js/jquery.min.js"></script> -->
        <!-- <script src="/js/jquery.imageloader.js" defer></script> -->
        <!-- <script src="/js/meta.js" defer></script> -->
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
         
            <!-- <script src="/js/bootstrap.bundle.min.js"></script> -->
    </body>
</html>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield("seo")

            <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')

    </head>

    <body>

        {{-- <div id="app">
            @yield("content")
            <navbar></navbar>
            <router-view></router-view>
        </div> --}}
        <div id="app">
            @include("layouts.navbar")
            @yield("content")
        </div>

        @vite('resources/js/app.js')
    </body>
</html>
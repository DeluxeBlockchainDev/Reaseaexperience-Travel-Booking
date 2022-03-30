<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ReadSea Travel Booking</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
        @include('layouts.appcss')
    </head>
    <body>
        @include('layouts.appheader')
        @yield('content')
        @include('layouts.appfooter')
        @include('layouts.appjs')
    </body>
</html>

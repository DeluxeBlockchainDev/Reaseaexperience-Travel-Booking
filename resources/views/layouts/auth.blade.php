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
<body style="background-color: #2c323ab3 !important;">
<div class="auth justify-content-center">
    <div class="modal-dialog">
        @yield('content')
        <div class="copy-right text-white">
            <p class="copy__desc">
                @if($frontEndSetting['copyright'] != null)
                {!! $frontEndSetting['copyright'] !!}
                @else
                &copy; Copyright Nguyen 2021. All Right Reserved By <span class="la la-heart"></span> by <a href="https://redseaexperience.com">Red Sea Experience</a>
                @endif
            </p>
        </div>
    </div>
</div>
@include('layouts.appjs')
</body>
</html>

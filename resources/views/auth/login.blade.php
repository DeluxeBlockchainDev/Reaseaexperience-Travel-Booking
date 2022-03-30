@extends('layouts.app',['loading' => false])

@section('content')

    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-9">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Login</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li>Auth</li>
                                <li>Login</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
        </div><!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START CONTACT AREA
    ================================= -->
    <section class="contact-area padding-top-100px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Login</h3>
                            <p class="font-size-15 pt-2">Hello! Welcome to your account</p>
                        </div><!-- form-title-wrap -->
                        <div class="form-content ">
                            <div class="contact-form-action">
                                <form method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-box">
                                        <label class="label-text">{{ __('Username') }}</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Type your username" required autocomplete="username" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box">
                                        <label class="label-text">{{ __('Password') }}</label>
                                        <div class="form-group mb-2">
                                            <span class="la la-lock form-icon"></span>
                                            <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Type your password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="custom-checkbox mb-0">
                                                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="remember">{{ __('Remember Me') }}</label>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <p class="forgot-password">
                                                    <a href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                </p>
                                            @endif
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="btn-box pt-3 pb-4">
                                        <button type="submit" class="theme-btn w-100">{{ __('Login Account') }}</button>
                                    </div>
                                    <div class="action-box text-center">
                                        <p class="font-size-14">Or Login Using</p>
                                        <ul class="social-profile py-3">
                                            <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                            <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </form>
                                <P class="goto">
                                    Don't have an account yet ?
                                    <a href="{{route('register')}}" id="signUpBtn">
                                        Create an account </a>
                                </P>
                            </div><!-- end contact-form-action -->
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end contact-area -->
    <!-- ================================
        END CONTACT AREA
    ================================= -->
@endsection





{{--
@extends('layouts.auth')

@section('content')
    <div class="text-center mt-5 mb-3">
        <div class="logo-div">
            <a href="#"><img src="{{ asset('assets/images/logo/logo_w.png') }}" alt="logo"></a>
        </div>
    </div><!-- end logo -->
    <div class="card">
        <div class="card-header">
            <div>
                <h3 class="modal-title">{{ __('Login') }}</h3>
                <p class="font-size-18">Hello! Welcome to your account</p>
            </div>
        </div>

        <div class="card-body">
            <div class="contact-form-action">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="input-box">
                        <label class="label-text">{{ __('Username') }}</label>
                        <div class="form-group">
                            <span class="la la-user form-icon"></span>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Type your username" required autocomplete="username" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div><!-- end input-box -->
                    <div class="input-box">
                        <label class="label-text">{{ __('Password') }}</label>
                        <div class="form-group mb-2">
                            <span class="la la-lock form-icon"></span>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Type your password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="custom-checkbox mb-0">
                                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">{{ __('Remember Me') }}</label>
                            </div>
                            @if (Route::has('password.request'))
                                <p class="forgot-password">
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </p>
                            @endif
                        </div>
                    </div><!-- end input-box -->
                    <div class="btn-box pt-3 pb-4">
                        <button type="submit" class="theme-btn w-100">{{ __('Login Account') }}</button>
                    </div>
                    <div class="action-box text-center">
                        <p class="font-size-14">Or Login Using</p>
                        <ul class="social-profile py-3">
                            <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                        <P class="float-left goto">
                            Don't have an account yet ?
                            <a href="{{route('register')}}" id="signUpBtn">
                                Create an account </a>
                        </P>
                    </div>
                </form>
            </div><!-- end contact-form-action -->
        </div>
    </div>
@endsection
--}}

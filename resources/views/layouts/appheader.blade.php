<!-- start cssload-loader -->
@if ($loading == true)
<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
@endif
<!-- end cssload-loader -->
<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-top-bar padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-left">
                            <ul class="list-items">
                                <li><a href="#"><i class="la la-phone mr-1"></i>
                                        @if($frontEndSetting['phone'] != null)
                                        {!! $frontEndSetting['phone'] !!}
                                        @else
                                        (123)123 456 789
                                        @endif
                                    </a></li>
                                <li><a href="#"><i class="la la-envelope mr-1"></i>
                                        @if($frontEndSetting['email'] != null)
                                            {!! $frontEndSetting['email'] !!}
                                        @else
                                        nguyenbiz@gmail.com
                                        @endif
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-right d-flex align-items-center justify-content-end">
                            <div class="header-right-action">
{{--                                <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1" data-toggle="modal" data-target="#signupPopupForm">Sign Up</a>--}}
                            @if(!Auth::user())
                                <a href="{{route('register')}}" class="theme-btn theme-btn-small theme-btn-transparent mr-1">Sign Up</a>
                            @endif
                            @if(!Auth::user())
{{--                                <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#loginPopupForm">Login</a>--}}
                                <a href="{{route('login')}}" class="theme-btn theme-btn-small">Login</a>
                            @else
                                <a href="#" class="theme-btn theme-btn-small" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="GET"
                                      style="display: none;">
                                    @csrf
                                </form>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-wrapper padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11">
                    <div class="menu-wrapper">
                        <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                        <div class="logo logo-div">
                            <a href="/"><img src="{{ asset('assets/images/logo/logo_b.png') }}" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div><!-- end menu-toggler -->
                        </div><!-- end logo -->
                            <div class="main-menu-content">
                                <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/activities">Activities</a></li>
                                    <li><a href="/cruise">Cruise</a></li>
                                    <li><a href="/flight">Flight</a></li>
                                    <li><a href="/hotel">Hotel</a></li>
                                    <li><a href="/transfer">Transfers</a></li>
                                    <li><a href="/contact">Contact us</a></li>
                                    <li><a href="/about">About</a></li>
                                </ul>
                            </nav>
                            </div><!-- end main-menu-content -->
                        <!-- <div class="nav-btn">
                            <a href="become-local-expert.html" class="theme-btn">Become Local Expert</a>
                        </div> -->
                        <!-- end nav-btn -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->
<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Type your username">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Type your email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Type password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Repeat Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Type again password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="submit" class="theme-btn w-100">{{ __('Register Account') }}</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Sign up Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">{{ __('Login') }}</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
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
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

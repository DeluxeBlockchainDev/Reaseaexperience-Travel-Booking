@extends('layouts.app')
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
                                <h2 class="sec__title text-white">Blog Grid</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="/">Home</a></li>
                                <li>Blog</li>
                                <li>Blog Grid</li>
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
        START CARD AREA
    ================================= -->
    <section class="card-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/blog-img.jpg') }}" alt="blog-img">
                            <div class="post-format icon-element">
                                <i class="la la-photo"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">Travel</a>
                                    <a href="#" class="badge">lifestyle</a>
                                </div>
                                <h3 class="card-title line-height-26"><a href="/blog/details">When Traveling Avoid Expensive Hotels & Resorts</a></h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 January, 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">5 Mins read</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/small-team1.jpg') }}" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Leroy Bell</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/blog-img2.jpg') }}" alt="blog-img">
                            <div class="post-format icon-element">
                                <i class="la la-play"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">Video</a>
                                </div>
                                <h3 class="card-title line-height-26"><a href="/blog/details">My Best Travel Tips: The Ultimate Travel Guide</a></h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 February, 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">4 Mins read</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/small-team2.jpg') }}" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Phillip Hunt</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/blog-img3.jpg') }}" alt="blog-img">
                            <div class="post-format icon-element">
                                <i class="la la-music"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">audio</a>
                                </div>
                                <h3 class="card-title line-height-26"><a href="/blog/details">By all Means, Travel to Popular Sites & Don’t Rule Out Other Locations</a></h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 March, 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">3 Mins read</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/small-team3.jpg') }}" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Luke Jacobs</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/blog-img.jpg') }}" alt="blog-img">
                            <div class="post-format icon-element">
                                <i class="la la-photo"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">Travel</a>
                                    <a href="#" class="badge">lifestyle</a>
                                </div>
                                <h3 class="card-title line-height-26"><a href="/blog/details">When Traveling Avoid Expensive Hotels & Resorts</a></h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 January, 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">5 Mins read</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/small-team4.jpg') }}" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Alex Smith</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/blog-img2.jpg') }}" alt="blog-img">
                            <div class="post-format icon-element">
                                <i class="la la-play"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">Video</a>
                                </div>
                                <h3 class="card-title line-height-26"><a href="/blog/details">My Best Travel Tips: The Ultimate Travel Guide</a></h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 February, 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">4 Mins read</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/small-team5.jpg') }}" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Abraham Doe</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/blog-img3.jpg') }}" alt="blog-img">
                            <div class="post-format icon-element">
                                <i class="la la-music"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">audio</a>
                                </div>
                                <h3 class="card-title line-height-26"><a href="/blog/details">By all Means, Travel to Popular Sites & Don’t Rule Out Other Locations</a></h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 March, 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">3 Mins read</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/small-team6.jpg') }}" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">David Martin</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box mt-3 text-center">
                        <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                        <p class="font-size-13 pt-2">Showing 1 - 6 of 44 Posts</p>
                    </div><!-- end btn-box -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end card-area -->
    <!-- ================================
        END CARD AREA
    ================================= -->

    <div class="section-block"></div>

    <!-- ================================
        START INFO AREA
    ================================= -->
    <section class="info-area info-bg padding-top-90px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                            <i class="la la-phone"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Need Help? Contact us</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                            </p>
                        </div><!-- end info-content -->
                    </a><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                            <i class="la la-money"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Payments</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                            </p>
                        </div><!-- end info-content -->
                    </a><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                            <i class="la la-times"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Cancel Policy</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                            </p>
                        </div><!-- end info-content -->
                    </a><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end info-area -->
    <!-- ================================
        END INFO AREA
    ================================= -->

    <!-- ================================
        START CTA AREA
    ================================= -->
    <section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <h2 class="sec__title font-size-30 text-white">Subscribe to see Secret Deals</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="subscriber-box">
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="input-box">
                                    <label class="label-text text-white">Enter email address</label>
                                    <div class="form-group mb-0">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="email" name="email" placeholder="Email address">
                                        <button class="theme-btn theme-btn-small submit-btn" type="submit">Subscribe</button>
                                        <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Don't worry your information is safe with us.</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end cta-area -->
    <!-- ================================
        END CTA AREA
    ================================= -->
@endsection

@extends('layouts.app')
@section('content')

    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-3">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="search-result-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Cruise Search Result</h2>
                            </div>
                            <div class="search-fields-container margin-top-30px">
                                <div class="contact-form-action">
                                    <form action="#" class="row">
                                        <div class="col-lg-3 col-sm-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Where would like to go?</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text" placeholder="Destination">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 col-sm-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Check in - Check out</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text" name="daterange" readonly>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 col-sm-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Adults (18+)</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="0">Select Adults</option>
                                                            <option value="1">1 Adult</option>
                                                            <option value="2">2 Adults</option>
                                                            <option value="3">3 Adults</option>
                                                            <option value="4">4 Adults</option>
                                                            <option value="5">5 Adults</option>
                                                            <option value="6">6 Adults</option>
                                                            <option value="7">7 Adults</option>
                                                            <option value="8">8 Adults</option>
                                                            <option value="9">9 Adults</option>
                                                            <option value="10">10 Adults</option>
                                                            <option value="11">11 Adults</option>
                                                            <option value="12">12 Adults</option>
                                                            <option value="13">13 Adults</option>
                                                            <option value="14">14 Adults</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="input-box">
                                                <label class="label-text">Children (0-17)</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="0">Select Children</option>
                                                            <option value="1">1 Children</option>
                                                            <option value="2">2 Children</option>
                                                            <option value="3">3 Children</option>
                                                            <option value="4">4 Children</option>
                                                            <option value="5">5 Children</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                    </form>
                                </div>
                                <div class="advanced-wrap">
                                    <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                        More option <i class="la la-angle-down ml-1"></i>
                                    </a>
                                    <div class="pt-3 collapse" id="collapseTwo">
                                        <div class="slider-range-wrap ">
                                            <div class="price-slider-amount padding-bottom-20px">
                                                <label for="amount" class="filter__label">Price:</label>
                                                <input type="text" id="amount" class="amounts" readonly>
                                            </div><!-- end price-slider-amount -->
                                            <div id="slider-range"></div><!-- end slider-range -->
                                        </div><!-- end slider-range-wrap -->
                                        <div class="checkbox-wrap padding-top-30px">
                                            <h3 class="title font-size-15 pb-3">Cruise Categories</h3>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c1">
                                                <label for="c1">Any cruise line</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c2">
                                                <label for="c2">Carnival Cruise line</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c3">
                                                <label for="c3">MSC Cruise line</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c4">
                                                <label for="c4">Celebrity Cruise</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c5">
                                                <label for="c5">Royel Caribbean International</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-box pt-3">
                                    <a href="#" class="theme-btn">Search Cruise</a>
                                </div>
                            </div><!-- end main-search-input -->
                        </div><!-- end search-result-content -->
                    </div><!-- end col-lg-12 -->
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
                <div class="col-lg-12">
                    <div class="filter-wrap margin-bottom-30px">
                        <div class="filter-top d-flex align-items-center justify-content-between pb-4">
                            <div>
                                <h3 class="title font-size-24">Wilmington: 24 Cruises found</h3>
                                <p class="font-size-14 line-height-20 pt-1">Book with confidence: No cruise booking fees</p>
                            </div>
                            <div class="layout-view d-flex align-items-center">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Grid View" class="active"><i class="la la-th-large"></i></a>
                                <a href="/cruise/search-list" data-toggle="tooltip" data-placement="top" title="List View"><i class="la la-th-list"></i></a>
                            </div>
                        </div><!-- end filter-top -->
                        <div class="filter-bar d-flex align-items-center justify-content-between">
                            <div class="filter-bar-filter d-flex flex-wrap align-items-center">
                                <div class="filter-option">
                                    <h3 class="title font-size-16">Filter by:</h3>
                                </div>
                                <div class="filter-option">
                                    <div class="dropdown dropdown-contain">
                                        <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button" data-toggle="dropdown">
                                            Filter Price
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-wrap">
                                            <div class="dropdown-item">
                                                <div class="slider-range-wrap">
                                                    <div class="price-slider-amount padding-bottom-20px">
                                                        <label for="amount2" class="filter__label">Price:</label>
                                                        <input type="text" id="amount2" class="amounts">
                                                    </div><!-- end price-slider-amount -->
                                                    <div id="slider-range2"></div><!-- end slider-range -->
                                                </div><!-- end slider-range-wrap -->
                                                <div class="btn-box pt-4">
                                                    <button class="theme-btn theme-btn-small theme-btn-transparent" type="button">Apply</button>
                                                </div>
                                            </div><!-- end dropdown-item -->
                                        </div><!-- end dropdown-menu -->
                                    </div><!-- end dropdown -->
                                </div>
                                <div class="filter-option">
                                    <div class="dropdown dropdown-contain">
                                        <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button" data-toggle="dropdown">
                                            Review Score
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-wrap">
                                            <div class="dropdown-item">
                                                <div class="checkbox-wrap">
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="r1">
                                                        <label for="r1">
                                                            <span class="ratings d-flex align-items-center">
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <span class="color-text-3 font-size-13 ml-1">(55.590)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="r2">
                                                        <label for="r2">
                                                            <span class="ratings d-flex align-items-center">
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star-o"></i>
                                                                <span class="color-text-3 font-size-13 ml-1">(40.590)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="r3">
                                                        <label for="r3">
                                                            <span class="ratings d-flex align-items-center">
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star-o"></i>
                                                                <i class="la la-star-o"></i>
                                                                <span class="color-text-3 font-size-13 ml-1">(23.590)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="r4">
                                                        <label for="r4">
                                                            <span class="ratings d-flex align-items-center">
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star-o"></i>
                                                                <i class="la la-star-o"></i>
                                                                <i class="la la-star-o"></i>
                                                                <span class="color-text-3 font-size-13 ml-1">(12.590)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="r5">
                                                        <label for="r5">
                                                            <span class="ratings d-flex align-items-center">
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star-o"></i>
                                                                <i class="la la-star-o"></i>
                                                                <i class="la la-star-o"></i>
                                                                <i class="la la-star-o"></i>
                                                                <span class="color-text-3 font-size-13 ml-1">(590)</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div><!-- end dropdown-item -->
                                        </div><!-- end dropdown-menu -->
                                    </div><!-- end dropdown -->
                                </div>
                                <div class="filter-option">
                                    <div class="dropdown dropdown-contain">
                                        <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button" data-toggle="dropdown">
                                            Categories
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-wrap">
                                            <div class="dropdown-item">
                                                <div class="checkbox-wrap">
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb1">
                                                        <label for="catChb1">Any Cruise line</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb2">
                                                        <label for="catChb2">Carnival Cruise lines</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb3">
                                                        <label for="catChb3">Celebrity Cruise</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb4">
                                                        <label for="catChb4">Disney Cruise line</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb5">
                                                        <label for="catChb5">Holland America line</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb6">
                                                        <label for="catChb6">MSC Cruise</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb7">
                                                        <label for="catChb7">Norwegian Cruise line</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb8">
                                                        <label for="catChb8">Royal Caribbean</label>
                                                    </div>
                                                </div>
                                            </div><!-- end dropdown-item -->
                                        </div><!-- end dropdown-menu -->
                                    </div><!-- end dropdown -->
                                </div>
                            </div><!-- end filter-bar-filter -->
                            <div class="select-contain">
                                <select class="select-contain-select">
                                    <option value="1">Short by default</option>
                                    <option value="2">New Cruise</option>
                                    <option value="3">Popular Cruise</option>
                                    <option value="4">Price: low to high</option>
                                    <option value="5">Price: high to low</option>
                                    <option value="6">A to Z</option>
                                </select>
                            </div><!-- end select-contain -->
                        </div><!-- end filter-bar -->
                    </div><!-- end filter-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise--card">
                        <div class="card-img">
                            <a href="/cruise/details" class="d-block">
                                <img src="{{ asset('assets/images/cruise-img6.jpg') }}" alt="cruise-img">
                                <span class="badge">Bestseller</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/royal-caribbean.png') }}" alt="" class="cruise-logo">
                            <h3 class="card-title"><a href="/cruise/details">7 Nights Caribbean Southern Cruise</a></h3>
                            <p class="card-meta">Departing San Juan</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Very good</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$399.00</span>
                                </p>
                                <a href="/cruise/details" class="btn-text">Read details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise--card">
                        <div class="card-img">
                            <a href="/cruise/details" class="d-block">
                                <img src="{{ asset('assets/images/cruise-img7.jpg') }}" alt="cruise-img">
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/msc.png') }}" alt="" class="cruise-logo">
                            <h3 class="card-title"><a href="/cruise/details">5 Nights Bermuda Cruise</a></h3>
                            <p class="card-meta">Departing Baltimore</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Amazing</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$379.00</span>
                                </p>
                                <a href="/cruise/details" class="btn-text">Read details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise--card">
                        <div class="card-img">
                            <a href="/cruise/details" class="d-block">
                                <img src="{{ asset('assets/images/cruise-img8.jpg') }}" alt="cruise-img">
                                <span class="badge">Featured</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/stenaline.jpg') }}" alt="" class="cruise-logo">
                            <h3 class="card-title"><a href="/cruise/details">11 Night Caribbean Cruise</a></h3>
                            <p class="card-meta">Departing Miami</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Supperb</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$599.00</span>
                                </p>
                                <a href="/cruise/details" class="btn-text">Read details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise--card">
                        <div class="card-img">
                            <a href="/cruise/details" class="d-block">
                                <img src="{{ asset('assets/images/cruise-img9.jpg') }}" alt="cruise-img">
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/carnival.png') }}" alt="" class="cruise-logo">
                            <h3 class="card-title"><a href="/cruise/details">4 Nights Baja Mexico Cruise</a></h3>
                            <p class="card-meta">Departing Los Angeles</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$108.00</span>
                                </p>
                                <a href="/cruise/details" class="btn-text">Read details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise--card">
                        <div class="card-img">
                            <a href="/cruise/details" class="d-block">
                                <img src="{{ asset('assets/images/cruise-img7.jpg') }}" alt="cruise-img">
                                <span class="badge">Bestseller</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/msc.png') }}" alt="" class="cruise-logo">
                            <h3 class="card-title"><a href="/cruise/details">5 Nights Bermuda Cruise</a></h3>
                            <p class="card-meta">Departing Baltimore</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Amazing</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$379.00</span>
                                </p>
                                <a href="/cruise/details" class="btn-text">Read details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise--card">
                        <div class="card-img">
                            <a href="/cruise/details" class="d-block">
                                <img src="{{ asset('assets/images/cruise-img7.jpg') }}" alt="cruise-img">
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('assets/images/msc.png') }}" alt="" class="cruise-logo">
                            <h3 class="card-title"><a href="/cruise/details">7 - Night Eastern Caribbean Cruise</a></h3>
                            <p class="card-meta">Departing Baltimore</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Amazing</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$379.00</span>
                                </p>
                                <a href="/cruise/details" class="btn-text">Read details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box mt-3 text-center">
                        <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                        <p class="font-size-13 pt-2">Showing 1 - 6 of 24 Cruises</p>
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

@extends('layouts.app')
@section('content')

    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-3">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Cruise List</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="/">Home</a></li>
                                <li>Cruise</li>
                                <li>Cruise List</li>
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
                <div class="col-lg-12">
                    <div class="filter-wrap margin-bottom-30px">
                        <div class="filter-top d-flex align-items-center justify-content-between pb-4">
                            <div>
                                <h3 class="title font-size-24">24 Cruises found</h3>
                                <p class="font-size-14 line-height-20 pt-1">Book with confidence: No cruise booking fees</p>
                            </div>
                            <div class="layout-view d-flex align-items-center">
                                <a href="/cruise/search-result" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="la la-th-large"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="List View" class="active"><i class="la la-th-list"></i></a>
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
                                                        <label for="amount" class="filter__label">Price:</label>
                                                        <input type="text" id="amount" class="amounts">
                                                    </div><!-- end price-slider-amount -->
                                                    <div id="slider-range"></div><!-- end slider-range -->
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
                <div class="col-lg-4">
                    <div class="sidebar mt-0">
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Search Cruises</h3>
                            <div class="sidebar-widget-item">
                                <div class="contact-form-action">
                                    <form action="#">
                                        <div class="input-box">
                                            <label class="label-text">Going to</label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="">Select destination</option>
                                                        <optgroup label="Most Popular">
                                                            <option value="caribbean">Caribbean</option>
                                                            <option value="bahamas">Bahamas</option>
                                                            <option value="mexico">Mexico</option>
                                                            <option value="alaska">Alaska</option>
                                                            <option value="europe">Europe</option>
                                                            <option value="bermuda">Bermuda</option>
                                                            <option value="hawaii">Hawaii</option>
                                                            <option value="nepal">Nepal</option>
                                                            <option value="italy">Italy</option>
                                                            <option value="canada-new-england">Canada / New England</option>
                                                        </optgroup>
                                                        <optgroup label="Other Destinations">
                                                            <option value="arctic-antarctic">Arctic / Antarctic</option>
                                                            <option value="middle-east">Middle East</option>
                                                            <option value="africa">Africa</option>
                                                            <option value="panama-canal">Panama Canal</option>
                                                            <option value="asia">Asia</option>
                                                            <option value="pacific-coastal">Pacific Coastal</option>
                                                            <option value="australia-new-zealand">Australia / New Zealand</option>
                                                            <option value="central-america">Central America</option>
                                                            <option value="galapagos">Galapagos</option>
                                                            <option value="getaway-at-sea">Getaway at Sea</option>
                                                            <option value="transatlantic">Transatlantic</option>
                                                            <option value="world-cruise">World</option>
                                                            <option value="south-america">South America</option>
                                                            <option value="south-pacific">South Pacific</option>
                                                            <option value="transpacific">Transpacific</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text">Departs as early as</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text">Departs as late as</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text">Cruise Lines</label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="1">Popular Cruises</option>
                                                        <option value="2">Luxury Cruises</option>
                                                        <option value="3">River Cruises</option>
                                                    </select>
                                                </div><!-- end select-contain -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end sidebar-widget-item -->
                            <div class="btn-box pt-2">
                                <a href="/cruise/search-result" class="theme-btn">Search Now</a>
                            </div>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Filter by Price</h3>
                            <div class="sidebar-price-range">
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
                            </div>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Review Score</h3>
                            <div class="sidebar-category">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="r6">
                                    <label for="r6">Excellent</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="r7">
                                    <label for="r7">Very Good</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="r8">
                                    <label for="r8">Average</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="r9">
                                    <label for="r9">Poor</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="r10">
                                    <label for="r10">Terrible</label>
                                </div>
                            </div>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Filter by Rating</h3>
                            <div class="sidebar-review">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="s1">
                                    <label for="s1">
                                        <span class="ratings d-flex align-items-center">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <span class="font-size-13 ml-1">(55.590)</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="s2">
                                    <label for="s2">
                                        <span class="ratings d-flex align-items-center">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-o"></i>
                                            <span class="font-size-13 ml-1">(40.590)</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="s3">
                                    <label for="s3">
                                        <span class="ratings d-flex align-items-center">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <span class="font-size-13 ml-1">(23.590)</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="s4">
                                    <label for="s4">
                                        <span class="ratings d-flex align-items-center">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <span class="font-size-13 ml-1">(12.590)</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="custom-checkbox mb-0">
                                    <input type="checkbox" id="s5">
                                    <label for="s5">
                                        <span class="ratings d-flex align-items-center">
                                            <i class="la la-star"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <span class="font-size-13 ml-1">(590)</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape">Categories</h3>
                            <div class="sidebar-category">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat1">
                                    <label for="cat1">All <span class="font-size-13 ml-1">(24)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat2">
                                    <label for="cat2">Any Cruise line <span class="font-size-13 ml-1">(2)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat3">
                                    <label for="cat3">Carnival Cruise Lines <span class="font-size-13 ml-1">(2)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat4">
                                    <label for="cat4">Celebrity Cruises <span class="font-size-13 ml-1">(2)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat5">
                                    <label for="cat5">Disney Cruise Line <span class="font-size-13 ml-1">(3)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat6">
                                    <label for="cat6">Holland America Line <span class="font-size-13 ml-1">(1)</span></label>
                                </div>
                                <div class="collapse" id="categoryMenu">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="cat7">
                                        <label for="cat7">MSC Cruises <span class="font-size-13 ml-1">(1)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="cat8">
                                        <label for="cat8">Norwegian Cruise Line <span class="font-size-13 ml-1">(4)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="cat9">
                                        <label for="cat9">Princess Cruises <span class="font-size-13 ml-1">(6)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="cat10">
                                        <label for="cat10">Royal Caribbean International <span class="font-size-13 ml-1">(3)</span></label>
                                    </div>
                                </div><!-- end collapse -->
                                <a class="btn-text" data-toggle="collapse" href="#categoryMenu" role="button" aria-expanded="false" aria-controls="categoryMenu">
                                    <span class="show-more">Show More <i class="la la-angle-down"></i></span>
                                    <span class="show-less">Show Less <i class="la la-angle-up"></i></span>
                                </a>
                            </div>
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="card-item cruise--card card-item-list">
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
                    <div class="card-item cruise--card card-item-list">
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
                    <div class="card-item cruise--card card-item-list">
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
                    <div class="card-item cruise--card card-item-list">
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
                    <div class="card-item cruise--card card-item-list">
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
                    <div class="card-item cruise--card card-item-list">
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
                </div><!-- end col-lg-8 -->
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

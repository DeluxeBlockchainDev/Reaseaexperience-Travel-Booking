@extends('layouts.app')
@section('content')

    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-7">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="search-result-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Hotel Search Result</h2>
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
                                                <label class="label-text">Room Type</label>
                                                <div class="form-group">
                                                    <div class="select-contain select-contain-shadow w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="0">Select Type</option>
                                                            <option value="1">Single</option>
                                                            <option value="2">Double</option>
                                                            <option value="3">Triple</option>
                                                            <option value="4">Quad</option>
                                                            <option value="5">Queen</option>
                                                            <option value="6">King</option>
                                                            <option value="7">Twin</option>
                                                            <option value="8">Double-double</option>
                                                            <option value="9">Studio</option>
                                                            <option value="10">Suite</option>
                                                            <option value="11">Mini Suite</option>
                                                            <option value="12">President Suite</option>
                                                            <option value="13">President Suite</option>
                                                            <option value="14">Apartments</option>
                                                            <option value="15">Connecting rooms</option>
                                                            <option value="16">Murphy Room</option>
                                                            <option value="17">Accessible Room</option>
                                                            <option value="18">Cabana</option>
                                                            <option value="19">Adjoining rooms</option>
                                                            <option value="20">Adjacent rooms</option>
                                                            <option value="21">Villa</option>
                                                            <option value="22">Executive Floor</option>
                                                            <option value="23">Smoking room</option>
                                                            <option value="24">Non-Smoking Room</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="input-box">
                                                <label class="label-text">Guests and Rooms</label>
                                                <div class="form-group">
                                                    <div class="dropdown dropdown-contain">
                                                        <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <span>Guests <span class="qtyTotal guestTotal">0</span></span>
                                                            <span class="hiphens font-size-20 mx-1">-</span>
                                                            <span>Rooms <span class="roomTotal">0</span></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap">
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Rooms</label>
                                                                    <div class="roomBtn d-flex align-items-center">
                                                                        <div class="roomDec"><i class="la la-minus"></i></div>
                                                                        <input type="text" name="roomInput" value="0">
                                                                        <div class="roomInc"><i class="la la-plus"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Adults</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                        <input type="text" name="qtyInput" value="0">
                                                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Children</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                        <input type="text" name="qtyInput" value="0">
                                                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end dropdown -->
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                    </form>
                                </div><!-- end contact-form-action -->
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
                                            <h3 class="title font-size-15 pb-3">Hotel Facilities</h3>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c1">
                                                <label for="c1">Air Conditioning</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c2">
                                                <label for="c2">Airport Transport</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c3">
                                                <label for="c3">Fitness Center</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c4">
                                                <label for="c4">Flat Tv</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c5">
                                                <label for="c5">Heater</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c6">
                                                <label for="c6">Internet - wi-fi</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c7">
                                                <label for="c7">Parking</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c8">
                                                <label for="c8">Pool</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c9">
                                                <label for="c9">Restaurant</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c10">
                                                <label for="c10">Smoking Room</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c11">
                                                <label for="c11">Spa & Sauna</label>
                                            </div>
                                            <div class="custom-checkbox d-inline-block mr-4">
                                                <input type="checkbox" id="c12">
                                                <label for="c12">Washer & Dryer</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-box pt-3">
                                    <a href="#" class="theme-btn">Search Now</a>
                                </div>
                            </div><!-- end search-fields-container -->
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
                                <h3 class="title font-size-24">New York: 24 Hotels found</h3>
                                <p class="font-size-14"><span class="mr-1 pt-1">Book with confidence:</span>No hotel booking fees</p>
                            </div>
                            <div class="layout-view d-flex align-items-center">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Grid View" class="active"><i class="la la-th-large"></i></a>
                                <a href="/hotel/search-list" data-toggle="tooltip" data-placement="top" title="List View"><i class="la la-th-list"></i></a>
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
                                            Facilities
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-wrap">
                                            <div class="dropdown-item">
                                                <div class="checkbox-wrap">
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb1">
                                                        <label for="catChb1">Pet Allowed</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb2">
                                                        <label for="catChb2">Groups Allowed</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb3">
                                                        <label for="catChb3">Tour Guides</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb4">
                                                        <label for="catChb4">Access for disabled</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb5">
                                                        <label for="catChb5">Room Service</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb6">
                                                        <label for="catChb6">Parking</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb7">
                                                        <label for="catChb7">Restaurant</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb8">
                                                        <label for="catChb8">Pet friendly</label>
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
                                    <option value="2">Popular Hotel</option>
                                    <option value="3">Price: low to high</option>
                                    <option value="4">Price: high to low</option>
                                    <option value="5">A to Z</option>
                                </select>
                            </div><!-- end select-contain -->
                        </div><!-- end filter-bar -->
                    </div><!-- end filter-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <div class="card-item">
                        <div class="card-img">
                            <a href="/hotel/details" class="d-block">
                                <img src="{{ asset('assets/images/img1.jpg') }}" alt="hotel-img">
                            </a>
                            <span class="badge">Bestseller</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="/hotel/details">The Millennium Hilton New York</a></h3>
                            <p class="card-meta">124 E Huron St, New york</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$88.00</span>
                                    <span class="price__text">Per night</span>
                                </p>
                                <a href="/hotel/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item">
                        <div class="card-img">
                            <a href="/hotel/details" class="d-block">
                                <img src="{{ asset('assets/images/img2.jpg') }}" alt="hotel-img">
                            </a>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="/hotel/details">Best Western Grant Park Hotel</a></h3>
                            <p class="card-meta">124 E Huron St, Chicago</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$58.00</span>
                                    <span class="price__text">Per night</span>
                                </p>
                                <a href="/hotel/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item">
                        <div class="card-img">
                            <a href="/hotel/details" class="d-block">
                                <img src="{{ asset('assets/images/img3.jpg') }}" alt="hotel-img">
                            </a>
                            <span class="badge">Featured</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="/hotel/details">Hyatt Regency Maui Resort & Spa</a></h3>
                            <p class="card-meta">200 Nohea Kai Dr, Lahaina, HI</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$88.00</span>
                                    <span class="price__text">Per night</span>
                                </p>
                                <a href="/hotel/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item">
                        <div class="card-img">
                            <a href="/hotel/details" class="d-block">
                                <img src="{{ asset('assets/images/img4.jpg') }}" alt="hotel-img">
                            </a>
                            <span class="badge">Popular</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="/hotel/details">Four Seasons Resort Maui at Wailea</a></h3>
                            <p class="card-meta">3900 Wailea Alanui Drive, Kihei, HI</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$88.00</span>
                                    <span class="price__text">Per night</span>
                                </p>
                                <a href="/hotel/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item">
                        <div class="card-img">
                            <a href="/hotel/details" class="d-block">
                                <img src="{{ asset('assets/images/img5.jpg') }}" alt="hotel-img">
                            </a>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="/hotel/details">Ibis Styles London Heathrow</a></h3>
                            <p class="card-meta"> 272 Bath Road, Harlington, England</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$88.00</span>
                                    <span class="price__text">Per night</span>
                                </p>
                                <a href="/hotel/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item">
                        <div class="card-img">
                            <a href="/hotel/details" class="d-block">
                                <img src="{{ asset('assets/images/img6.jpg') }}" alt="hotel-img">
                            </a>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="/hotel/details">Hotel Europe Saint Severin Paris</a></h3>
                            <p class="card-meta">38-40 Rue Saint Séverin, Paris, Paris</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$88.00</span>
                                    <span class="price__text">Per night</span>
                                </p>
                                <a href="/hotel/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box mt-3 text-center">
                        <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                        <p class="font-size-13 pt-2">Showing 1 - 6 of 24 Hotels</p>
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

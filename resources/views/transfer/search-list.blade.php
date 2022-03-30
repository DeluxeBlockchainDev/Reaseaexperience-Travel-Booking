@extends('layouts.app')
@section('content')

    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-8">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Transfer List</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="/">Home</a></li>
                                <li>Transfer</li>
                                <li>Transfer List</li>
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
                                <h3 class="title font-size-24">44 Cars found</h3>
                                <p class="font-size-14"><span class="mr-1 pt-1">Book with confidence:</span>No transfer booking fees</p>
                            </div>
                            <div class="layout-view d-flex align-items-center">
                                <a href="/transfer/search-result" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="la la-th-large"></i></a>
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
                                                        <label for="catChb1">Convertibles</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb2">
                                                        <label for="catChb2">Coupes</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb3">
                                                        <label for="catChb3">Minivans</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb4">
                                                        <label for="catChb4">Sedan</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb5">
                                                        <label for="catChb5">SUV'S</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb6">
                                                        <label for="catChb6">Trucks</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb7">
                                                        <label for="catChb7">Wagons</label>
                                                    </div>
                                                    <div class="custom-checkbox">
                                                        <input type="checkbox" id="catChb8">
                                                        <label for="catChb8">Compact Elite</label>
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
                                    <option value="2">New Transfer</option>
                                    <option value="3">Popular Transfer</option>
                                    <option value="4">Popular Cruise</option>
                                    <option value="5">Price: low to high</option>
                                    <option value="6">Price: high to low</option>
                                    <option value="7">A to Z</option>
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
                            <h3 class="title stroke-shape">Search Transfers</h3>
                            <div class="sidebar-widget-item">
                                <div class="contact-form-action">
                                    <form action="#">
                                        <div class="input-box">
                                            <label class="label-text">Pick-up From</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input class="form-control" type="text" placeholder="Destination, city, or region">
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text">Drop-off to</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input class="form-control" type="text" placeholder="Destination, city, or region">
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text">Pick-up Date</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text">Time</label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="1200AM">12:00AM</option>
                                                        <option value="1230AM">12:30AM</option>
                                                        <option value="0100AM">1:00AM</option>
                                                        <option value="0130AM">1:30AM</option>
                                                        <option value="0200AM">2:00AM</option>
                                                        <option value="0230AM">2:30AM</option>
                                                        <option value="0300AM">3:00AM</option>
                                                        <option value="0330AM">3:30AM</option>
                                                        <option value="0400AM">4:00AM</option>
                                                        <option value="0430AM">4:30AM</option>
                                                        <option value="0500AM">5:00AM</option>
                                                        <option value="0530AM">5:30AM</option>
                                                        <option value="0600AM">6:00AM</option>
                                                        <option value="0630AM">6:30AM</option>
                                                        <option value="0700AM">7:00AM</option>
                                                        <option value="0730AM">7:30AM</option>
                                                        <option value="0800AM">8:00AM</option>
                                                        <option value="0830AM">8:30AM</option>
                                                        <option value="0900AM" selected>9:00AM</option>
                                                        <option value="0930AM">9:30AM</option>
                                                        <option value="1000AM">10:00AM</option>
                                                        <option value="1030AM">10:30AM</option>
                                                        <option value="1100AM">11:00AM</option>
                                                        <option value="1130AM">11:30AM</option>
                                                        <option value="1200PM">12:00PM</option>
                                                        <option value="1230PM">12:30PM</option>
                                                        <option value="0100PM">1:00PM</option>
                                                        <option value="0130PM">1:30PM</option>
                                                        <option value="0200PM">2:00PM</option>
                                                        <option value="0230PM">2:30PM</option>
                                                        <option value="0300PM">3:00PM</option>
                                                        <option value="0330PM">3:30PM</option>
                                                        <option value="0400PM">4:00PM</option>
                                                        <option value="0430PM">4:30PM</option>
                                                        <option value="0500PM">5:00PM</option>
                                                        <option value="0530PM">5:30PM</option>
                                                        <option value="0600PM">6:00PM</option>
                                                        <option value="0630PM">6:30PM</option>
                                                        <option value="0700PM">7:00PM</option>
                                                        <option value="0730PM">7:30PM</option>
                                                        <option value="0800PM">8:00PM</option>
                                                        <option value="0830PM">8:30PM</option>
                                                        <option value="0900PM">9:00PM</option>
                                                        <option value="0930PM">9:30PM</option>
                                                        <option value="1000PM">10:00PM</option>
                                                        <option value="1030PM">10:30PM</option>
                                                        <option value="1100PM">11:00PM</option>
                                                        <option value="1130PM">11:30PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text">Drop-off Date</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end sidebar-widget-item -->
                            <div class="main-search-input-item">
                                <div class="contact-form-action">
                                    <form action="#">
                                        <div class="input-box">
                                            <label class="label-text">Time</label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="1200AM">12:00AM</option>
                                                        <option value="1230AM">12:30AM</option>
                                                        <option value="0100AM">1:00AM</option>
                                                        <option value="0130AM">1:30AM</option>
                                                        <option value="0200AM">2:00AM</option>
                                                        <option value="0230AM">2:30AM</option>
                                                        <option value="0300AM">3:00AM</option>
                                                        <option value="0330AM">3:30AM</option>
                                                        <option value="0400AM">4:00AM</option>
                                                        <option value="0430AM">4:30AM</option>
                                                        <option value="0500AM">5:00AM</option>
                                                        <option value="0530AM">5:30AM</option>
                                                        <option value="0600AM">6:00AM</option>
                                                        <option value="0630AM">6:30AM</option>
                                                        <option value="0700AM">7:00AM</option>
                                                        <option value="0730AM">7:30AM</option>
                                                        <option value="0800AM">8:00AM</option>
                                                        <option value="0830AM">8:30AM</option>
                                                        <option value="0900AM" selected>9:00AM</option>
                                                        <option value="0930AM">9:30AM</option>
                                                        <option value="1000AM">10:00AM</option>
                                                        <option value="1030AM">10:30AM</option>
                                                        <option value="1100AM">11:00AM</option>
                                                        <option value="1130AM">11:30AM</option>
                                                        <option value="1200PM">12:00PM</option>
                                                        <option value="1230PM">12:30PM</option>
                                                        <option value="0100PM">1:00PM</option>
                                                        <option value="0130PM">1:30PM</option>
                                                        <option value="0200PM">2:00PM</option>
                                                        <option value="0230PM">2:30PM</option>
                                                        <option value="0300PM">3:00PM</option>
                                                        <option value="0330PM">3:30PM</option>
                                                        <option value="0400PM">4:00PM</option>
                                                        <option value="0430PM">4:30PM</option>
                                                        <option value="0500PM">5:00PM</option>
                                                        <option value="0530PM">5:30PM</option>
                                                        <option value="0600PM">6:00PM</option>
                                                        <option value="0630PM">6:30PM</option>
                                                        <option value="0700PM">7:00PM</option>
                                                        <option value="0730PM">7:30PM</option>
                                                        <option value="0800PM">8:00PM</option>
                                                        <option value="0830PM">8:30PM</option>
                                                        <option value="0900PM">9:00PM</option>
                                                        <option value="0930PM">9:30PM</option>
                                                        <option value="1000PM">10:00PM</option>
                                                        <option value="1030PM">10:30PM</option>
                                                        <option value="1100PM">11:00PM</option>
                                                        <option value="1130PM">11:30PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-box pt-2">
                                            <a href="/transfer/search-result" class="theme-btn">Search Now</a>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end main-search-input-item -->
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
                                            <span class="color-text-3 font-size-13 ml-1">(55.590)</span>
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
                                            <span class="color-text-3 font-size-13 ml-1">(40.590)</span>
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
                                            <span class="color-text-3 font-size-13 ml-1">(23.590)</span>
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
                                            <span class="color-text-3 font-size-13 ml-1">(12.590)</span>
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
                                            <span class="color-text-3 font-size-13 ml-1">(590)</span>
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
                                    <label for="cat1">Convertibles <span class="font-size-13 ml-1">(1809)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat2">
                                    <label for="cat2">Coupes <span class="font-size-13 ml-1">(809)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat3">
                                    <label for="cat3">Hatchbacks <span class="font-size-13 ml-1">(504)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat4">
                                    <label for="cat4">Minivans <span class="font-size-13 ml-1">(401)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat5">
                                    <label for="cat5">Sedan <span class="font-size-13 ml-1">(277)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat6">
                                    <label for="cat6">SUVs <span class="font-size-13 ml-1">(87)</span></label>
                                </div>
                                <div class="collapse" id="categoryMenu">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="cat7">
                                        <label for="cat7">Trucks <span class="font-size-13 ml-1">(100)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="cat8">
                                        <label for="cat8">Wagons <span class="font-size-13 ml-1">(58)</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="cat9">
                                        <label for="cat9">Compact Elite <span class="font-size-13 ml-1">(33)</span></label>
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
                    <div class="card-item car-card card-item-list">
                        <div class="card-img padding-top-50px">
                            <a href="/transfer/details" class="d-block">
                                <img src="{{ asset('assets/images/car-img.png') }}" alt="car-img" class="h-100">
                            </a>
                            <span class="badge">Bestseller</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Save for later">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">Compact SUV</p>
                            <h3 class="card-title"><a href="/transfer/details">Toyota Corolla or Similar</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$23.00</span>
                                    <span class="price__text">Per day</span>
                                </p>
                                <a href="/transfer/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item car-card card-item-list">
                        <div class="card-img padding-top-50px">
                            <a href="/transfer/details" class="d-block">
                                <img src="{{ asset('assets/images/car-img2.png') }}" alt="car-img" class="h-100">
                            </a>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Save for later">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">Standard</p>
                            <h3 class="card-title"><a href="/transfer/details">Volkswagen Jetta 2 Doors or Similar</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$33.00</span>
                                    <span class="price__text">Per day</span>
                                </p>
                                <a href="/transfer/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item car-card card-item-list">
                        <div class="card-img padding-top-50px">
                            <a href="/transfer/details" class="d-block">
                                <img src="{{ asset('assets/images/car-img3.png') }}" alt="car-img" class="h-100">
                            </a>
                            <span class="badge">featured</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Save for later">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">Compact Elite</p>
                            <h3 class="card-title"><a href="/transfer/details">Toyota Yaris or Similar</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$23.00</span>
                                    <span class="price__text">Per day</span>
                                </p>
                                <a href="/transfer/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item car-card card-item-list">
                        <div class="card-img padding-top-50px">
                            <a href="/transfer/details" class="d-block">
                                <img src="{{ asset('assets/images/car-img4.png') }}" alt="car-img" class="h-100">
                            </a>
                            <span class="badge">Bestseller</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Save for later">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">Fullsize Van</p>
                            <h3 class="card-title"><a href="/transfer/details">Seat Alhambra or Similar</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>6</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>2</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$45.00</span>
                                    <span class="price__text">Per day</span>
                                </p>
                                <a href="/transfer/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item car-card card-item-list">
                        <div class="card-img padding-top-50px">
                            <a href="/transfer/details" class="d-block">
                                <img src="{{ asset('assets/images/car-img5.png') }}" alt="car-img" class="h-100">
                            </a>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Save for later">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">Luxury</p>
                            <h3 class="card-title"><a href="/transfer/details">Mercedes E Class or Similar</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>5</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>3</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$58.00</span>
                                    <span class="price__text">Per day</span>
                                </p>
                                <a href="/transfer/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item car-card card-item-list">
                        <div class="card-img padding-top-50px">
                            <a href="/transfer/details" class="d-block">
                                <img src="{{ asset('assets/images/car-img6.png') }}" alt="car-img" class="h-100">
                            </a>
                            <span class="badge">featured</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Save for later">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">Mini</p>
                            <h3 class="card-title"><a href="/transfer/details">Fiat Fiesta 2 Doors or Similar</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$23.00</span>
                                    <span class="price__text">Per day</span>
                                </p>
                                <a href="/transfer/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item car-card card-item-list">
                        <div class="card-img padding-top-50px">
                            <a href="/transfer/details" class="d-block">
                                <img src="{{ asset('assets/images/car-img6.png') }}" alt="car-img" class="h-100">
                            </a>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Save for later">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">Mini</p>
                            <h3 class="card-title"><a href="/transfer/details">Fiat Fiesta 2 Doors or Similar</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$23.00</span>
                                    <span class="price__text">Per day</span>
                                </p>
                                <a href="/transfer/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->

                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box mt-3 text-center">
                        <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                        <p class="font-size-13 pt-2">Showing 1 - 6 of 44 Cars</p>
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

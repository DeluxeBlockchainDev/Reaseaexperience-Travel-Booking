@extends('layouts.app')
@section('content')

    <!-- Start main -->
    <!-- ================================
        START HERO-WRAPPER AREA
    ================================= -->
    <section class="hero-wrapper hero-wrapper5">
        <div class="hero-box pb-0 hero-bg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content pb-4 text-center">
                            <div class="section-heading">
                                <h2 class="sec__title line-height-70">World's Biggest Online <br> Cruise Hire Service Center</h2>
                                <p class="sec__desc pt-3">Find great cruise deals for your next trip</p>
                            </div>
                        </div><!-- end hero-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="search-fields-container search-fields-container-shape">
                            <div class="search-fields-container-inner">
                                <div class="contact-form-action">
                                    <form action="#" class="row">
                                        <div class="col-lg-3 col-sm-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Where would like to go?</label>
                                                <div class="form-group">
                                                    <div class="select-contain select-contain-shadow w-auto">
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
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 col-sm-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Departs as early as</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 col-sm-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Departs as late as</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="input-box">
                                                <label class="label-text">Travelers in the cabin</label>
                                                <div class="form-group">
                                                    <div class="dropdown dropdown-contain gty-container">
                                                        <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <span class="adult" data-text="Adult" data-text-multi="Adults">0 Adult</span>
                                                            -
                                                            <span class="children" data-text="Child" data-text-multi="Children">0 Children</span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap">
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Adults</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                        <input type="text" name="adult_number" value="0">
                                                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Children</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                        <input type="text" name="child_number" value="0">
                                                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Infants</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                        <input type="text" name="infants_number" value="0" class="qty-input">
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
                                </div>
                                <div class="btn-box pt-2">
                                    <a href="/cruise/search-result" class="theme-btn">Search Now</a>
                                </div>
                            </div>
                        </div><!-- end search-fields-container -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
            <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
        </div>
    </section><!-- end hero-wrapper -->
    <!-- ================================
        END HERO-WRAPPER AREA
    ================================= -->

    <!-- ================================
        START INFO AREA
    ================================= -->
    <section class="info-area info-bg padding-top-140px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Why Book with us?</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                            <i class="la la-tags"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Best Price Guarantee</h4>
                            <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                            <i class="la la-money"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">No Booking Fees</h4>
                            <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                            <i class="la la-check"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Flexible Payment Plans</h4>
                            <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end info-area -->
    <!-- ================================
        END INFO AREA
    ================================= -->

    <div class="section-block"></div>

    <!-- ================================
        START DESTINATION AREA
    ================================= -->
    <section class="destination-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Today's Top Deals</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-6 responsive-column">
                    <div class="card-item cruise-card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/cruise-img.jpg') }}" alt="cruise-img">
                            <div class="card-body">
                                <h3 class="card-title mb-0"><a href="/cruise/details">Caribbean Cruises <span>from $209</span></a></h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h3 class="card-subtitle">Get Ready for Some Fun in the Sun</h3>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 responsive-column">
                    <div class="card-item cruise-card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/cruise-img2.jpg') }}" alt="cruise-img">
                            <div class="card-body">
                                <h3 class="card-title mb-0"><a href="/cruise/details">Europe Cruises <span>from $299</span></a></h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h3 class="card-subtitle">Explore the Culture and Beauty of Europe</h3>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise-card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/cruise-img3.jpg') }}" alt="cruise-img">
                            <div class="card-body">
                                <h3 class="card-title mb-0"><a href="/cruise/details">Family Cruises <span>from $209</span></a></h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h3 class="card-subtitle">Family Fun Time</h3>
                            <p class="card-meta">The Perfect Vacation for Families</p>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise-card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/cruise-img4.jpg') }}" alt="cruise-img">
                            <div class="card-body">
                                <h3 class="card-title mb-0"><a href="/cruise/details">Honeymoon Cruises <span>from $399</span></a></h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h3 class="card-subtitle">Honeymoon Cruises</h3>
                            <p class="card-meta">Romantic Getaways Just For Two</p>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item cruise-card">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/cruise-img5.jpg') }}" alt="cruise-img">
                            <div class="card-body">
                                <h3 class="card-title mb-0"><a href="/cruise/details">Last Minute Cruise <span>from $199</span></a></h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h3 class="card-subtitle">Last-Minute Cruise Sale</h3>
                            <p class="card-meta">Sail Soon – Get Deep Discounts</p>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end destination-area -->
    <!-- ================================
        END DESTINATION AREA
    ================================= -->

    <!-- ================================
        START RECOM AREA
    ================================= -->
    <section class="recom-area position-relative section-bg padding-top-100px padding-bottom-140px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Recommended For You</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="car-wrap">
                        <div class="car-carousel carousel-action">
                            <div class="card-item cruise--card mb-0">
                                <div class="card-img">
                                    <a href="/cruise/details" class="d-block">
                                        <img src="{{ asset('assets/images/cruise-img6.jpg') }}" alt="cruise-img">
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
                            <div class="card-item cruise--card mb-0">
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
                            <div class="card-item cruise--card mb-0">
                                <div class="card-img">
                                    <a href="/cruise/details" class="d-block">
                                        <img src="{{ asset('assets/images/cruise-img8.jpg') }}" alt="cruise-img">
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
                            <div class="card-item cruise--card mb-0">
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
                        </div><!-- end car-carousel -->
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M-103.55,167.27 C150.39,-132.72 134.59,237.33 517.77,30.09 L500.00,150.00 L0.00,150.00 Z"></path></svg>
    </section><!-- end recom-area -->
    <!-- ================================
        END RECOM AREA
    ================================= -->

    <!-- ================================
        START CRUISE LINE AREA
    ================================= -->
    <section class="cruise-line-area padding-top-80px padding-bottom-90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cruise-heading">
                        <h2 class="title">Popular Cruise Lines</h2>
                    </div>
                    <ul class="list-items list--items cruise-line-list">
                        <li><a href="#">Carnival Cruise Line</a></li>
                        <li><a href="#">Celebrity Cruises</a></li>
                        <li><a href="#">Costa Cruises</a></li>
                        <li><a href="#">Disney Cruise Line</a></li>
                        <li><a href="#">Holland America Line</a></li>
                        <li><a href="#">MSC Cruises</a></li>
                        <li><a href="#">Norwegian Cruise Line</a></li>
                        <li><a href="#">Princess Cruises</a></li>
                        <li><a href="#">Royal Caribbean</a></li>
                    </ul>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="cruise-heading">
                        <h2 class="title">Luxury Cruise Lines</h2>
                    </div>
                    <ul class="list-items list--items cruise-line-list mb-0">
                        <li><a href="#">AmaWaterways</a></li>
                        <li><a href="#">Azamara Cruises</a></li>
                        <li><a href="#">Crystal Cruises</a></li>
                        <li><a href="#">Crystal River Cruises</a></li>
                        <li><a href="#">Cunard Line</a></li>
                        <li><a href="#">Oceania Cruises</a></li>
                        <li><a href="#">Regent Seven Seas</a></li>
                        <li><a href="#">Silversea Cruises</a></li>
                        <li><a href="#">Viking Ocean Cruises</a></li>
                        <li><a href="#">Viking River Cruises</a></li>
                    </ul>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end cruise-line-area -->
    <!-- ================================
        END CRUISE LINE AREA
    ================================= -->

    <!-- ================================
        START CTA AREA
    ================================= -->
    <section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <h2 class="sec__title font-size-30 text-white">Sign Up For EXCLUSIVE Offer Via Email</h2>
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
    <!-- end main -->
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Rethouse - Real Estate HTML Template">
        <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency">
        <meta name="author" content="mardianto - retenvi.com">
        <title>Rileys Real E</title>

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="">
        <meta property="og:description" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:image" content="">
        <meta name="twitter:url" content="">
        <meta name="twitter:card" content="">

        <link rel="manifest" href="site.webmanifest">
        <!-- favicon.ico in the root directory -->
        <link rel="apple-touch-icon" href="icon.png">
        <meta name="theme-color" content="#3454d1">
        <link href="{{ asset('site/assets/css/styles.css') }}" rel="stylesheet">
    </head>

    <body data-aos-easing="ease-in-out-sine" data-aos-duration="1000" data-aos-delay="0">
        <!-- NAVBAR TOP -->
        <div class="topbar d-none d-sm-block">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="topbar-left">

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="list-unstyled topbar-right">
                            <ul class="topbar-link">

                                <li><a href="#" title="">Contact Us</a></li>
                                <li><a href="{{ route('admin.login') }}" title="">Login / Register</a></li>
                            </ul>
                            <ul class="topbar-sosmed">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END NAVBAR TOP -->
      {{-- navbar was here --}}
      @include('body.header')
        <!-- CAROUSEL -->
        <div class="slider-container">
            <div class="container-slider-image-full  ">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators d-none">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item banner-max-height active">
                            <img class="d-block w-100" src="{{ asset('site/assets/images/bg15.jpg') }}" alt="First slide">
                            <div class="carousel-caption banner__slide-overlay d-flex h-100">
                                <div class="carousel__content">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                                <div class="slider__content-title ">
                                                    <h2 data-animation="fadeInDown" data-delay=".2s" data-duration="1000ms" class="text-white animated fadeInDown">
                                                        The #1 place for commercial
                                                        property</h2>
                                                    <p data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms" class="text-white animated fadeInUp">

                                                        This is real estate website template based on Bootstrap 4 framework.
                                                    </p>
                                                    <a href="#" data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms" class="btn btn-primary text-uppercase animated fadeInUp">
                                                        contact us
                                                        <i class="fa fa-angle-right arrow-btn "></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item banner-max-height">
                            <img class="d-block w-100" src="{{ asset('site/assets/images/bg.jpg') }}" alt="Second slide">
                            <div class="carousel-caption banner__slide-overlay d-flex h-100">
                                <div class="carousel__content">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                                <div class="slider__content-title ">
                                                    <h2 data-animation="animated fadeInDown" class="text-white animated fadeInDown">
                                                        The #1 place for commercial
                                                        property</h2>
                                                    <p data-animation="animated fadeInUp" class="text-white animated fadeInUp ">

                                                        This is real estate website template based on Bootstrap 4 framework.
                                                    </p>
                                                    <a href="#" class="btn btn-primary text-uppercase animated fadeInUp">
                                                        contact us
                                                        <i class="fa fa-angle-right arrow-btn "></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item banner-max-height">
                            <img class="d-block w-100" src="{{ asset('site/assets/images/bg19.jpg') }}" alt="Third slide">
                            <div class="carousel-caption banner__slide-overlay d-flex h-100">
                                <div class="carousel__content">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                                <div class="slider__content-title ">
                                                    <h2 data-animation="animated fadeInDown" class="text-white animated fadeInDown">
                                                        The #1 place for commercial
                                                        property</h2>
                                                    <p data-animation="animated fadeInUp" class="text-white animated fadeInUp ">

                                                        This is real estate website template based on Bootstrap 4 framework.
                                                    </p>
                                                    <a href="#" class="btn btn-primary text-uppercase animated fadeInUp">
                                                        contact us
                                                        <i class="fa fa-angle-right arrow-btn "></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span> -->
                    <span class="carousel-control-nav-prev">
                        <i class="fa fa-2x fa-angle-left"></i>
                    </span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span> -->
                    <span class="carousel-control-nav-next">
                        <i class="fa fa-2x fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>

        <div class="clearfix"></div>
        <!-- END CAROUSEL -->
        <div class="clearfix"></div>
        <div class="search__area bg-light">
            <div class="container">
                <div class="search__area-inner">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="wide select_option" style="display: none;">
                                    <option data-display="Property Status">Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>

                                </select><div class="nice-select wide select_option" tabindex="0"><span class="current">Property Status</span><ul class="list"><li data-value="Property Status" data-display="Property Status" class="option selected">Property Status</li><li data-value="For Sale" class="option">For Sale</li><li data-value="For Rent" class="option">For Rent</li></ul></div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="wide select_option" style="display: none;">
                                    <option data-display="Property Type">Property Type</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                    <option>Luxury</option>
                                </select><div class="nice-select wide select_option" tabindex="0"><span class="current">Property Type</span><ul class="list"><li data-value="Property Type" data-display="Property Type" class="option selected">Property Type</li><li data-value="Residential" class="option">Residential</li><li data-value="Commercial" class="option">Commercial</li><li data-value="Land" class="option">Land</li><li data-value="Luxury" class="option">Luxury</li></ul></div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="wide select_option" style="display: none;">
                                    <option data-display="Area From">Area From </option>
                                    <option>1500</option>
                                    <option>1200</option>
                                    <option>900</option>
                                    <option>600</option>
                                    <option>300</option>
                                    <option>100</option>
                                </select><div class="nice-select wide select_option" tabindex="0"><span class="current">Area From</span><ul class="list"><li data-value="Area From" data-display="Area From" class="option selected">Area From </li><li data-value="1500" class="option">1500</li><li data-value="1200" class="option">1200</li><li data-value="900" class="option">900</li><li data-value="600" class="option">600</li><li data-value="300" class="option">300</li><li data-value="100" class="option">100</li></ul></div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="wide select_option" style="display: none;">
                                    <option data-display="Locations">Locations</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                    <option>Canada</option>
                                    <option>Delaware</option>
                                    <option>Indonesia</option>
                                    <option>Malaysia</option>
                                    <option>Japan</option>
                                </select><div class="nice-select wide select_option" tabindex="0"><span class="current">Locations</span><ul class="list"><li data-value="Locations" data-display="Locations" class="option selected">Locations</li><li data-value="United Kingdom" class="option">United Kingdom</li><li data-value="American Samoa" class="option">American Samoa</li><li data-value="Belgium" class="option">Belgium</li><li data-value="Canada" class="option">Canada</li><li data-value="Delaware" class="option">Delaware</li><li data-value="Indonesia" class="option">Indonesia</li><li data-value="Malaysia" class="option">Malaysia</li><li data-value="Japan" class="option">Japan</li></ul></div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="wide select_option" style="display: none;">
                                    <option data-display="Bedrooms">Bedrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                </select><div class="nice-select wide select_option" tabindex="0"><span class="current">Bedrooms</span><ul class="list"><li data-value="Bedrooms" data-display="Bedrooms" class="option selected">Bedrooms</li><li data-value="1" class="option">1</li><li data-value="2" class="option">2</li><li data-value="3" class="option">3</li><li data-value="4" class="option">4</li><li data-value="5" class="option">5</li><li data-value="6" class="option">6</li><li data-value="7" class="option">7</li><li data-value="8" class="option">8</li><li data-value="9" class="option">9</li></ul></div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <select class="wide select_option" style="display: none;">
                                    <option data-display="Bathrooms">Bathrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>


                                </select><div class="nice-select wide select_option" tabindex="0"><span class="current">Bathrooms</span><ul class="list"><li data-value="Bathrooms" data-display="Bathrooms" class="option selected">Bathrooms</li><li data-value="1" class="option">1</li><li data-value="2" class="option">2</li><li data-value="3" class="option">3</li><li data-value="4" class="option">4</li></ul></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3">
                            <div class="form-group">
                                <div class="filter__price">
                                    <span class="irs irs--big js-irs-0 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="visibility: hidden;">$0</span><span class="irs-max" style="visibility: hidden;">$10 000</span><span class="irs-from" style="visibility: visible; left: 6.75163%;">$1 300</span><span class="irs-to" style="visibility: visible; left: 64.8105%;">$7 600</span><span class="irs-single" style="visibility: hidden; left: 24.9314%;">$1 300 — $7 600</span></span><span class="irs-grid" style="width: 92.1569%; left: 3.82157%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -2.15686%;">0</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -5.58824%;">2 500</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -5.58824%;">5 000</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -5.58824%;">7 500</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -6.56863%;">10 000</span></span><span class="irs-bar" style="left: 15.902%; width: 58.0588%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-handle from" style="left: 11.9804%;"><i></i><i></i><i></i></span><span class="irs-handle to type_last" style="left: 70.0392%;"><i></i><i></i><i></i></span></span><input class="price-range irs-hidden-input" type="text" name="my_range" value="" tabindex="-1" readonly="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3">
                            <div class="form-group">
                                <button class="btn btn-primary text-uppercase btn-block"> search <i class="fa fa-search ml-1"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 mx-auto">
                        <div class="title__head">
                            <h2 class="text-center text-capitalize">
                                featured properties
                            </h2>
                            <p class="text-center text-capitalize">handpicked exclusive properties by our team.</p>

                        </div>
                    </div>
                </div>

                <!--=========================================
    =            Section Gallery two            =
    ==========================================-->
                <div class="card__image-filter">
                    <div class="filterizr-control">
                        <ul class="list-inline filterizr-filter">
                            <li class="list-inline-item filtr-active btn-filter" data-filter="all">All Property</li>
                            <li class="list-inline-item btn-filter" data-filter="1">Apartment</li>
                            <li class="list-inline-item btn-filter" data-filter="2">House</li>
                            <li class="list-inline-item btn-filter" data-filter="4">Office</li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="filtr-container" style="padding: 0px; position: relative; width: 100%; display: flex; flex-wrap: wrap; height: 1070px;">

                            <div class="col-md-6 col-lg-4 filtr-item" data-category="2, 4" data-title="" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 380px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">

                                <div class="card__image card__box-v1">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize">featured</div>
                                        <img src="images/gallery16.jpg" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                                        <h6 class="text-capitalize">
                                            vila in coral gables
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            west flaminggo road, las vegas
                                        </p>
                                        <ul class="list-inline card__content">
                                            <li class="list-inline-item">

                                                <span>
                                                    baths <br>
                                                    <i class="fa fa-bath"></i> 2
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    beds <br>
                                                    <i class="fa fa-bed"></i> 3
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    rooms <br>
                                                    <i class="fa fa-inbox"></i> 3
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    area <br>
                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="images/logo.jpg" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item ">
                                                <a href="#">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">

                                                <h6>$350.000</h6>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 filtr-item" data-category="4" data-title="" style="opacity: 1; transform: scale(1) translate3d(380px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 380px; transition: all 0.5s ease-out 1ms, width 1ms ease 0s;">
                                <div class="card__image card__box-v1">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize">featured</div>
                                        <img src="images/gallery17.jpg" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                                        <h6 class="text-capitalize">
                                            Ample Apartment At Last Floor
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            west flaminggo road, las vegas
                                        </p>
                                        <ul class="list-inline card__content">
                                            <li class="list-inline-item">

                                                <span>
                                                    baths <br>
                                                    <i class="fa fa-bath"></i> 2
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    beds <br>
                                                    <i class="fa fa-bed"></i> 3
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    rooms <br>
                                                    <i class="fa fa-inbox"></i> 3
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    area <br>
                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="images/logo.jpg" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">

                                                <h6>$350.000</h6>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-title="" style="opacity: 1; transform: scale(1) translate3d(760px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 380px; transition: all 0.5s ease-out 2ms, width 1ms ease 0s;">
                                <div class="card__image card__box-v1">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize">featured</div>
                                        <img src="images/gallery2.jpg" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                                        <h6 class="text-capitalize">
                                            Contemporary Apartment
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            west flaminggo road, las vegas
                                        </p>
                                        <ul class="list-inline card__content">
                                            <li class="list-inline-item">
                                                <span>
                                                    baths <br>
                                                    <i class="fa fa-bath"></i> 2
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    beds <br>
                                                    <i class="fa fa-bed"></i> 3
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    rooms <br>
                                                    <i class="fa fa-inbox"></i> 3
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    area <br>
                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="images/logo.jpg" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">

                                                <h6>$350.000</h6>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 col-lg-4 filtr-item" data-category="2, 4" data-title="" style="opacity: 1; transform: scale(1) translate3d(0px, 535px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 380px; transition: all 0.5s ease-out 3ms, width 1ms ease 0s;">
                                <div class="card__image card__box-v1">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize">featured</div>
                                        <img src="images/gallery9.jpg" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                                        <h6 class="text-capitalize">
                                            Family Home For Sale
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            west flaminggo road, las vegas
                                        </p>
                                        <ul class="list-inline card__content">
                                            <li class="list-inline-item">

                                                <span>
                                                    baths <br>
                                                    <i class="fa fa-bath"></i> 2
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    beds <br>
                                                    <i class="fa fa-bed"></i> 3
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    rooms <br>
                                                    <i class="fa fa-inbox"></i> 3
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    area <br>
                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="images/logo.jpg" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">

                                                <h6>$350.000</h6>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-title="" style="opacity: 1; transform: scale(1) translate3d(380px, 535px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 380px; transition: all 0.5s ease-out 4ms, width 1ms ease 0s;">
                                <div class="card__image card__box-v1">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize">featured</div>
                                        <img src="images/gallery10.jpg" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                                        <h6 class="text-capitalize">
                                            Luxury Villa With Pool
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            west flaminggo road, las vegas
                                        </p>
                                        <ul class="list-inline card__content">
                                            <li class="list-inline-item">

                                                <span>
                                                    baths <br>
                                                    <i class="fa fa-bath"></i> 2
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    beds <br>
                                                    <i class="fa fa-bed"></i> 3
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    rooms <br>
                                                    <i class="fa fa-inbox"></i> 3
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    area <br>
                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="images/logo.jpg" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">

                                                <h6>$350.000</h6>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-title="" style="opacity: 1; transform: scale(1) translate3d(760px, 535px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 380px; transition: all 0.5s ease-out 5ms, width 1ms ease 0s;">
                                <div class="card__image card__box-v1">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize">featured</div>
                                        <img src="images/gallery11.jpg" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                                        <h6 class="text-capitalize">
                                            184 Lexington Avenue
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            west flaminggo road, las vegas
                                        </p>
                                        <ul class="list-inline card__content">
                                            <li class="list-inline-item">

                                                <span>
                                                    baths <br>
                                                    <i class="fa fa-bath"></i> 2
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    beds <br>
                                                    <i class="fa fa-bed"></i> 3
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    rooms <br>
                                                    <i class="fa fa-inbox"></i> 3
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    area <br>
                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="images/logo.jpg" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">

                                                <h6>$350.000</h6>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>


        <!-- MOST POPULAR PLACES -->
        <section class="wrap__heading bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 mx-auto">
                        <div class="title__head">
                            <h2 class="text-center text-capitalize">
                                most popular places
                            </h2>
                            <p class="text-center text-capitalize">find properties in these cities.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-xl-5 col-padd">
                        <!-- CARD IMAGE -->

                        <a href="#">
                            <div class="card__image-hover-style-v3">
                                <div class="card__image-hover-style-v3-thumb h-475">
                                    <img src="images/city3.jpg" alt="" class="img-fluid w-100">
                                </div>
                                <div class="overlay">
                                    <div class="desc">
                                        <h6 class="text-capitalize">tokyo</h6>
                                        <p class="text-capitalize">70 properties</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-7 col-xl-7">
                        <div class="row">
                            <div class="col-md-6 col-padd">
                                <!-- CARD IMAGE -->
                                <a href="#">
                                    <div class="card__image-hover-style-v3">
                                        <div class="card__image-hover-style-v3-thumb h-230">
                                            <img src="images/city4.jpg" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="overlay">
                                            <div class="desc">
                                                <h6 class="text-capitalize">australia</h6>
                                                <p class="text-capitalize">70 properties</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-padd">
                                <!-- CARD IMAGE -->
                                <a href="#">
                                    <div class="card__image-hover-style-v3">
                                        <div class="card__image-hover-style-v3-thumb h-230">
                                            <img src="images/city5.jpg" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="overlay">
                                            <div class="desc">
                                                <h6 class="text-capitalize">rome</h6>
                                                <p class="text-capitalize">70 properties</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-padd">
                                <!-- CARD IMAGE -->
                                <a href="#">
                                    <div class="card__image-hover-style-v3">
                                        <div class="card__image-hover-style-v3-thumb h-230">
                                            <img src="images/city6.jpg" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="overlay">
                                            <div class="desc">
                                                <h6 class="text-capitalize">new york</h6>
                                                <p class="text-capitalize">70 properties</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-padd">
                                <!-- CARD IMAGE -->
                                <a href="#">
                                    <div class="card__image-hover-style-v3">
                                        <div class="card__image-hover-style-v3-thumb h-230">
                                            <img src="images/city7.jpg" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="overlay">
                                            <div class="desc">
                                                <h6 class="text-capitalize">london</h6>
                                                <p class="text-capitalize">70 properties</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END MOST POPULAR PLACES -->



        <!-- VIDEO -->
        <section class="home__video bg-theme-v6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 mx-auto">
                        <div class="home__video-area text-center">
                            <a href="#" class="play-video ">
                                <i class="icon fa fa-play text-white"></i>
                            </a>
                            <h2 class="text-white">The #1 Place For Commercial Property</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END VIDEO -->


        <!-- BRAND PARTNER -->
        <section class="projects__partner bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="title__head">
                            <h2 class="text-center text-capitalize">our partners</h2>
                            <p class="text-center text-capitalize">Brand Partners Successful Projects Trusted Many Clients
                                Real Estate</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="projects__partner-logo">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <img src="images/partner-logo6.png" alt="" class="img-fluid">
                                </li>
                                <li class="list-inline-item">
                                    <img src="images/partner-logo7.png" alt="" class="img-fluid">
                                </li>
                                <li class="list-inline-item">
                                    <img src="images/partner-logo8.png" alt="" class="img-fluid">
                                </li>
                                <li class="list-inline-item">
                                    <img src="images/partner-logo1.png" alt="" class="img-fluid">
                                </li>
                                <li class="list-inline-item">
                                    <img src="images/partner-logo5.png" alt="" class="img-fluid">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BRAND PARTNER -->

        <!-- TESTIMONIAL -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 mx-auto">
                        <div class="title__head">
                            <h2 class="text-center text-capitalize">
                                what people says
                            </h2>
                            <p class="text-center text-capitalize">people says about walls property.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="testimonial owl-carousel owl-theme owl-loaded owl-drag">
                    <!-- TESTIMONIAL -->

                    <!-- END TESTIMONIAL -->
                    <!-- TESTIMONIAL -->

                    <!-- END TESTIMONIAL -->
                    <!-- TESTIMONIAL -->

                    <!-- END TESTIMONIAL -->
                    <!-- TESTIMONIAL -->

                    <!-- END TESTIMONIAL -->
                    <!-- TESTIMONIAL -->

                    <!-- END TESTIMONIAL -->

                <div class="owl-stage-outer owl-height" style="height: 175px;"><div class="owl-stage" style="transform: translate3d(-3330px, 0px, 0px); transition: all 1.2s ease 0s; width: 6105px;"><div class="owl-item cloned" style="width: 535px; margin-right: 20px;"><div class="item testimonial__block">
                        <div class="testimonial__block-card bg-reviews">
                            <p>
                                Thank you walls property help me, choice dream home We were impressed with the build
                                quality, Plus they are competitively priced.
                            </p>
                        </div>
                        <div class="testimonial__block-users">
                            <div class="testimonial__block-users-img">
                                <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial__block-users-name">
                                jhon doe <br>
                                <span>owner, digital agency</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 535px; margin-right: 20px;"><div class="item testimonial__block">
                        <div class="testimonial__block-card bg-reviews">
                            <p>
                                Thank you walls property help me, choice dream home We were impressed with the build
                                quality, Plus they are competitively priced.
                            </p>
                        </div>
                        <div class="testimonial__block-users">
                            <div class="testimonial__block-users-img">
                                <img src="images/client.png" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial__block-users-name">
                                jhon doe <br>
                                <span>owner, digital agency</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 535px; margin-right: 20px;"><div class="item testimonial__block">
                        <div class="testimonial__block-card bg-reviews">
                            <p>
                                Thank you walls property help me, choice dream home We were impressed with the build
                                quality, Plus they are competitively priced.
                            </p>
                        </div>
                        <div class="testimonial__block-users">
                            <div class="testimonial__block-users-img">
                                <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial__block-users-name">
                                jhon doe <br>
                                <span>owner, digital agency</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item" style="width: 535px; margin-right: 20px;"><div class="item testimonial__block">
                        <div class="testimonial__block-card bg-reviews">
                            <p>
                                Thank you walls property help me, choice dream home We were impressed with the build
                                quality, Plus they are competitively priced.
                            </p>
                        </div>
                        <div class="testimonial__block-users">
                            <div class="testimonial__block-users-img">
                                <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial__block-users-name">
                                jhon doe <br>
                                <span>owner, digital agency</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item" style="width: 535px; margin-right: 20px;"><div class="item testimonial__block">
                        <div class="testimonial__block-card bg-reviews">
                            <p>
                                Thank you walls property help me, choice dream home We were impressed with the build
                                quality, Plus they are competitively priced.
                            </p>
                        </div>
                        <div class="testimonial__block-users">
                            <div class="testimonial__block-users-img">
                                <img src="images/client.png" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial__block-users-name">
                                jhon doe <br>
                                <span>owner, digital agency</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item" style="width: 535px; margin-right: 20px;"><div class="item testimonial__block">
                        <div class="testimonial__block-card bg-reviews">
                            <p>
                                Thank you walls property help me, choice dream home We were impressed with the build
                                quality, Plus they are competitively priced.
                            </p>
                        </div>
                        <div class="testimonial__block-users">
                            <div class="testimonial__block-users-img">
                                <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial__block-users-name">
                                jhon doe <br>
                                <span>owner, digital agency</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 535px; margin-right: 20px;"><div class="item testimonial__block">
                        <div class="testimonial__block-card bg-reviews">
                            <p>
                                Thank you walls property help me, choice dream home We were impressed with the build
                                quality, Plus they are competitively priced.
                            </p>
                        </div>
                        <div class="testimonial__block-users">
                            <div class="testimonial__block-users-img">
                                <img src="images/client.png" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial__block-users-name">
                                jhon doe <br>
                                <span>owner, digital agency</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 535px; margin-right: 20px;"><div class="item testimonial__block">
                        <div class="testimonial__block-card bg-reviews">
                            <p>
                                Thank you walls property help me, choice dream home We were impressed with the build
                                quality, Plus they are competitively priced.
                            </p>
                        </div>
                        <div class="testimonial__block-users">
                            <div class="testimonial__block-users-img">
                                <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial__block-users-name">
                                jhon doe <br>
                                <span>owner, digital agency</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 535px; margin-right: 20px;"><div class="item testimonial__block">
                        <div class="testimonial__block-card bg-reviews">
                            <p>
                                Thank you walls property help me, choice dream home We were impressed with the build
                                quality, Plus they are competitively priced.
                            </p>
                        </div>
                        <div class="testimonial__block-users">
                            <div class="testimonial__block-users-img">
                                <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial__block-users-name">
                                jhon doe <br>
                                <span>owner, digital agency</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 535px; margin-right: 20px;"><div class="item testimonial__block">
                        <div class="testimonial__block-card bg-reviews">
                            <p>
                                Thank you walls property help me, choice dream home We were impressed with the build
                                quality, Plus they are competitively priced.
                            </p>
                        </div>
                        <div class="testimonial__block-users">
                            <div class="testimonial__block-users-img">
                                <img src="images/client.png" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial__block-users-name">
                                jhon doe <br>
                                <span>owner, digital agency</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 535px; margin-right: 20px;"><div class="item testimonial__block">
                        <div class="testimonial__block-card bg-reviews">
                            <p>
                                Thank you walls property help me, choice dream home We were impressed with the build
                                quality, Plus they are competitively priced.
                            </p>
                        </div>
                        <div class="testimonial__block-users">
                            <div class="testimonial__block-users-img">
                                <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial__block-users-name">
                                jhon doe <br>
                                <span>owner, digital agency</span>
                            </div>
                        </div>
                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
            </div>
        </section>
        <!-- END TESTIMONIAL -->



        <!-- BLOG -->
        <section class="blog__home bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 mx-auto">
                        <div class="title__head">
                            <h2 class="text-center text-capitalize">
                                lastest news post
                            </h2>
                            <p class="text-center text-capitalize">Find Of The Most Popular Real Estate Company All Around
                                Indonesia.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!-- BLOG  -->
                        <div class="card__image">
                            <div class="card__image-header h-250">
                                <img src="images/gallery17.jpg" alt="" class="img-fluid w100 img-transition">
                                <div class="info"> event</div>
                            </div>
                            <div class="card__image-body">
                                <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019 </span> -->
                                <h6 class="text-capitalize">
                                    <a href="/blog-single">Best Interior Oppertunity </a>
                                </h6>
                                <p class=" mb-0">
                                    Real estate festival is one of the famous feval for explain to you how all this mistaolt
                                    deand praising pain
                                    wasnad I will give complete

                                </p>


                            </div>
                            <div class="card__image-footer">
                                <figure>
                                    <img src="images/profile-blog.jpg" alt="" class="img-fluid rounded-circle">
                                </figure>
                                <ul class="list-inline my-auto">
                                    <li class="list-inline-item ">
                                        <a href="#">
                                            tom wilson
                                        </a>

                                    </li>

                                </ul>
                                <ul class="list-inline my-auto ml-auto">
                                    <li class="list-inline-item ">
                                        <a class="btn btn-sm btn-primary " href="/blog-single"><small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- END BLOG -->
                    </div>
                    <div class="col-md-4">
                        <!-- BLOG  -->
                        <div class="card__image">
                            <div class="card__image-header h-250">
                                <img src="images/gallery23.png" alt="" class="img-fluid w100 img-transition">
                                <div class="info"> event</div>
                            </div>
                            <div class="card__image-body">
                                <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019 </span> -->
                                <h6 class="text-capitalize">
                                    <a href="#">Tips &amp; Trick buy real estate </a>
                                </h6>
                                <p class=" mb-0">
                                    Real estate festival is one of the famous feval for explain to you how all this mistaolt
                                    deand praising pain
                                    wasnad I will give complete

                                </p>


                            </div>
                            <div class="card__image-footer">
                                <figure>
                                    <img src="images/profile-blog.jpg" alt="" class="img-fluid rounded-circle">
                                </figure>
                                <ul class="list-inline my-auto">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            tom wilson
                                        </a>

                                    </li>

                                </ul>
                                <ul class="list-inline my-auto ml-auto">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-sm btn-primary "><small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- END BLOG -->
                    </div>
                    <div class="col-md-4">
                        <!-- BLOG  -->
                        <div class="card__image">
                            <div class="card__image-header h-250">
                                <img src="images/gallery4.jpg" alt="" class="img-fluid w100 img-transition">
                                <div class="info"> event</div>
                            </div>
                            <div class="card__image-body">
                                <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019 </span> -->
                                <h6 class="text-capitalize">
                                    <a href="#">Our Must Popular Deluxe House </a>
                                </h6>
                                <p class=" mb-0">
                                    Real estate festival is one of the famous feval for explain to you how all this mistaolt
                                    deand praising pain
                                    wasnad I will give complete

                                </p>


                            </div>
                            <div class="card__image-footer">
                                <figure>
                                    <img src="images/profile-blog.jpg" alt="" class="img-fluid rounded-circle">
                                </figure>
                                <ul class="list-inline  my-auto">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            tom wilson
                                        </a>

                                    </li>

                                </ul>
                                <ul class="list-inline  my-auto ml-auto">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-sm btn-primary "><small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- END BLOG -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END BLOG -->

        <!-- CALL TO ACTION -->

        <!-- END CALL TO ACTION -->

        <!-- Footer  -->
      {{-- footer was here --}}
      @include('body.footer')
        <!-- SCROLL TO TOP -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- END SCROLL TO TOP -->
        <script src="{{ asset('site/assets/js/index.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    </body>
</body>
</html>


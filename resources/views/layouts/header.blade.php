<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="do N key" />
    <meta name="description" content="do N key" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>do N key</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logos/Logomark App.png') }}" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.min.css') }}">

    <!-- ====== font family ====== -->
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap') }}"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/lib/all.min.css') }}" />
    <!-- FontAwesome 6 CDN (Loaded after local all.min.css to prevent conflicts) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/lity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/swiper.min.css') }}" />
    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

<style>

*:not(input):not(textarea) {
    caret-color: transparent;
    outline: none;
}
</style>
</head>

<body>

    <!-- ====== start loading page ====== -->
    <!-- <div id="preloader">
    </div> -->
    <!-- ---------- loader ---------- -->
    <!-- <div id="preloader">
        <div id="loading-wrapper" class="show">
            <div id="loading-text"> <img src="assets/img/logo_main.png" alt=""> </div>
            <div id="loading-content"></div>
        </div>
    </div> -->
    <!-- ====== end loading page ====== -->

    <!-- ====== start top navbar ====== -->
    <div class="top-navbar style-4">
        <div class="container">
            <div class="content text-white">
                <!-- <span class="btn sm-butn bg-white py-0 px-2 me-2 fs-10px">
                    <small class="fs-10px">Special</small>
                </span>
                <img src="assets/img/icons/nav_icon/imoj_heart.png" alt="" class="icon-15">
                <span class="fs-10px op-6">Get </span>
                <small class="op-10 fs-10px">20% Discount</small>
                <span class="fs-10px op-6">Get for New Account</span>
                <a href="#" class="fs-10px text-decoration-underline ms-2">Register Now</a> -->
             <a href="https://wa.me/919363455951?text=Business"
   target="_blank"
   class="text-decoration-none text-reset">
    <small class="op-10 fs-10px">
        Start Your Own Ride &amp; Delivery Business in Your Area. Get Started →
    </small>
</a>
 
            </div>
        </div>
    </div>
    <!-- ====== end top navbar ====== -->

    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-light style-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/new_logo.png') }}"  alt="">
            </a>
            <button class="navbar-toggler collapsed" type="button" id="mobileNavToggler"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-uppercase">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">
            Home
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('about') }}">
            About
        </a>
    </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
        data-bs-toggle="dropdown" aria-expanded="true">
        Marketplace
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
        <!-- <li><a class="dropdown-item" href="#">Product <span style="text-transform:none !important;">& <u>Under Developing</u></span></a></li> -->
        <li><a class="dropdown-item" href="{{ url('service') }}">Services</a></li>
        <li><a class="dropdown-item" href="{{ url('idea') }}">Ideas <span style="text-transform:none !important;">& <u>Free Ad Templates</u></span></a></li>
        <!-- <li><a class="dropdown-item" href="#">Shop <span style="text-transform:none !important;">& <u>Under Developing</u></span></a></li> -->
        <li><a class="dropdown-item" href="{{ url('https://donkeydeliveries.com/live-status/pincode') }}">Service Provider</a></li>
        <!-- <li><a class="dropdown-item" href="#">Blog</a></li> -->
        <!-- <li><a class="dropdown-item" href="#">News & Media</a></li> -->
    </ul>
</li>



    <li class="nav-item">
        <a class="nav-link" href="{{ url('contact') }}">
            Contact
        </a>
    </li>
</ul>

                <div class="nav-side">
                    <div class="d-flex align-items-center">
                        <a href="{{ url('https://play.google.com/store/apps/details?id=com.fertail.donkeyuser') }}" class="search-icon me-4" target="_blank">
                            <i class="fab fa-android"></i>
                        </a>
                        <a href="{{ url('contact') }}" class="btn rounded-pill brd-gray hover-blue4 sm-butn fw-bold">
                            <span>Join do N key Hub <i class="bi bi-arrow-right ms-1"></i> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->

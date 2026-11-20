@extends('layouts.main')
@section('content')

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=1200">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="do N key" />
    <meta name="description" content="do N key" />
    <meta name="author" content="" />
<title>do N key - Service</title>
<!--Contents-->
    <main class="portfolio-page style-1">
        <!-- ====== start portfolio-projects ====== -->
        <section class="download section-padding style-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="content text-center">
                            <div class="section-head text-center style-4">
                                <h2 class="mb-20"> Your Gateway to Seamless Services <span>  do N key  </span> </h2>
                           <p class="text" style="text-align: center;">At do N key, we’ve designed our platform to serve two distinct groups</p>
                            </div>
                            <div class="butns mt-70">
                                <a href="# " class="btn rounded-pill bg-blue4 fw-bold text-white me-4" target="_blank">
                                <p>  Everyday Users : <small> Those who simply want reliable rides and delivery services through our app.</small></p>
                                
                                    </a><br><br>
                                <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white me-4" target="_blank">
                                <p> Business Entrepreneurs :  <small> Those who require powerful API integrations to automate and grow 
                                their operations.</small> </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('public/assets/img/contact_globe.svg') }}" alt="delivery network across India" class="contact_globe">
        </section>
        <!-- ====== end portfolio-projects ====== -->
 <!-- ====== start about ====== -->
 <section class="about style-4">
            <div class="content sec-content">
                <div class="container">
                <div class="section-head text-center style-4">
                <h2 class="mb-10"> For Everyday Users  <span> Download and Enjoy </span> </h2>
                <p class="text" style="text-align: center;"> One App, Unlimited Convenience</p>
              </div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-7 order-2 order-lg-0">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Tap, Ride, Go!
                                    </small>
                                    <h2 class="mb-30" style="font-size: 35px;"><span>Bike Taxi </span> </h2>
                                    <h5 >Easy Rides for Everyday Needs
                                    </h5>
                                </div>
                                <p class="text mb-40">
                                With just a few taps, book a bike taxi and enjoy a quick, budget-friendly ride. Ideal for individuals 
navigating through busy city streets or traveling short distances, our service combines speed, safety, 
and affordability—perfect for everyone.
                                </p>
                             </div>
                        </div>
                        <div class="col-lg-5 order-0 order-lg-2">
                            <div class="img mb-30 mb-lg-0">
                                <img src="{{ asset('public/assets/img/Bike Taxi Png.png') }}" onContextMenu="return false;" alt="professional bike taxi riders">
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('public/assets/img/about/about_s4_bubble2.png') }}" alt="professional bike taxi riders" class="bubble2">
            </div>
            <div class="content sec-content" style="padding:0px !important;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-5 order-0 order-lg-2">
                            <div class="img mb-30 mb-lg-0">
                                <img src="{{ asset('public/assets/img/Buy and delivery png.png') }}" onContextMenu="return false;" alt="seamless ecommerce delivery integration">
                            </div>
                        </div>
                        <div class="col-lg-7 order-0 order-lg-2">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small"> Shop Anywhere, Deliver Everywhere
                                    </small>
                                    <h2 class="mb-30" style="font-size: 35px;"><span>  Buy and Delivery</span> </h2>
                                    <h5 >A New Era of Effortless Deliveries
                                    </h5>
                                </div>
                                <p class="text mb-40">
                                Need something delivered? From buying essentials to sending parcels, our Buy and Delivery service 
takes care of it all. Simply use our app to schedule your delivery, and we’ll handle the rest—bringing 
convenience straight to your doorstep.

                                </p>
                             </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('public/assets/img/about/about_s4_bubble2.png') }}" alt="seamless ecommerce delivery integration" class="bubble2">
            </div>

            <div class="content sec-content">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-7 order-2 order-lg-0">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Modern Rides, Classic Comfort
                                    </small>
                                    <h2 class="mb-30" style="font-size: 35px;"><span> Auto Services</span> </h2>
                                    <h5> Reliable Auto Services, Anywhere You Need
                                    </h5>
                                </div>
                                <p class="text mb-40">
                                Experience the convenience of traditional auto rides with modern booking ease. Whether you're in a 
busy city or a small town, our auto service ensures safe, comfortable, and accessible transportation 
for all.
                                </p>
                             </div>
                             <img src="{{ asset('public/assets/img/about/about_s4_bubble2.png') }}" alt="delivery network across India" class="bubble2"></div>
                        <div class="col-lg-5 order-0 order-lg-2">
                            <div class="img mb-30 mb-lg-0">
                                <img src="{{ asset('public/assets/img/Auto.png') }}" onContextMenu="return false;" alt="delivery network across India">
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>

            <div class="content sec-content" style="padding:0px !important;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-5 order-0 order-lg-2">
                            <div class="img mb-30 mb-lg-0">
                                <img src="{{ asset('public/assets/img/about/Cab.png') }}" onContextMenu="return false;" alt="delivery network across India">
                            </div>
                        </div>
                        <div class="col-lg-7 order-0 order-lg-2">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small"> Book Comfort, Anytime.

                                    </small>
                                    <h2 class="mb-30" style="font-size: 35px;"><span>  Cab Services</span> </h2>
                                    <h5 > Affordable Cab Rides for Every Journey
                                    </h5>
                                </div>
                                <p class="text mb-40">
                                Looking for a comfortable and secure ride? Book a cab with just a tap! Whether it’s for a family 
outing, a professional trip, or airport transfers, our cab services offer premium comfort without 
breaking the bank.

                                </p>
                             </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('public/assets/img/about/about_s4_bubble2.png') }}" alt="delivery network across India" class="bubble2">
            </div>

            <div class="content sec-content">
                <div class="container">
                <div class="section-head text-center style-4">
                <h2 class="mb-10"> For  <span> Business Entrepreneurs </span><br>  Empower Your Growth  </h2>
                <!-- <p> One App, Unlimited Convenience</p> -->
              </div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 order-3 order-lg-2">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small"> Business Entrepreneurs
                                    </small>
                                    <h2 class="mb-30"><span>Automation That Drives Success</span> </h2>
                                    <h5 >Streamline Your Business Operations with API Integration
                                    </h5>
                                </div>
                                <p class="text mb-40">
                                Whether you're a startup looking to establish seamless operations or an existing business aiming to 
scale efficiently, our API Integration service:
                                </p>
                                <ul>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-tag"></i>
                                        </small>
                                        <h6 class="">Automate your order-to-delivery process.</h6>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-sync"></i>
                                        </small>
                                        <h6 class="">Focus on your core business while we handle logistics.</h6>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-text-width"></i>
                                        </small>
                                        <h6 class="">Scale your operations with a seamless and efficient system.</h6>
                                    </li>
</ul><br>
<p class="text mb-40">
This is a separate, specialized service designed to support entrepreneurs and  <br>e-commerce 
businesses, making their operations smarter and more streamlined. </p>
                             </div>
                        </div>
                        <div class="col-lg-6 order-3 order-lg-2">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Business Entrepreneurs
                                    </small>
                                    <h2 class="mb-30"><span>Simplifying Life, Scaling Businesses</span> </h2>
                                    <h5>  Empowering People, Businesses, and the Nation
                                    </h5>
                                </div>
                                <p class="text mb-40">
                                Whether you're an individual looking for convenient rides or a business striving to grow, do N key
                                caters to your needs without overlap or confusion:
                                </p>
                                <ul>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-tag"></i>
                                        </small>
                                        <h6 class=""> One App for Users: Book rides, deliveries, and more.</h6>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-sync"></i>
                                        </small>
                                        <h6 class=""> API Integration for Businesses: Automate and scale your logistics.
                                        </h6>
                                    </li>
                                  
</ul><br>
<p class="text mb-40">
do N key is here to simplify life for individuals and empower entrepreneurs — contributing to 
progress across every corner of India. </p>
                             </div>

                        </div>
                    </div>
                </div>
                <img src="{{ asset('public/assets/img/about/about_s4_bubble2.png') }}" alt="delivery network across India" class="bubble2">
            </div>



             <!--<div class="content sec-content">
                <div class="container">
                <div class="section-head text-center style-4">
                <h2 class="mb-10">   <span> No Website? No Problem! </span> </h2>
                <p style="text-align: center;
    
">At do N key, we empower businesses of all sizes with innovative, versatile and reliable solutions. Our 
platform isn't just a service provider—it's a partner designed to be the backbone of your business 
operations. Whether you're an entrepreneur just starting out or an established business looking to 
expand, do N key is here to fuel your growth while keeping your brand identity at the forefront.</p><bR>
<a href="{{ url('idea') }}"  class="btn rounded-pill bg-blue4 fw-bold text-white me-4" target="_blank">
                                    <small> Read More </small>
                                </a>
                  </div>
                </div>
                <img src="{{ asset('public/assets/img/about/about_s4_bubble2.png') }}" alt="delivery network across India" class="bubble2">
            </div>-->



        </section>
        <!-- ====== end about ====== -->

    </main>
    <!--End-Contents-->
    <!-- ====== request ====== -->
    <script src="{{ asset('assets/js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/lib/lity.js') }}"></script>
    <script src="{{ asset('assets/js/lib/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.counterup.js') }}"></script>
    <!-- <script src="assets/js/lib/pace.js"></script> -->
    <script src="{{ asset('assets/js/lib/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/scrollIt.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}?v=2026070401"></script>

    <script>
        // ---------- portfolio mixitup -----------
        var containerEl = document.querySelector('.mix-container');

        if (containerEl && typeof mixitup === 'function') {
            mixitup(containerEl);
        }
    </script>
<script>
        // Function to update the view count stored in localStorage
        function updateViewCount1() {
            // Check if the 'pageViewCount' exists in localStorage
            let viewCount1 = localStorage.getItem('pageViewCount1');

            // If it doesn't exist, initialize the view count to 0
            if (!viewCount1) {
                viewCount1 = 0;
            }

            // Increment the view count by 1
            viewCount1++;

            // Store the updated view count in localStorage
            localStorage.setItem('pageViewCount1', viewCount1);

            // Display the view count on the page
            document.getElementById('viewCount1').textContent = viewCount1;
        }

        // Call the function when the page loads
        window.onload = updateViewCount1;
    </script>
@endsection

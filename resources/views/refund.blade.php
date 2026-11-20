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
<title>do N key - Refund Policy</title>



<style>
     h6{
        text-align: left !important;
        font-weight: 600;
        font-family: sans-serif;
        line-height: 2.2;
        -webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;
    }
    p{
        -webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;
    }
</style>

 <!--Contents-->
 <main class="single-project pt-50 style-5">


<!-- ====== start about ====== -->
<section class="about-app style-5">
    <div class="container">
        <div class="content text-center">
            <div class="img-content pt-70 pb-100 border-bottom brd-gray">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                    <div class="section-head style-4">
                                <!-- <small class="title_small">Testimonials</small> -->
                                <h2 class="mb-30"><span> Refund Policy
                                </span> </h2>
                                <p style="text-align: center;">This policy applies to Users, Service Providers, and Shop Vendors.</p>
                    </div><br>
                 
             <h6>1. Service Provider Refund Policy</h6>
             <p>• <b>No Refund for Subscription Fees:</b> The <b>Service Provider </b>agrees to pay a <b>monthly subscription fee</b> for access to the </b>do N key Deliveries </b>platform. Since the subscription is for platform usage, <b>no refunds will be provided</b> under any circumstances, including early termination of the subscription or suspension due to non-payment.</p>
             <p>• <b>No Refund for Verification Fees:</b> Any fees paid during the <b>verification process</b> are <b>non-refundable</b>. These fees apply to all parties, including <b>drivers, shop owners, and service providers,</b> as they cover essential administrative and background checks.</p>
             <p>• <b>Cancellation or Suspension of Services:</b> If the Service Provider fails to meet their payment obligations or breaches the terms of service, their access to the platform may be suspended or terminated, and no refund will be issued for the subscription or verification fees.</p>

             <br>
             
             
             <h6>2. End User Refund Policy</h6>
              <p>• <b>Payment During or After the Ride:</b> End users can make the payment <b>during or after the ride,</b> either <b>online or offline.</b></p>
              <p>• <b>Payment Gateway:</b> Currently, <b>do N key Deliveries Payment Gateway</b> facilitates online payments for Service Providers.<b>Upgrades are in progress</b> to enable direct payment from the end user to the Service Provider after the ride.</p>
              <p>• <b>No Refund for Completed Transactions:</b> Payments made for completed rides are <b>non-refundable</b>. If there are any service-related issues, the end user should first contact the Service Provider to resolve the issue. If unresolved, <b>do N key Deliveries</b> can assist in mediating the dispute.</p>
  
  
              <br>
  
  
              <h6>3. API Integration (Business Collaboration) Refund Policy</h6>
              <p>• <b>No Charges for API Integration:</b><b> do N key Deliveries</b> does not charge fees for API integration during business collaborations. Therefore,<b> no refund policy </b>applies to API integrations.</p>
              
              
              <br>


              <h6>4. Shop Refund Policy</h6>
               <p> • <b>Vendor-Dependent Refunds:</b> Refund policies for items purchased from the<b> do N key Shop </b>depend on the <b>vendor.</b> End users should carefully review the <b>description or product</b> information provided by the vendor at the time of booking or ordering to confirm the refund eligibility.</p>
               <p> • <b>Check Vendor Refund Status:</b> End users are responsible for verifying the vendor’s refund status and return policy before making a purchase.<b> do N key Deliveries</b> is not liable for disputes regarding vendor refunds or returns, which should be addressed directly with the vendor.</p>
               
               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    </html>
@endsection

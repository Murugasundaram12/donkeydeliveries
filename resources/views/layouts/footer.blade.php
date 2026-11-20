<style>.icon-40 {
            width: 40px;
            height: 40px;
            
        }</style>

<!-- ====== start footer ====== -->
 <footer class="style-4">
    <div class="container">
        <div class="section-head text-center style-4">
            <h2 class="mb-10"> Ready To <span> Download </span> </h2>
            <p style="text-align: center;">Go anywhere in India, whether you’re traveling or need a quick delivery. We bring the service directly to your doorstep, wherever you are.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-50">
                <a href="{{ url('https://play.google.com/store/apps/details?id=com.fertail.donkeyuser') }}" class="btn rounded-pill hover-blue4 fw-bold border-blue4" target="_blank">
                    <small> <i class="fab fa-google-play me-2 pe-2 border-end"></i> Download On Google Play </small>
                </a>
            </div>
        </div>
        
        <div class="text-start mt-4 mb-2">
            <span class="fw-bold"><i class="fas fa-eye me-2"></i> <span id="CounterVisitor">{{ isset($siteViewCount) ? $siteViewCount : '53,289' }}</span> Views</span>
        </div>
        <div class="foot mt-80">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="logo">
                        <img src="{{ asset('assets/img/Primary logo - Website.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <ul class="links">
                        <li><a href="{{ asset('index') }}">Home</a></li>
                        <li><a href="{{ asset('about') }}">About</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="{{ asset('service') }}">Services</a></li>
                        <li><a href="{{ asset('idea') }}">Ideas</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="{{ asset('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="social-links d-flex justify-content-center">
                        <a href="{{ url('https://whatsapp.com/channel/0029VaI1wvv3bbUy9w5S1f2J') }}" target="_blank" class="me-3"><i class="fab fa-whatsapp"></i></a>
                        <a href="{{ url('https://www.facebook.com/doNkey.app.deliveries/') }}" target="_blank" class="me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ url('https://x.com/doNkey_Delivery?t=MNIa2Z-ja0QlsTExo4eDnQ&s=08') }}" target="_blank" class="me-3"><i class="fab fa-x-twitter"></i></a>
                        <a href="{{ url('https://www.instagram.com/donkey_deliveries?igsh=MTFwYWE1ZzJlMGlpdg==') }}" target="_blank" class="me-3"><i class="fab fa-instagram"></i></a>
                        <a href="{{ url('https://www.quora.com/profile/Do-N-key-Deliveries?ch=10&oid=2391592570&share=d855bacb&srid=3zvwHa&target_type=user') }}" target="_blank" class="me-3"><i class="fab fa-quora"></i></a>
                        <a href="{{ url('https://www.linkedin.com/company/do-n-key-deliveries/') }}" target="_blank" class="me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{ url('https://www.youtube.com/@donkey_delivery') }}" target="_blank" class="me-3"><i class="fab fa-youtube"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="copywrite text-center">
            <small class="small">
               Patent Granted: 569412 © <span id="current-year"></span> <a href="{{ url('https://www.donkeydeliveries.com/') }}" class="fw-bold text-decoration-underline">do N key</a> All Rights Reserved | <a href="{{ url('privacy') }}" class="fw-bold text-decoration-underline">Privacy Policy</a> |  <a href="{{ url('rider') }}" class="fw-bold text-decoration-underline"> Rider, Driver & Service Provider T&C</a> | <a href="{{ url('user_terms') }}" class="fw-bold text-decoration-underline"> Users T&C</a> | <a href="{{ url('shoptc') }}" class="fw-bold text-decoration-underline"> Shop T&C & Return Policy&nbsp;</a>|<a href="{{ url('refund') }}"class="fw-bold text-decoration-underline">&nbsp;Refund&nbsp;Policy</a>
            </small>
        </div>
    </div>
    <img src="{{ asset('assets/img/footer/footer_4_wave.png') }}" alt="" class="wave">
</footer>

    <!-- ====== end footer ====== -->
         <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->
    <script>
    // Get the current year
    const currentYear = new Date().getFullYear();

    // Set the current year in the element with id "current-year"
    document.getElementById("current-year").textContent = currentYear;
</script>



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
    <!--  <script src="{{ asset('assets/js/lib/pace.js') }}"></script> --> 
    <script src="{{ asset('assets/js/lib/scrollIt.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}?v=2026112001"></script>

<!-- Bootstrap Icons -->
<link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">

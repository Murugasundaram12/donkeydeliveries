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
<title>do N key - Contact</title>

<style>
    .contact-card {
        background: #fff;
        border-radius: 20px;
        padding: 30px 20px;
        height: 100%;
        text-align: center;
        border: 1px solid #ececec;
        transition: .35s;
        box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
    }

    .contact-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, .12);
    }

    .contact-card .icon {
        width: 80px;
        height: 80px;
        margin: auto;
        border-radius: 50%;
        background: #f5f7ff;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .contact-card .icon img {
        width: 45px;
        height: 45px;
        object-fit: contain;
    }

    .contact-card h4 {
        font-size: 24px;
        font-weight: 700;
        color: #1b1b1b;
        margin-bottom: 10px;
    }

    .contact-card p,
    .contact-card a {
        font-size: 17px;
        color: #646092;
        text-decoration: none;
        word-break: break-word;
        text-align:center;
    }

    .contact-card a:hover {
        color: #000;
    }

    /* Desktop */
    @media(min-width:1200px) {
        .contact-card {
            min-height: 260px;
        }
    }

    /* Tablet */
    @media(max-width:991px) {
        .contact-card {
            min-height: 220px;
        }
    }

    /* Mobile */
    @media(max-width:767px) {

        .contact-card {
            padding: 25px 15px;
            min-height: auto;
        }

        .contact-card h4 {
            font-size: 20px;
        }

        .contact-card p,
        .contact-card a {
            font-size: 15px;
        }

        .contact-card .icon {
            width: 70px;
            height: 70px;
        }

        .contact-card .icon img {
            width: 38px;
            height: 38px;
        }
    }
</style>
<!--Contents-->
<main class="contact-page style-5">
    <!-- ====== start contact page ====== -->
    <section class="community section-padding style-5">
        <div class="container">
            <div class="section-head text-center style-4 mb-40">
                <small class="title_small">Contact us</small>
                <h2 class="mb-20">Get In <span> Touch </span> </h2>
                <p style="text-align: center;">For faster responses, drop a WhatsApp message.
                    All requests will be resolved within 24 hours. </p>
            </div>

            <!-- Contact Cards -->
            <div class="container">
                <div class="row g-4 justify-content-center mt-4">

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="contact-card">
                            <div class="icon">
                                <img src="{{ asset('public/assets/img/icons/email (1).png') }}" alt="">
                            </div>
                            <div class="info">
                                <h4>Email Us</h4>
                                <a href="mailto:support@donkeydeliveries.com">
                                    support@donkeydeliveries.com
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="contact-card">
                            <div class="icon">
                                <img src="{{ asset('public/assets/img/icons/map.png') }}" alt="">
                            </div>
                            <div class="info">
                                <h4>Our Location</h4>
                                <p>Dindigul, Tamil Nadu</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="contact-card">
                            <div class="icon">
                                <img src="{{ asset('public/assets/img/icons/clock.png') }}" alt="">
                            </div>
                            <div class="info">
                                <h4>Support Centre</h4>
                                <a href="https://wa.me/919069067008" target="_blank">
                                    WhatsApp : 9069067008
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="contact-card">
                            <div class="icon">
                                <img src="{{ asset('public/assets/img/icons/robo-advisor.png') }}" alt="">
                            </div>
                            <div class="info">
                                <h4>Automated Assistance</h4>
                                <a href="https://wa.me/919363455951" target="_blank">
                                    WhatsApp : 9363455951
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="contact section-padding pt-0 style-6">
        <div class="container">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form action="{{ url('') }}" class="form" method="post">
                            <p class="text-center text-danger fs-12px mb-30">The field is required mark as *</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="email" class="form-control" placeholder="Email Address *">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="number" name="phone" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="area" class="form-control" placeholder="Your Area">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="number" name="pincode" class="form-control" placeholder="Your Pincode">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="area" class="form-control" placeholder="Your Area">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea rows="10" class="form-control" placeholder="How can we help you?">Your Inquiry for (Service provider or Rider)</textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-20">
                                    <label class="form-label">Are you planning to join immediately?</label>
                                    <div class="custom-options">
                                        <div class="option" data-value="yes">Yes</div>
                                        <div class="option" data-value="no">No</div>
                                    </div>
                                    <input type="hidden" name="join_immediately" id="joinImmediately" required>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-20">
                                        <select name="option" class="form-select" required>
                                            <option value="how can we help" selected>Could you tell us how you found out about this opportunity?</option>
                                            <option value="option 1">Mobile App</option>
                                            <option value="option 2">Friends</option>
                                            <option value="option 3">Family</option>
                                            <option value="option 4">Google</option>
                                            <option value="option 5">Instagram</option>
                                            <option value="option 6">Facebook</option>
                                            <option value="option 7">News Channels</option>
                                            <option value="option 8">YouTube</option>
                                            <option value="option 9">LinkedIn</option>
                                            <option value="option 10">WhatsApp</option>
                                            <option value="option 11">Posters/Billboards</option>
                                            <option value="option 12">SMS/Email</option>
                                            <option value="option 13">Events/Seminars/Interview</option>
                                            <option value="option 14">Referral Program</option>
                                            <option value="option 15">Company Website</option>
                                            <option value="option 16">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div class="form-check d-inline-flex mt-30 mb-30">
                                        <input class="form-check-input me-2 mt-0" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label small" for="flexCheckDefault">
                                            By submitting, i’m agreed to the <a href="{{ url('user_terms') }}" target="_blank" class="text-decoration-underline">Terms & Conditons</a>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 text-center">
                                    <input type="submit" value="Send Your Request" class="btn rounded-pill bg-blue4 fw-bold text-white text-light fs-12px">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <img src="{{ asset('public/assets/img/icons/contact_a.png') }}" alt="" class="contact_a">
                <img src="{{ asset('public/assets/img/icons/contact_message.png') }}" alt="" class="contact_message">
            </div>
        </div>


    </section>
    <!-- ====== end contact page ====== -->

    <!-- ====== start contact page ====== -->
    <!-- <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15703.159289739024!2d77.9244424!3d10.2785118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b075349c3be152f%3A0x176a24ae82e2df58!2sChinnalapatti%2C%20Tamil%20Nadu%20624302!5e0!3m2!1sen!2sin!4v1735032758504!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div> -->
    <!-- ====== start contact page ====== -->

</main>
<!--End-Contents-->

<script>
    // ---------- portfolio mixitup -----------
    var containerEl = document.querySelector('.mix-container');

    if (containerEl && typeof mixitup === 'function') {
        mixitup(containerEl);
    }
</script>
<script>
    // Function to update the view count stored in localStorage
    function updateViewCount3() {
        // Check if the 'pageViewCount' exists in localStorage
        let viewCount3 = localStorage.getItem('pageViewCount3');

        // If it doesn't exist, initialize the view count to 0
        if (!viewCount3) {
            viewCount3 = 0;
        }

        // Increment the view count by 1
        viewCount3++;

        // Store the updated view count in localStorage
        localStorage.setItem('pageViewCount3', viewCount3);

        // Display the view count on the page
        document.getElementById('viewCount3').textContent = viewCount3;
    }

    // Call the function when the page loads
    window.onload = updateViewCount3;
</script>
<script>
    document.querySelectorAll('.custom-options .option').forEach(option => {
        option.addEventListener('click', () => {
            document.querySelectorAll('.custom-options .option').forEach(o => o.classList.remove('selected'));
            option.classList.add('selected');
            document.getElementById('joinImmediately').value = option.getAttribute('data-value');
        });
    });
</script>
<script>
    function copyGSTIN() {
        const gstinText = document.getElementById('gstin').innerText.split(': ')[1];
        navigator.clipboard.writeText(gstinText).then(() => {
            alert('GSTIN copied to clipboard!');
        }).catch(err => {
            alert('Failed to copy GSTIN. Please try again.');
        });
    }
</script>

@endsection

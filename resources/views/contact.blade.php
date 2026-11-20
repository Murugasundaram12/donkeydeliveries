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
                        <form action="{{ route('feedback') }}" class="form" method="post" id="contactForm">
                            @csrf
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
                                        <input type="text" name="phone" id="contact_phone" class="form-control" placeholder="Phone Number" inputmode="numeric" maxlength="12">
                                        <div class="d-flex align-items-center mt-2 flex-wrap">
                                            <button type="button" class="btn btn-sm btn-outline-dark" id="contactSendOtpBtn" style="font-size: 13px; padding: 4px 12px; border-radius: 4px;">
                                                Send OTP
                                            </button>
                                            <span class="text-success ms-2" id="contactOtpVerifiedText" style="display:none; font-weight: 600; font-size: 13px;">
                                                OTP verified successfully
                                            </span>
                                        </div>
                                        <div id="contactOtpInlineStatus" class="small mt-1" style="font-size: 12px;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="area" class="form-control" placeholder="Your Area" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="pincode" class="form-control" placeholder="Your Pincode" inputmode="numeric" maxlength="6" pattern="[0-9]{6}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <select name="category" id="contactCategory" class="form-select" style="height: 50px; border-radius: 4px; font-size: 14px;" required>
                                            <option value="" disabled selected>Category (Service Provider / Rider) *</option>
                                            <option value="Subscriber">Service Provider (PBP)</option>
                                            <option value="Rider">Rider</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea rows="10" name="message" class="form-control" placeholder="How can we help you?">Your Inquiry for (Service provider or Rider)</textarea>
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

<style>
    #contactOtpModal {
        z-index: 99999 !important;
    }
    #contactOtpModal .modal-dialog {
        z-index: 100000 !important;
        position: relative !important;
        pointer-events: auto !important;
    }
    #contactOtpModal .modal-content {
        pointer-events: auto !important;
        background-color: #ffffff !important;
        border: 1px solid rgba(0, 0, 0, 0.2) !important;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3) !important;
        border-radius: 12px !important;
    }
    #contactOtpInput {
        pointer-events: auto !important;
        user-select: text !important;
        -webkit-user-select: text !important;
        cursor: text !important;
        background-color: #ffffff !important;
        color: #111111 !important;
        caret-color: #007bff !important;
        position: relative !important;
        z-index: 100005 !important;
        height: 52px !important;
        font-size: 24px !important;
        font-weight: 700 !important;
        letter-spacing: 6px !important;
        text-align: center !important;
        border: 2px solid #007bff !important;
        border-radius: 8px !important;
    }
    #contactOtpInput:focus {
        border-color: #0056b3 !important;
        box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25) !important;
        background-color: #ffffff !important;
        outline: none !important;
    }
</style>

<!-- WhatsApp OTP Verification Modal -->
<div class="modal fade" id="contactOtpModal" tabindex="-1" role="dialog"
    aria-labelledby="contactOtpModalLabel" aria-hidden="true" data-bs-backdrop="static"
    data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactOtpModalLabel" style="font-weight: 600;">
                    Verify WhatsApp Number
                </h5>
                <button type="button" class="btn-close contact-otp-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="contactOtpStatus" class="alert" style="display:none; font-size: 14px;"></div>
                <p class="mb-2" style="font-size: 14px; color: #333;">
                    Enter the 6-digit verification code sent to
                    <strong id="contactOtpMaskedPhone"></strong>.
                </p>
                <p class="text-muted" style="font-size: 13px;">The code is valid for 60 seconds.</p>
                <div class="form-group mb-0">
                    <label for="contactOtpInput" style="font-weight: 500;">Verification code</label>
                    <input type="text"
                        inputmode="numeric"
                        autocomplete="one-time-code"
                        pattern="[0-9]{6}"
                        maxlength="6"
                        class="form-control"
                        id="contactOtpInput"
                        name="otp"
                        placeholder="Enter 6-digit OTP">
                </div>
            </div>
            <div class="modal-footer" style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <button type="button" class="btn btn-outline-secondary btn-sm" id="contactOtpResendBtn" style="border-radius: 4px;">
                        Resend OTP (<span id="contactOtpCountdown">60</span>s)
                    </button>
                </div>
                <div>
                    <button type="button" class="btn btn-secondary btn-sm me-2 contact-otp-cancel" id="contactOtpCancelBtn" data-bs-dismiss="modal" style="border-radius: 4px;">
                        Cancel
                    </button>
                    <button type="button" class="btn btn-primary btn-sm" id="contactOtpVerifyBtn" style="border-radius: 4px;">
                        Verify OTP
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

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

<script>
    (function () {
        let isOtpVerified = false;
        let verifiedMobile = '';
        let countdownTimer = null;
        let countdownSeconds = 60;
        let isSendingOtp = false;

        function getCsrfToken() {
            const meta = document.querySelector('meta[name="csrf-token"]');
            if (meta && meta.getAttribute('content')) {
                return meta.getAttribute('content');
            }
            const input = document.querySelector('input[name="_token"]');
            return input ? input.value : '';
        }

        function normaliseMobile(val) {
            return (val || '').replace(/\D+/g, '');
        }

        function showInlineStatus(message, isSuccess) {
            const el = document.getElementById('contactOtpInlineStatus');
            if (!el) return;
            el.textContent = message;
            el.className = 'small mt-1 ' + (isSuccess ? 'text-success' : 'text-danger');
        }

        function clearInlineStatus() {
            const el = document.getElementById('contactOtpInlineStatus');
            if (el) el.textContent = '';
        }

        function showModalStatus(message, isSuccess) {
            const el = document.getElementById('contactOtpStatus');
            if (!el) return;
            el.textContent = message;
            el.className = 'alert ' + (isSuccess ? 'alert-success' : 'alert-danger');
            el.style.display = 'block';
        }

        function clearModalStatus() {
            const el = document.getElementById('contactOtpStatus');
            if (!el) return;
            el.textContent = '';
            el.style.display = 'none';
        }

        function focusOtpInput() {
            const input = document.getElementById('contactOtpInput');
            if (input) {
                input.removeAttribute('disabled');
                input.removeAttribute('readonly');
                input.focus();
                try {
                    input.select();
                } catch (e) {}
            }
        }

        function openModal(maskedPhone) {
            clearModalStatus();
            const phoneEl = document.getElementById('contactOtpMaskedPhone');
            if (phoneEl) phoneEl.textContent = maskedPhone || '';
            const otpInput = document.getElementById('contactOtpInput');
            if (otpInput) {
                otpInput.value = '';
                otpInput.removeAttribute('disabled');
                otpInput.removeAttribute('readonly');
            }

            const modalEl = document.getElementById('contactOtpModal');
            if (modalEl && modalEl.parentNode !== document.body) {
                document.body.appendChild(modalEl);
            }

            if (window.bootstrap && bootstrap.Modal) {
                bootstrap.Modal.getOrCreateInstance(modalEl).show();
            } else if (window.$ && typeof $('#contactOtpModal').modal === 'function') {
                $('#contactOtpModal').modal('show');
            } else {
                modalEl.style.display = 'block';
                modalEl.classList.add('show');
            }

            setTimeout(focusOtpInput, 100);
            setTimeout(focusOtpInput, 300);
            setTimeout(focusOtpInput, 600);
        }

        function closeModal() {
            const modalEl = document.getElementById('contactOtpModal');
            if (!modalEl) return;
            if (window.bootstrap && bootstrap.Modal) {
                const inst = bootstrap.Modal.getInstance(modalEl);
                if (inst) inst.hide();
            } else if (window.$ && typeof $('#contactOtpModal').modal === 'function') {
                $('#contactOtpModal').modal('hide');
            } else {
                modalEl.style.display = 'none';
                modalEl.classList.remove('show');
            }
            const backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                backdrop.remove();
            }
            document.body.classList.remove('modal-open');
            document.body.style.removeProperty('padding-right');
            document.body.style.removeProperty('overflow');
        }

        function startCountdown(sec) {
            clearInterval(countdownTimer);
            countdownSeconds = sec || 60;
            const resendBtn = document.getElementById('contactOtpResendBtn');
            const cdEl = document.getElementById('contactOtpCountdown');

            if (resendBtn) resendBtn.disabled = true;
            if (cdEl) cdEl.textContent = countdownSeconds;

            countdownTimer = setInterval(function () {
                countdownSeconds--;
                if (cdEl) cdEl.textContent = countdownSeconds;
                if (countdownSeconds <= 0) {
                    clearInterval(countdownTimer);
                    if (resendBtn) resendBtn.disabled = false;
                }
            }, 1000);
        }

        function resetVerification() {
            isOtpVerified = false;
            verifiedMobile = '';
            const verifiedText = document.getElementById('contactOtpVerifiedText');
            if (verifiedText) verifiedText.style.display = 'none';
            const sendBtn = document.getElementById('contactSendOtpBtn');
            if (sendBtn) {
                sendBtn.disabled = false;
                sendBtn.textContent = 'Send OTP';
            }
            clearInlineStatus();
        }

        function markVerified(mobile) {
            isOtpVerified = true;
            verifiedMobile = mobile;
            const verifiedText = document.getElementById('contactOtpVerifiedText');
            if (verifiedText) verifiedText.style.display = 'inline';
            const sendBtn = document.getElementById('contactSendOtpBtn');
            if (sendBtn) {
                sendBtn.disabled = true;
                sendBtn.textContent = 'Verified';
            }
            showInlineStatus('Phone number verified successfully.', true);
        }

        function sendOtp(isResend) {
            if (isSendingOtp) {
                return;
            }

            const phoneInput = document.getElementById('contact_phone');
            const rawPhone = phoneInput ? phoneInput.value.trim() : '';
            const mobile = normaliseMobile(rawPhone);

            if (!mobile || mobile.length < 10 || mobile.length > 12) {
                showInlineStatus('Please enter a valid 10 to 12 digit mobile number.', false);
                return;
            }

            clearInlineStatus();
            const sendBtn = document.getElementById('contactSendOtpBtn');
            const resendBtn = document.getElementById('contactOtpResendBtn');

            isSendingOtp = true;
            if (!isResend && sendBtn) {
                sendBtn.disabled = true;
                sendBtn.textContent = 'Sending...';
            } else if (isResend && resendBtn) {
                resendBtn.disabled = true;
            }

            fetch('/subscriber/onboarding/send-otp', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': getCsrfToken()
                },
                credentials: 'same-origin',
                body: JSON.stringify({
                    mobile: mobile,
                    resend: !!isResend
                })
            })
            .then(function (res) {
                return res.json().then(function (data) {
                    return { ok: res.ok, status: res.status, data: data };
                });
            })
            .then(function (result) {
                if (result.ok) {
                    openModal(result.data.masked_phone || mobile);
                    startCountdown(result.data.expires_in || 60);
                    showModalStatus(result.data.message || 'OTP sent successfully.', true);
                } else {
                    const msg = result.data.message || 'Failed to send OTP. Please try again.';
                    if (isResend) {
                        showModalStatus(msg, false);
                    } else {
                        showInlineStatus(msg, false);
                    }
                }
            })
            .catch(function () {
                const err = 'Unable to connect to OTP service. Please try again.';
                if (isResend) {
                    showModalStatus(err, false);
                } else {
                    showInlineStatus(err, false);
                }
            })
            .finally(function () {
                isSendingOtp = false;
                if (!isResend && sendBtn && !isOtpVerified) {
                    sendBtn.disabled = false;
                    sendBtn.textContent = 'Send OTP';
                }
            });
        }

        function verifyOtp() {
            const phoneInput = document.getElementById('contact_phone');
            const rawPhone = phoneInput ? phoneInput.value.trim() : '';
            const mobile = normaliseMobile(rawPhone);
            const otpInput = document.getElementById('contactOtpInput');
            const otp = (otpInput ? otpInput.value : '').trim();

            if (!otp || otp.length !== 6 || !/^\d{6}$/.test(otp)) {
                showModalStatus('Please enter a valid 6-digit verification code.', false);
                return;
            }

            const verifyBtn = document.getElementById('contactOtpVerifyBtn');
            if (verifyBtn) {
                verifyBtn.disabled = true;
                verifyBtn.textContent = 'Verifying...';
            }

            fetch('/subscriber/onboarding/verify-otp', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': getCsrfToken()
                },
                credentials: 'same-origin',
                body: JSON.stringify({
                    mobile: mobile,
                    otp: otp
                })
            })
            .then(function (res) {
                return res.json().then(function (data) {
                    return { ok: res.ok, status: res.status, data: data };
                });
            })
            .then(function (result) {
                if (result.ok) {
                    closeModal();
                    markVerified(mobile);
                } else {
                    showModalStatus(result.data.message || 'Invalid verification code.', false);
                }
            })
            .catch(function () {
                showModalStatus('Verification failed. Please check your connection and try again.', false);
            })
            .finally(function () {
                if (verifyBtn) {
                    verifyBtn.disabled = false;
                    verifyBtn.textContent = 'Verify OTP';
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            const modalEl = document.getElementById('contactOtpModal');
            if (modalEl) {
                if (modalEl.parentNode !== document.body) {
                    document.body.appendChild(modalEl);
                }
                modalEl.addEventListener('shown.bs.modal', focusOtpInput);
                modalEl.addEventListener('mousedown', function (e) {
                    e.stopPropagation();
                });
            }
            if (window.$) {
                $('#contactOtpModal').on('shown.bs.modal', focusOtpInput);
            }

            const otpInput = document.getElementById('contactOtpInput');
            if (otpInput) {
                otpInput.addEventListener('mousedown', function (e) {
                    e.stopPropagation();
                });
                otpInput.addEventListener('click', function (e) {
                    e.stopPropagation();
                    this.focus();
                });
                otpInput.addEventListener('input', function () {
                    this.value = this.value.replace(/\D/g, '').slice(0, 6);
                });
                otpInput.addEventListener('keydown', function (e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        verifyOtp();
                    }
                });
            }

            const phoneInput = document.getElementById('contact_phone');
            if (phoneInput) {
                phoneInput.addEventListener('input', function () {
                    const currentMobile = normaliseMobile(this.value);
                    if (isOtpVerified && currentMobile !== verifiedMobile) {
                        resetVerification();
                        showInlineStatus('Phone number changed. Please verify again.', false);
                    }
                });
            }

            document.getElementById('contactSendOtpBtn')?.addEventListener('click', function () {
                sendOtp(false);
            });

            document.getElementById('contactOtpResendBtn')?.addEventListener('click', function () {
                sendOtp(true);
            });

            document.getElementById('contactOtpVerifyBtn')?.addEventListener('click', verifyOtp);

            document.getElementById('contactOtpCancelBtn')?.addEventListener('click', closeModal);
            document.querySelectorAll('.contact-otp-close').forEach(function (btn) {
                btn.addEventListener('click', closeModal);
            });

            const contactForm = document.querySelector('.contact-page form.form') || document.querySelector('form.form');
            if (contactForm) {
                contactForm.addEventListener('submit', function (e) {
                    const rawPhone = phoneInput ? phoneInput.value.trim() : '';
                    const mobile = normaliseMobile(rawPhone);

                    if (!isOtpVerified || mobile !== verifiedMobile) {
                        e.preventDefault();
                        showInlineStatus('Please verify your WhatsApp OTP before submitting.', false);
                        if (phoneInput) phoneInput.focus();
                        return false;
                    }

                    e.preventDefault();
                    const submitBtn = contactForm.querySelector('input[type="submit"]') || contactForm.querySelector('button[type="submit"]');
                    if (submitBtn) {
                        submitBtn.disabled = true;
                        if (submitBtn.tagName === 'INPUT') submitBtn.value = 'Sending...';
                    }

                    const formData = new FormData(contactForm);
                    const msg = (contactForm.querySelector('textarea')?.value || '').trim();
                    if (!formData.get('message') && msg) {
                        formData.set('message', msg);
                    }

                    fetch('/feedback', {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': getCsrfToken()
                        },
                        credentials: 'same-origin',
                        body: formData
                    })
                    .then(function (res) {
                        return res.json().then(function (data) {
                            return { ok: res.ok, data: data };
                        });
                    })
                    .then(function (result) {
                        if (result.ok && result.data.status) {
                            showInlineStatus(result.data.message || 'Successfully Submitted!', true);
                            alert(result.data.message || 'Successfully Submitted!');
                            contactForm.reset();
                            resetVerification();
                        } else {
                            showInlineStatus(result.data.message || 'Submission failed. Please try again.', false);
                        }
                    })
                    .catch(function () {
                        contactForm.submit();
                    })
                    .finally(function () {
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            if (submitBtn.tagName === 'INPUT') submitBtn.value = 'Send Your Request';
                        }
                    });
                });
            }
        });
    })();
</script>

@endsection

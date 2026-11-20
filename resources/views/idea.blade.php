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
<title>do N key - Idea</title>
   <style>
    /* General styles */
ul.color-000 {
    list-style-type: none;
    padding-left: 0;
}

ul.color-000 li {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

ul.color-000 li i {
    font-size: 1rem; /* Size for mobile */
    margin-right: 10px;
}

ul.color-000 li b {
    font-weight: bold;
}

/* Image styling */
ul.color-000 li img {
    max-width: 20px;
    margin-left: 5px;
}
.list-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 15px;
    }
    .list-item i {
        margin-right: 8px;
    }
    .list-item b {
        margin-right: 4px;
    }
    .list-item span {
        display: inline-block;
    }
/* Responsive Styles */
@media screen and (max-width: 768px) {
    /* Adjust text size and alignment on smaller screens */
    ul.color-000 li {
        flex-direction: column; /* Stack the icon and text vertically */
        align-items: flex-start; /* Align text to the start */
    }
    
    ul.color-000 li b {
        font-size: 1rem; /* Adjust the font size for mobile */
    }

    ul.color-000 li i {
        font-size: 18px; /* Adjust icon size */
    }

    /* Ensure that images are well-sized for mobile */
    ul.color-000 li img {
        max-width: 15px; /* Smaller image size on mobile */
    }
}

@media screen and (max-width: 480px) {
    ul.color-000 li {
        margin-bottom: 20px; /* Smaller space between list items */
    }
}
.about-app.style-5 .content,
.about-app.style-5 .content h2,
.about-app.style-5 .content p {
    text-align: center !important;
}
   </style>
   <!--Contents-->
    <main class="single-project pt-50 style-5">

        <!-- ====== start about ====== -->
        <section class="about-app style-5">
            <div class="container">
                <div class="content text-center">
                    <h2 class="color-000 mb-50">This Isn’t Your Regular Go-To Info Page Discover<br> New Business Ideas and Opportunities!
                    </h2>
                    <p class="lh-2" style="text-align: center;">Every business starts with an idea. Whether you’re already running one or searching for your next<br>
move, this space is for you. It’s where local sellers, dreamers and established business minds meet to<br>
grow smarter—together, close gaps and sharing ideas that truly work. Dive in—you might just find<br>
your next big move waiting here.

</p><bR>
                    <div class="about-cards border-bottom brd-gray">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="about-card mb-30 mb-lg-0">
                                <h6>
                                    Join hands with our Community That’s Already Thriving
                                    </h6> <bR>
                                    <small class="d-block">
                                    Learn how businesses—big and small—are connecting here, turning simple ideas into real
                                    opportunities.
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="about-card mb-30 mb-lg-0">
                                  <h6>
                                    A Platform Designed for You, Not Just for Selling
                                    </h6><bR>
                                    <small class="d-block">
                                    Explore ways to reach more customers, simplify deliveries, and build on ideas that already
                                    work.
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="about-card mb-30 mb-lg-0">
                                <h6>
                                    Your Shortcut to Tried-and-Tested Business Paths
                                    </h6><bR>
                                    <small class="d-block">
                                    From home kitchens to workshops and stores—see how people just like you have made it
                                    happen
                                    </small>
                                    
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="about-card mb-30 mb-lg-0">
                                <h6>
                                    Real Growth Starts with Connecting to the Right People
                                    </h6><bR>
                                    <small class="d-block">
                                    This isn’t just a platform—it’s a hub where business authenticity, popularity, and opportunity
come together.

                                    </small>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-content pt-70 pb-70 border-bottom brd-gray overflow-hidden">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="img text-center">
                                    <img src="{{ asset('public/assets/img/Illustration-01.png') }}" alt="professional bike taxi riders"  onContextMenu="return false;" class="main-img" style="    max-width: 50% !important;">
                                    <img src="{{ asset('public/assets/img/single_project/bubbls.png') }}" alt="delivery network across India" class="bubbls">
                                    <img src="{{ asset('public/assets/img/single_project/circle.png') }}" alt="seamless ecommerce delivery integration" class="circle">
                                </div>
                                <div class="info mt-30">
                                <!-- <h5 class="lh-4"><u> Description</u></h5> -->
                                    <h6 class="">
                                    You don’t need to waste time on trial and error. Here, you’ll see how businesses—whether it’s food,
                                    fashion, or tools—found ways to connect to their customers, grow locally, and scale further.
                                    </h6>
                                    <!-- <a href="#" class="color-blue4 mt-60">https://example.domain</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end about ====== -->


        <!-- ====== start challenge ====== -->
        <div class="challenge section-padding style-5 overflow-hidden">
            <div class="container">
                <div class="row gx-5" id="read-more-btn">
                    <div class="col-lg-4">
                        <div class="section-head style-4">
                            
                            <h2 class=""> <span>Ideas, Insights, and Stories That Could Spark Your Next Step  </span> </h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                       
                        <div class="text color-666 mb-20">
                            <h5 class="lh-4">Are You Still Showcasing Products Only on Insta & Facebook?</h5>
                            Who wouldn’t love to expand their business to a professional platform and open up more
                            selling opportunities?<br>
                            It’s time to ping us on WhatsApp at 9363455953—listing your products is just a tap away!
We’ll keep it simple and direct:

                        </div>
                        <style>

</style>

<ul class="color-000">
    <li class="list-item">
       
        <b> <i class="bi bi-dot fs-6"></i>Create Your Profile:</b> 
        <span>Get your products professionally listed.</span>
    </li>
    <li class="list-item">
        
        <b><i class="bi bi-dot fs-6"></i>Verified Account or blue:</b> 
        <span><img src="{{ asset('public/assets/img/download.png') }}" alt="verified"> Earn a badge based on your profile and supporting documents.</span>
    </li>
    <li class="list-item">
       
        <b> <i class="bi bi-dot fs-6"></i>High Visibility:</b> 
        <span>Our site visitors keep your profile active and engaging.</span>
    </li>
    <li class="list-item">
        
        <b><i class="bi bi-dot fs-6"></i>Transparency:</b> 
        <span>See how your profile performs with clear traffic data.</span>
    </li>
    <li class="list-item">
       
        <b> <i class="bi bi-dot fs-6"></i>Boost Trust:</b> 
        <span>Showcase your profile on social media to gain more trust among buyers.</span>
    </li>
</ul>


                             <div class="text color-666 mb-20">
                        All orders come straight to your WhatsApp—no middlemen, no hassle. Let’s make it happen!
                        </div>
                    </div>
                </div>
                <div class="imgs mt-60 mb-100">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="img img-cover rounded-3 overflow-hidden mb-30 mb-lg-0">
                                <img src="{{ asset('public/assets/img/Trip History (1).png') }}" onContextMenu="return false;" alt="professional bike taxi riders">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img img-cover rounded-3 overflow-hidden">
                                <img src="{{ asset('public/assets/img/65.png') }}" onContextMenu="return false;" alt="seamless ecommerce delivery integration">
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="row gx-5">
                    <div class="col-lg-4">
                        <div class="section-head style-4">
                            <h2 class=""><span> Scenarios You <br> Can Explore</span> </h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                    <div class="faq style-3 style-4">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading1">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                                Handmade Crafts & Ornaments
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                Highlight your unique pieces and get direct orders. Perfect for artisans looking for 
                                                wider recognition
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading2">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                Boutique Clothing & Accessories
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                Showcase your latest designs and drive sales to a stylish audience.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading3">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                Homemade Snacks & Pickles
                                                </button>
                                            </h2>
                                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                Ship your Flavors to more customers, both locally and interstate
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading4">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                Electronics & Spare Parts
                                                </button>
                                            </h2>
                                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                List your products for garages, mechanics, or individual buyers.
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading5">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                Daily Essentials & Groceries
                                                </button>
                                            </h2>
                                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                Get bulk orders or serve customers nearby with essentials.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <!-- <div class="inf">
                            <div class="text color-666 mb-10">
                                Our approach was to present the site as a visual editorial platform with quarterly features based on events and occasions the brand was focused on. Each quarterly focus would be marked by the hero and custom tags that filter content.                            
                            </div>
                            <div class="text color-666 mb-20">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </div>
                            <div class="color-000 mt-50">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="d-flex mb-20 fw-bold">
                                            <div class="icon-20 d-inline-flex justify-content-center align-items-center rounded-circle overflow-hidden bg-blue4 text-white flex-shrink-0 me-3">
                                                <i class="bi bi-check"></i>
                                            </div>
                                            Create & Save your notes with multi-media
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex mb-20 fw-bold">
                                            <div class="icon-20 d-inline-flex justify-content-center align-items-center rounded-circle overflow-hidden bg-blue4 text-white flex-shrink-0 me-3">
                                                <i class="bi bi-check"></i>
                                            </div>
                                            Complete note editor with rich text options
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex mb-20 mb-lg-0 fw-bold">
                                            <div class="icon-20 d-inline-flex justify-content-center align-items-center rounded-circle overflow-hidden bg-blue4 text-white flex-shrink-0 me-3">
                                                <i class="bi bi-check"></i>
                                            </div>
                                            Web Clipper Extension
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex mb-0 fw-bold">
                                            <div class="icon-20 d-inline-flex justify-content-center align-items-center rounded-circle overflow-hidden bg-blue4 text-white flex-shrink-0 me-3">
                                                <i class="bi bi-check"></i>
                                            </div>
                                            Automatically sync in real time
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== end challenge ====== -->
  <!-- ====== start faq ====== -->
  <section class="faq section-padding style-4 pt-50">
            <div class="container">
                <div class="section-head text-center style-4">
                    <small class="title_small">Start a Delivery Business Too! </small>
                    <h2 class="mb-30"><span>Grow Your Business Beyond Sales </span> </h2>
                </div>
                <div class="content">
                    <div class="faq style-3 style-4">
                        <div class="accordion" id="accordionSt4">
                            <div class="row gx-5">
                                <div class="col-lg-6">
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading11">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                            Want to boost your income further?
                                            </button>
                                        </h2>
                                        <div id="collapse11" class="accordion-collapse collapse rounded-0" aria-labelledby="heading11" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                            <p>When you’re associated with us, you don’t just sell—you can run a delivery business
                                            too!</p><br>
                                            <p><b>• Additional Opportunities:</b> Our app offers bike taxis, auto cabs, and buy & delivery services.</p>
                                            <p><b>• Use Your Customer Base:</b> If you already have customers, you can add this as an extra business and earn more.</p>
                                            <p><b>• Special Discounts:</b> As a verified seller in our shop, you’ll also enjoy exclusive discounts on delivery services</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading12">
                                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                            Are You Still a Business Dreamer and Don’t Know Where to Start?
                                            </button>
                                        </h2>
                                        <div id="collapse12" class="accordion-collapse collapse rounded-0" aria-labelledby="heading12" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                            <p><b>Real-Life Scenarios—Kickstart Your Business</b></p>
                                            <p>• Explore these practical business ideas and discover how our platform and delivery services can help you take the next step.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading13">
                                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                            Spare Parts Business—From Workshop to Doorstep 
                                            </button>
                                        </h2>
                                        <div id="collapse13" class="accordion-collapse collapse rounded-0" aria-labelledby="heading13" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                          <p>  Tired of missing local customers?</p>
                                          <p>• Running a bike or car spare parts shop? Expand your reach and serve customers 
across your city and beyond!</p>
<p><b>1.Hyperlocal Delivery:</b> Effortlessly deliver small tools or parts quickly to local 
garages, mechanics, or DIY customers.</p>
<p><b>2.Interstate:</b> Ship bulk orders of spare parts to customers across cities or 
states.</p>
<p><b>3.No Website? No Problem:</b> Add your products to our platform and start 
receiving orders directly via WhatsApp.</p>
Explore how our delivery service can be a game-changer for your spare parts business.

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading44">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
                                            Stationery & Supplies—From Store to Office Desks 
                                            </button>
                                        </h2>
                                        <div id="collapse44" class="accordion-collapse collapse rounded-0" aria-labelledby="heading44" data-bs-parent="#accordionSt44">
                                            <div class="accordion-body">
                                          <p>  Want to serve local offices and schools?</p>
                                          <p>• Sell stationery or office supplies? Don’t wait for customers to walk in—expand your 
customer base with delivery options!</p>
<p><b>1.Hyperlocal Reach:</b> Deliver daily supplies to nearby schools, offices, or homes.<p>
<p><b>2.Interstate Supply:</b>  Ship bulk orders of stationery items like pens, files, or 
books across cities.<p>
<p><b>3.Additional Income:</b> Start a delivery business while serving your regular 
customers<p>
<p>Learn how our platform can help you serve local offices and expand your business.<p>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading55">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse55" aria-expanded="false" aria-controls="collapse55">
                                            Fashion & Accessories—From Your Store to Their Wardrobe
                                            </button>
                                        </h2>
                                        <div id="collapse55" class="accordion-collapse collapse rounded-0" aria-labelledby="heading55" data-bs-parent="#accordionSt54">
                                            <div class="accordion-body">
                                           <p> Thinking of starting your own boutique?</p>
                                           </p>• Sell clothes, shoes, or handmade accessories? Reach more customers and grow your 
brand beyond your local area.</p>
<p><b>1.Hyperlocal:</b> Deliver stylish outfits locally within hours to fashion-conscious buyers.</p>
<p><b>2.Interstate:</b>  Ship bulk orders of stationery items like pens, files, or books across cities.</p>
<p><b>3.Our Shop:</b> List your products, attract more buyers, and receive orders directly via WhatsApp.</p>
<p>See how our delivery service and platform can help take your boutique to the next level.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading6">
                                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            Home Foods—From Your Kitchen to Their Table
                                            </button>
                                        </h2>
                                        <div id="collapse6" class="accordion-collapse collapse rounded-0" aria-labelledby="heading6" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                            <p>  Want to serve fresh meals every day?</p>
                                            <p>• Start your home food business and cater to students, bachelors, or busy families in 
your area</p>
<p><b>1.Daily Meals:</b> Regularly deliver lunch or dinner to customers who crave home cooked meals.</p>
<p><b>2.Interstate:</b> Ship homemade snacks, pickles, or sweets to other states for broader reach.</p>
<p><b>3.Row Further:</b> Use our platform to display your food options and earn extra income with bike taxi or delivery services.</p>
Discover how you can deliver fresh food and start a new business using our platform.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading7">
                                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            Groceries & Essentials—From Market to Their Home
                                            </button>
                                        </h2>
                                        <div id="collapse7" class="accordion-collapse collapse rounded-0" aria-labelledby="heading7" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                          <p>  Need help managing local deliveries?</p>
                                          <p>• Running a grocery store? Add seamless delivery options today and expand your 
customer base.</p>
<p><b>1.Hyperlocal:</b> Deliver essentials like milk, vegetables, or grains to nearby 
homes, offering convenience to your customers</p>
<p><b>2.No Website? No Worries:</b> Use our shop to display your products and receive 
direct orders via WhatsApp.</p>
<p>Find out how our delivery service can streamline your grocery business and enhance local 
customer satisfaction</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end faq ====== -->

<br><br>
      
<section class="about section-padding style-4">
            <div class="content frs-content">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7">
                            <div class="info">
                                <div class="section-head style-4">
                                    <!-- <small class="title_small">Why Choose Us</small> -->
                                    <h2 class="mb-30"><span>Emergency Roadside Assistance & More!
                                    </span> </h2>
                                </div>
                                <p class="text mb-40">
                                Looking to expand your business? Here are some unique opportunities to utilize our platform:</p>
                                <ul>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-store"></i>
                                        </small>
                                        <h6 class="fw"><b>Fuel Delivery:</b> Offer on-demand fuel delivery to stranded vehicles – no more customers running out of fuel!</h6>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-sync"></i>
                                        </small>
                                        <h6 class="fw"> <b>Tyre Assistance:</b> Help customers with flat tyres by offering on-the-spot tyre changes or repairs.
                                        </h6>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-text-width"></i>
                                        </small>
                                        <h6 class="fw"><b>Raincoats & Essentials:</b> In unexpected weather? Deliver raincoats and other essentials to travelers on the go.</h6>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-tag"></i>
                                        </small>
                                        <h6 class="fw"><b>Dead Battery Solutions:</b> Offer new batteries with delivery or jump-start services.</h6>
                                    </li>
                                </ul>
                                <p class="text mb-40">
                                <b>
                                These are just a few ways you can enhance your service offerings and grow your business with us! By leveraging our platform, you can meet customer needs in emergencies, making their journeys hassle-free and your business&nbsp;indispensable.</b>
                                </p>
                            </div>
                        </div>    
                    
                    <div class="col-lg-5">
                            <div class="img mb-30 mb-lg-0">
                                <img src="{{ asset('public/assets/img/Road side assistance.gif') }}" onContextMenu="return false;" alt="Road side assistance">
                            </div>
                        </div>
                        
                    </div>
                </div>
         
</section>
 <!-- ====== start about ====== -->
 <section class="about section-padding style-4">
            <div class="content frs-content">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-5">
                            <div class="img mb-30 mb-lg-0">
                                <img src="{{ asset('public/assets/img/Fuel Delivery (2).gif') }}" alt="Fuel Delivery">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Why Choose Us</small>
                                    <h2 class="mb-30"><span>Your All-in-One Business Solution</span> </h2>
                                </div>
                                <p class="text mb-40">
                                Explore how our platform helps you grow your business while integrating seamless delivery services.

                                </p>
                                <ul>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-store"></i>
                                        </small>
                                        <h6 class="fw"><b>Shop Feature:</b> List your products and get orders directly via WhatsApp.</h6>
                                        </i> </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-sync"></i>
                                        </small>
                                        <h6 class="fw"> <b>Seamless Integration:</b> Already have a website or app? Add our delivery API <br>for
                                        hyperlocal and interstate deliveries.</h6>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-text-width"></i>
                                        </small>
                                        <h6 class="fw"><b>Run a Delivery Business:</b> Use our app’s bike taxi, auto cab, and delivery <br>services to
                                        earn additional income.</h6>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-tag"></i>
                                        </small>
                                        <h6 class="fw"><b> Exclusive Discounts:</b> Sellers on our shop enjoy special delivery service discounts.</h6>
                                    </li>
                                </ul>
                                <!-- <p class="text mb-40">
                                <b>Get ready-to-use free ad templates to promote your business—click to download! Prefer custom designs? Create your own on Canva for free. Posters are provided by Creviz - Multimedia Space, a trusted marketing service offering great value.
                                </b>
                                </p> -->
                            </div>
                        </div>
                    </div>
                </div>
              </section>
        <!-- ====== end about ====== -->
<Br>
        <!-- ====== start about ====== -->
 <section class="about-app style-5">
    <div class="container">
        <div class="content text-center"
             style="background-color:#a1dd0a2b;
                    border-radius:70px;
                    padding:40px 25px;
                    text-align:center;">

            <h2 class="color-000 mb-4">
                DO N KEY AI Business Assistant
            </h2>

            <p class="lh-lg mb-3 mx-auto" style="max-width:800px;">
                Turn your ideas into <strong>professional posters and business materials</strong> in minutes.
            </p>

            <p class="lh-lg mb-4 mx-auto" style="max-width:900px;">
                Need a <strong>poster, brochure, driver recruitment flyer, or business proposal?</strong><br>
                Simply start a <strong>WhatsApp chat</strong> with our
                <strong>AI Business Assistant</strong>. It will guide you step by step
                and create customized content for your business.
            </p>

            <a href="https://wa.me/919069067008?text=Hi%20DO%20N%20KEY%20AI%20Business%20Assistant,%20I%20would%20like%20to%20create%20marketing%20materials."
               target="_blank"
               class="btn rounded-pill bg-success text-white fw-bold px-5 py-3">
                
<i class="fas fa-robot me-2"></i>
<span>Chat with AI</span>
            </a>

        </div>
    </div>
</section>
   
    </main>
    <!--End-Contents-->
    <script>
// JavaScript to toggle the visibility of the extra content
document.getElementById('read-more-btn').addEventListener('click', function() {
    var extraContent = document.getElementById('extra-content');
    if (extraContent.style.display === 'none') {
        extraContent.style.display = 'block';
        this.innerHTML = '<small> <i class="fab fa-android me-2 pe-2 border-end"></i> Show Less </small>';
    } else {
        extraContent.style.display = 'none';
        this.innerHTML = '<small> <i class="fab fa-android me-2 pe-2 border-end"></i> Read More </small>';
    }
});
</script>

<script>
        // ---------- portfolio mixitup -----------
        var containerEl = document.querySelector('.mix-container');

        if (containerEl && typeof mixitup === 'function') {
            mixitup(containerEl);
        }
    </script>
<script>
        // Function to update the view count stored in localStorage
        function updateViewCount2() {
            // Check if the 'pageViewCount' exists in localStorage
            let viewCount2 = localStorage.getItem('pageViewCount2');

            // If it doesn't exist, initialize the view count to 0
            if (!viewCount2) {
                viewCount2 = 0;
            }

            // Increment the view count by 1
            viewCount2++;

            // Store the updated view count in localStorage
            localStorage.setItem('pageViewCount2', viewCount2);

            // Display the view count on the page
            document.getElementById('viewCount2').textContent = viewCount2;
        }

        // Call the function when the page loads
        window.onload = updateViewCount2;
    </script>
@endsection

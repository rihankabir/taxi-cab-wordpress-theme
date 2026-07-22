<?php
/*
Template Name: Contact Page
*/
get_header(); ?>
<!--navbar ends-->
<!--breadcrumb section starts-->
<section class="breadcumb-about service-breadcrumb">
    <div class="container-fluid">
        <div class="row">
<h2 class="text-center about-txt mt-5">Contact</h2>
        </div>
    </div>
</section>
<section class="under-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="custom-breadcrumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item text-decoration-none"><a href="index.html" class="text-decoration-none text-dark">Home</a></li>
    <li class="breadcrumb-item active brtxt" aria-current="page">Contact</li>
  </ol>
</nav>
            </div>
        </div>
    </div>
</section>

<!--breadcrumb section ends-->

<!--================================
    CONTACT AREA START
=================================-->

<section class="cab_contact_section py-5">

    <div class="container">

        <!-- Section Title -->

        <div class="cab_contact_heading text-center mb-5">

            <h2>Contact Us</h2>

            <div class="cab_contact_shape">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <p>
                Have questions or need a ride? Our team is available 24/7.
                Contact us anytime and we'll be happy to assist you.
            </p>

        </div>

        <div class="row g-5 align-items-center">

            <!-- Contact Information -->

            <div class="col-lg-5">

                <div class="cab_contact_card">

                    <div class="cab_info_item">

                        <div class="cab_info_icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>
                            <h4>Office Address</h4>
                            <p>56/Taylor Road, London, United Kingdom</p>
                        </div>

                    </div>

                    <div class="cab_info_item">

                        <div class="cab_info_icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div>
                            <h4>Phone Number</h4>
                            <p>+44 20 7946 0123</p>
                        </div>

                    </div>

                    <div class="cab_info_item">

                        <div class="cab_info_icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div>
                            <h4>Email Address</h4>
                            <p> gettaxi@taxicab.co.uk</p>
                        </div>

                    </div>

                    <div class="cab_info_item">

                        <div class="cab_info_icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>

                        <div>
                            <h4>Working Hours</h4>
                            <p>Open 24 Hours - 7 Days a Week</p>
                        </div>

                    </div>

                    <div class="cab_social_area">

                        <a href="#"><i class="fab fa-facebook-f"></i></a>

                        <a href="#"><i class="fab fa-twitter"></i></a>

                        <a href="#"><i class="fab fa-instagram"></i></a>

                        <a href="#"><i class="fab fa-linkedin-in"></i></a>

                    </div>

                </div>

            </div>

            <!-- Contact Form -->

            <div class="col-lg-7">

                <div class="cab_form_card">

                    <form id="loginfrm">

                        <div class="row">

                            <div class="col-md-6 mb-4">
                                <input type="text" id="name" class="form-control cab_input" placeholder="Full Name">
                                <p class="text-start nameerror"></p>
                            </div>

                            <div class="col-md-6 mb-4">
                                <input type="email" id="email" class="form-control cab_input" placeholder="Email Address">
                                <p class="text-start emailerror"></p>
                            </div>

                            <div class="col-md-6 mb-4">
                                <input type="text" id="phonenumber" class="form-control cab_input" placeholder="Phone Number">
                                <p class="text-start phonenumbererror"></p>
                            </div>

                            <div class="col-md-6 mb-4">
                                <input type="text" id="subject" class="form-control cab_input" placeholder="Subject">
                                <p class="text-start subjecterror"></p>
                            </div>

                            <div class="col-12 mb-4">
                                <textarea rows="6" id="texts" class="form-control cab_input" placeholder="Write Your Message"></textarea>
                                <p class="text-start texterror"></p>
                            </div>

                            <div class="col-12">

                                <button class="cab_submit_btn" type="submit">

                                    Send Message

                                    <i class="fa-solid fa-paper-plane ms-2"></i>

                                </button>
                                <p class="text-center successmsg"></p>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="cab_map_section">

     <iframe
        src="https://maps.google.com/maps?q=London,%20United%20Kingdom&t=&z=12&ie=UTF8&iwloc=&output=embed"
        width="100%"
        height="450"
        style="border:0;"
        loading="lazy"
        allowfullscreen>
    </iframe>

</section>


<!--footer section starts-->
<?php get_footer(); ?>
<?php
/*
Template Name: About Page
*/
get_header();
?>
<!--navbar ends-->
<section class="breadcumb-about">
    <div class="container-fluid">
        <div class="row">
<h2 class="text-center about-txt mt-5">About Us</h2>
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
    <li class="breadcrumb-item active brtxt" aria-current="page">Library</li>
  </ol>
</nav>
            </div>
        </div>
    </div>
</section>
<section class="intro">

    <div class="container">

        <div class="row align-items-center">

            <!-- Left Side -->
            <div class="col-lg-6">

                <h1 class="text-start mb-4">
                    <span class="YELLO">WHO</span> WE ARE
                </h1>

                <p class="mb-5">
                    We are a reliable and customer-focused Taxi Cab service dedicated to providing safe, comfortable, and timely transportation.
Our professional drivers ensure every ride is smooth, affordable, and hassle-free, no matter the distance or destination.We provide premium luxury cars with world-class customer service.
                </p>

                <!-- Counter Starts -->
                <div class="row">

                    <div class="col-4">

                        <h2 class="counter"
                            data-target="100"
                            data-symbol="%">
                            0
                        </h2>

                        <p class="abtxt">Luxury Cars</p>

                    </div>

                    <div class="col-4">

                        <h2 class="counter"
                            data-target="1000"
                            data-symbol="+">
                            0
                        </h2>

                        <p class="abtxt">Happy Customers</p>

                    </div>

                    <div class="col-4">

                        <h2 class="counter"
                            data-target="500"
                            data-symbol="+">
                            0
                        </h2>

                        <p class="abtxt">Cars Available</p>

                    </div>

                </div>
                <!-- Counter Ends -->

            </div>

            <!-- Right Side -->
            <div class="col-lg-6">

                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="About Us" class="img-fluid rounded" data-aos="fade-up">

            </div>

        </div>

    </div>

</section>
  <section class="partner-section">

    <div class="overlay"></div>

    <div class="container">

        <div class="row justify-content-center align-items-center g-4">
<div class="col-lg col-md-4 col-6 text-center">
    <img src="https://cdn-icons-png.flaticon.com/512/3097/3097144.png" class="partner-logo img-fluid" alt="Taxi Partner">
</div>

<div class="col-lg col-md-4 col-6 text-center">
    <img src="https://cdn-icons-png.flaticon.com/512/744/744502.png" class="partner-logo img-fluid" alt="Ride Partner">
</div>

<div class="col-lg col-md-4 col-6 text-center">
    <img src="https://cdn-icons-png.flaticon.com/512/2972/2972215.png" class="partner-logo img-fluid" alt="Cab Company">
</div>

<div class="col-lg col-md-4 col-6 text-center">
    <img src="https://cdn-icons-png.flaticon.com/512/854/854894.png" class="partner-logo img-fluid" alt="Airport Transfer">
</div>

<div class="col-lg col-md-4 col-6 text-center">
    <img src="https://cdn-icons-png.flaticon.com/512/3202/3202926.png" class="partner-logo img-fluid" alt="Luxury Car">
</div>
            
           

           
            

            

        </div>

    </div>

</section>
<!--=============================
    TESTIMONIAL AREA START
==============================-->
<section class="testimonial_area py-5">
    <div class="container">

        <div class="row align-items-center mb-5">

            <div class="col-lg-6">
                <div class="section_heading">
                    <h2>Testimonials</h2>

                    <div class="heading_line">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 text-lg-end text-center mt-4 mt-lg-0">

                <button class="testimonial_prev">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <button class="testimonial_next">
                    <i class="fas fa-chevron-right"></i>
                </button>

            </div>

        </div>

        <div class="owl-carousel testimonial_slider">

            <!-- Item -->

            <div class="testimonial_item">

                <div class="testimonial_img">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200" alt="">
                </div>

                <h4>Stefy Graffi</h4>

                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>

                <p>
                    "Excellent taxi service! The driver arrived on time, the
                    vehicle was spotless, and the ride was smooth and
                    comfortable. Highly recommended!"
                </p>

            </div>

            <!-- Item -->

            <div class="testimonial_item">

                <div class="testimonial_img">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200" alt="">
                </div>

                <h4>James Peter</h4>

                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>

                <p>
                    "Booking was super easy, the fare was affordable and the
                    driver was very professional. Definitely my favorite taxi
                    company."
                </p>

            </div>

            <!-- Item -->

            <div class="testimonial_item">

                <div class="testimonial_img">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?w=200" alt="">
                </div>

                <h4>Sarah Johnson</h4>

                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>

                <p>
                    "Friendly driver, clean cab and excellent customer service.
                    I use this taxi every week for my office commute."
                </p>

            </div>

            <!-- Item -->

            <div class="testimonial_item">

                <div class="testimonial_img">
                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=200" alt="">
                </div>

                <h4>David Smith</h4>

                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>

                <p>
                    "Great experience! Fast pickup, safe driving and very polite
                    staff. I will definitely book again."
                </p>

            </div>

        </div>

    </div>
</section>
<section class="drivers-section py-5">

    <div class="container">

        <div class="section-title text-center mb-5">

            <h2>Our Drivers</h2>

            <div class="title-shape">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <p>
                Meet our professional and experienced drivers committed to
                providing a safe, comfortable, and reliable journey every time.
            </p>

        </div>

        <div class="row gy-5">

            <!-- Driver -->

            <div class="col-lg-3 col-md-6">

                <div class="driver-box">

                    <div class="driver-img">

                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=700" alt="">

                        <div class="driver-overlay">

                            <a href="#"><i class="fab fa-facebook-f"></i></a>

                            <a href="#"><i class="fab fa-twitter"></i></a>

                            <a href="#"><i class="fab fa-linkedin-in"></i></a>

                        </div>

                    </div>

                    <h4>John Martin</h4>

                    <span>Luxury Driver</span>

                </div>

            </div>

            <!-- Driver -->

            <div class="col-lg-3 col-md-6">

                <div class="driver-box">

                    <div class="driver-img">

                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=700" alt="">

                        <div class="driver-overlay">

                            <a href="#"><i class="fab fa-facebook-f"></i></a>

                            <a href="#"><i class="fab fa-twitter"></i></a>

                            <a href="#"><i class="fab fa-linkedin-in"></i></a>

                        </div>

                    </div>

                    <h4>Paul Heyman</h4>

                    <span>Van Driver</span>

                </div>

            </div>

            <!-- Driver -->

            <div class="col-lg-3 col-md-6">

                <div class="driver-box">

                    <div class="driver-img">

                        <img src="https://images.unsplash.com/photo-1504257432389-52343af06ae3?w=700" alt="">

                        <div class="driver-overlay">

                            <a href="#"><i class="fab fa-facebook-f"></i></a>

                            <a href="#"><i class="fab fa-twitter"></i></a>

                            <a href="#"><i class="fab fa-linkedin-in"></i></a>

                        </div>

                    </div>

                    <h4>Dwayne Johnson</h4>

                    <span>Limo Driver</span>

                </div>

            </div>

            <!-- Driver -->

            <div class="col-lg-3 col-md-6">

                <div class="driver-box">

                    <div class="driver-img">

                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=700" alt="">

                        <div class="driver-overlay">

                            <a href="#"><i class="fab fa-facebook-f"></i></a>

                            <a href="#"><i class="fab fa-twitter"></i></a>

                            <a href="#"><i class="fab fa-linkedin-in"></i></a>

                        </div>

                    </div>

                    <h4>Fernandez</h4>

                    <span>SUV Driver</span>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="feature-area">

    <div class="feature-overlay">

        <div class="container">

            <div class="row">

                <!-- Item -->

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="feature-box">

                        <div class="feature-icon">
                            <i class="fa-solid fa-dollar-sign"></i>
                        </div>

                        <div class="feature-content">
                            <h3>Best Price Guaranteed</h3>

                            <p>
                                We offer affordable taxi fares with no hidden
                                charges. Enjoy premium service at the best
                                price every time.
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Item -->

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="feature-box">

                        <div class="feature-icon">
                            <i class="fa-solid fa-headset"></i>
                        </div>

                        <div class="feature-content">

                            <h3>24/7 Customer Care</h3>

                            <p>
                                Our support team is available 24 hours a day
                                to assist with bookings and travel inquiries.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Item -->

                <div class="col-lg-4 col-md-12">

                    <div class="feature-box">

                        <div class="feature-icon">
                            <i class="fa-regular fa-calendar-days"></i>
                        </div>

                        <div class="feature-content">

                            <h3>Easy Bookings</h3>

                            <p>
                                Book your taxi online in just a few clicks.
                                Fast, simple, and convenient whenever you
                                need a ride.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--footer section starts-->
<?php get_footer(); ?>

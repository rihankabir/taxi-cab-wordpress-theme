<?php
/*
Template Name: Service Page
*/
get_header();
?>

<!--navbar ends-->
<!--breadcrumb section starts-->
<section class="breadcumb-about service-breadcrumb"style="background-image:url('<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'service_banner_image' ), 'full' ) ); ?>');">
    <div class="container-fluid">
        <div class="row">
<h2 class="text-center about-txt mt-5"><?php

echo esc_html(

    get_theme_mod(

        'service_banner_heading',

        'Services'

    )

);

?></h2>
        </div>
    </div>
</section>
<section class="under-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="custom-breadcrumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item text-decoration-none"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-decoration-none text-dark">Home</a></li>
    <li class="breadcrumb-item active brtxt" aria-current="page"> <?php the_title(); ?></li>
  </ol>
</nav>
            </div>
        </div>
    </div>
</section>

<!--breadcrumb section ends-->
<!--our service fleet start-->
<section class="services-section py-5">
    <div class="container">

        <div class="section-title text-center mb-5">
            <h2><?php echo esc_html(get_theme_mod('service_page_heading','Our Services')); ?> </h2>

            <div class="title-divider">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <p>
                <?php

echo esc_html(

get_theme_mod(

'service_page_description',

'We provide reliable, safe, and affordable transportation services tailored to your travel needs.'

)

);

?>
            </p>
        </div>

        

    </div>
</section>

<!--our service fleet end-->

<!--=========================
    CAB ADVANTAGE SECTION STARTS
==========================-->

<section class="cab_advantages_area">

    <div class="cab_advantages_overlay">

        <div class="container">

            <div class="row g-4">

                <!-- Item 1 -->
                <div class="col-lg-4 col-md-6">

                    <div class="cab_advantage_box">

                        <div class="cab_advantage_icon">
                            <i class="fa-solid fa-dollar-sign"></i>
                        </div>

                        <div class="cab_advantage_content">

                            <h3>Best Price Guaranteed</h3>

                            <p>
                                Affordable taxi fares with transparent pricing and
                                no hidden charges.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Item 2 -->
                <div class="col-lg-4 col-md-6">

                    <div class="cab_advantage_box">

                        <div class="cab_advantage_icon">
                            <i class="fa-solid fa-headset"></i>
                        </div>

                        <div class="cab_advantage_content">

                            <h3>24/7 Customer Care</h3>

                            <p>
                                Our support team is available day and night to
                                assist every journey.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Item 3 -->
                <div class="col-lg-4">

                    <div class="cab_advantage_box">

                        <div class="cab_advantage_icon">
                            <i class="fa-regular fa-calendar-days"></i>
                        </div>

                        <div class="cab_advantage_content">

                            <h3>Easy Bookings</h3>

                            <p>
                                Book your taxi in seconds using our fast and
                                convenient booking system.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="cab_advantages_bottom"></div>

</section>
<!--CAB ADVANTAGE SECTION ENDS-->










<!--footer section starts-->
<?php get_footer(); ?>
<?php
/*
Template Name: About Page
*/
get_header();
?>
<!--navbar ends-->
<?php
$banner_image = wp_get_attachment_image_url(
    get_theme_mod( 'about_banner_image' ),
    'full'
);
?>
<section class="breadcumb-about" style="background-image: url('<?php echo esc_url( $banner_image ); ?>');">
    

    <div class="container-fluid">
        <div class="row">
<h2 class="text-center about-txt mt-5"><?php

echo esc_html(

get_theme_mod(

'about_banner_heading',

'About Us'

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
    <li class="breadcrumb-item text-decoration-none"><a href="<?php echo esc_url(home_url('/')); ?>"class="text-decoration-none text-dark">

Home

</a></li>
    <li class="breadcrumb-item active brtxt" aria-current="page"><?php

echo esc_html(

get_theme_mod(

'about_banner_breadcrumb',

'About Us'

)

);

?></li>
  </ol>
</nav>
            </div>
        </div>
    </div>
</section>
<!--intro section start -->
<section class="intro">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h1 class="text-start mb-4">

    <span class="YELLO">

        <?php
        echo esc_html(
            get_theme_mod(
                'about_intro_yellow_text',
                'WHO'
            )
        );
        ?>

    </span>

    <?php
    echo esc_html(
        get_theme_mod(
            'about_intro_heading',
            'WE ARE'
        )
    );
    ?>

</h1>

<p class="mb-5">

<?php
echo nl2br(
esc_html(
get_theme_mod(
'about_intro_description'
)
)
);
?>

</p>

<div class="row">

<?php

$counter = new WP_Query(
    array(
        'post_type'      => 'about_counter',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC'
    )
);

if($counter->have_posts()) :

while($counter->have_posts()) :

$counter->the_post();

$number = get_post_meta(
    get_the_ID(),
    '_about_counter_number',
    true
);

$symbol = get_post_meta(
    get_the_ID(),
    '_about_counter_symbol',
    true
);

?>

<div class="col-4">

<h2
class="counter"
data-target="<?php echo esc_attr($number); ?>"
data-symbol="<?php echo esc_attr($symbol); ?>"
>

0

</h2>

<p class="abtxt">

<?php the_title(); ?>

</p>

</div>

<?php

endwhile;

wp_reset_postdata();

endif;

?>

</div>

</div>

<div class="col-lg-6">

<?php

echo wp_get_attachment_image(

get_theme_mod('about_intro_image'),

'large',

false,

array(

'class'=>'img-fluid rounded',

'data-aos'=>'fade-up'

)

);

?>

</div>

</div>

</div>

</section>

<!--intro section ends -->

<!--partner section starts -->
<section class="partner-section">

    <div class="overlay"></div>

    <div class="container">

        <div class="row justify-content-center align-items-center g-4">

            <?php

            $partners = new WP_Query(
                array(
                    'post_type'      => 'about_partner',
                    'posts_per_page' => -1,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC'
                )
            );

            if ( $partners->have_posts() ) :

                while ( $partners->have_posts() ) :

                    $partners->the_post();

                    $icon = get_post_meta(
                        get_the_ID(),
                        '_about_partner_icon',
                        true
                    );

            ?>

            <div class="col-lg col-md-4 col-6 text-center">

                <i class="<?php echo esc_attr( $icon ); ?> partner-logo"></i>

            </div>

            <?php

                endwhile;

                wp_reset_postdata();

            endif;

            ?>

        </div>

    </div>

</section>

  
<!-- partner section ends-->
<!--=============================
    TESTIMONIAL AREA START
==============================-->
<section class="testimonial_area py-5">
    <div class="container">

        <div class="row align-items-center mb-5">

            <div class="col-lg-6">
                <div class="section_heading">
                    <h2><?php

echo esc_html(

get_theme_mod(

'testimonial_heading',

'Testimonials'

)

);

?></h2>

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

<?php

$testimonial = new WP_Query(

array(

'post_type'=>'about_testimonial',

'posts_per_page'=>-1,

'orderby'=>'menu_order',

'order'=>'ASC'

)

);

if($testimonial->have_posts()) :

while($testimonial->have_posts()) :

$testimonial->the_post();

$rating = get_post_meta(

get_the_ID(),

'_testimonial_rating',

true

);

?>

<div class="testimonial_item">

<div class="testimonial_img">

<?php

the_post_thumbnail(

'thumbnail',

array(

'class'=>'img-fluid rounded-circle'

)

);

?>

</div>

<h4>

<?php the_title(); ?>

</h4>

<div class="rating">

<?php

for($i=1;$i<=5;$i++) :

if($i <= $rating){

?>

<i class="fas fa-star"></i>

<?php

}else{

?>

<i class="far fa-star"></i>

<?php

}

endfor;

?>

</div>

<p>

<?php the_content(); ?>

</p>

</div>

<?php

endwhile;

wp_reset_postdata();

endif;

?>

</div>

            

        </div>

    </div>
</section>
<!--drivers section starts-->
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

<!--drivers section ends-->

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

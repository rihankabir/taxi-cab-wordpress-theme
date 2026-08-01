<?php
/*
Template Name: Contact Page
*/
get_header(); ?>
<!--navbar ends-->
<!--breadcrumb section starts-->
<section class="breadcumb-about service-breadcrumb"style="background-image:url('<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'contact_banner_image' ) ) ); ?>');">
    <div class="container-fluid">
        <div class="row">
<h2 class="text-center about-txt mt-5"><?php

echo esc_html(

get_theme_mod(

'contact_page_title',

'Contact'

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
    <li class="breadcrumb-item active brtxt" aria-current="page"><?php

echo esc_html(

get_theme_mod(

'contact_breadcrumb_current',

'Contact'

)

);

?></li>
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

            <h2><?php

echo esc_html(

get_theme_mod(

'contact_heading',

'Contact Us'

)

);

?></h2>

            <div class="cab_contact_shape">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <p>
                <?php

echo esc_html(

get_theme_mod(

'contact_description'

)

);

?>
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
                            <h4><?php

echo esc_html(

get_theme_mod(

'contact_address_title',

'Office Address'

)

);

?></h4>
                            <p><?php

echo nl2br(

esc_html(

get_theme_mod(

'contact_address'

)

)

);

?>
</p>
                        </div>

                    </div>

                    <div class="cab_info_item">

                        <div class="cab_info_icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div>
                            <h4><?php

echo esc_html(

get_theme_mod(

'contact_phone_title',

'Phone Number'

)

);

?></h4>
                            <p><a href="tel:<?php echo esc_attr( get_theme_mod( 'contact_phone' ) ); ?>"class="text-decoration-none cphone">

<?php

echo esc_html(

get_theme_mod(

'contact_phone'

)

);

?>

</a></p>
                        </div>

                    </div>

                    <div class="cab_info_item">

                        <div class="cab_info_icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div>
                            <h4><?php

echo esc_html(

get_theme_mod(

'contact_email_title',

'Email Address'

)

);

?></h4>
                            <p><a href="mailto:<?php echo esc_attr( get_theme_mod( 'contact_email' ) ); ?>"class="text-decoration-none cphone">

<?php

echo esc_html(

get_theme_mod(

'contact_email'

)

);

?>

</a>
</p>
                        </div>

                    </div>

                    <div class="cab_info_item">

                        <div class="cab_info_icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>

                        <div>
                            <h4><?php

echo esc_html(

get_theme_mod(

'contact_hours_title',

'Working Hours'

)

);

?></h4>
                            <p><?php

echo esc_html(

get_theme_mod(

'contact_hours'

)

);

?></p>
                        </div>

                    </div>

                    <div class="cab_social_area">

                        <a href="<?php echo esc_url( get_theme_mod( 'contact_facebook' ) ); ?>"><i class="fab fa-facebook-f"></i></a>

                        <a href="<?php echo esc_url( get_theme_mod( 'contact_twitter' ) ); ?>"><i class="fab fa-twitter"></i></a>

                        <a href="<?php echo esc_url( get_theme_mod( 'contact_instagram' ) ); ?>"><i class="fab fa-instagram"></i></a>

                        <a href="<?php echo esc_url( get_theme_mod( 'contact_linkedin' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>

                    </div>

                </div>

            </div>

            <!-- Contact Form -->

            <div class="col-lg-7">

                <div class="cab_form_card">

                    <form id="loginfrm">

                        <div class="row">


                            <div class="col-md-6 mb-4">
                                <?php wp_nonce_field(
    'taxi_contact_nonce',
    'taxi_contact_nonce'
); ?>
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

src="<?php echo esc_url( get_theme_mod( 'contact_map_url' ) ); ?>"

width="100%"

height="450"

style="border:0;"

loading="lazy"

allowfullscreen>

</iframe>
     

</section>


<!--footer section starts-->
<?php get_footer(); ?>
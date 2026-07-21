<section class="about justify-content-center" data-aos="fade-up">
<div class="container">
    <div class="row">
<div class="col-lg-6 col-md-6">
    <?php

$image_id = get_theme_mod( 'about_image' );

if ( $image_id ) {

    echo wp_get_attachment_image(
        $image_id,
        'full',
        false,
        array(
            'class' => 'img-fluid','about-img',
            'alt'   => 'About Image',
        )
    );

}
?>
</div>
<div class="col-lg-6 col-md-6">
    <h2 class="text-start about-txt"> <?php echo esc_html( get_theme_mod( 'about_small_heading', 'About Us' ) ); ?></h2>
    <h1 class="text-start about-txt1 mt-3"><?php echo wp_kses_post(get_theme_mod('about_heading')); ?></h1>
    <p class="text-start txt5 mt-3"><?php echo wp_kses_post( get_theme_mod( 'about_description' ) ); ?>
</p>


<?php
$button_text = get_theme_mod( 'about_button_text', 'Read More' );
$button_url  = get_theme_mod( 'about_button_url', '#' );

if ( ! empty( $button_text ) ) :
?>

<a href="<?php echo esc_url( $button_url ); ?>" class="btn about-btn">

    <?php echo esc_html( $button_text ); ?>

</a>

<?php endif; ?>
</div>



    </div>
</div>
</section>
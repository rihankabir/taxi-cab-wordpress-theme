<section class="promod">
<div class="container">
<div class="row">

<div class="col-lg-6 col-md-6 col-12">

<div class="promo-banner">

<?php
echo wp_get_attachment_image(
    get_theme_mod('promo_image_one'),
    'large',
    false,
    array(
        'class' => 'img-fluid rounded'
    )
);
?>

<div class="hero-content">

<h1 class="text promotxts">

<span class="worldtxt">

<?php
echo esc_html(
    get_theme_mod(
        'promo_discount',
        '-50%'
    )
);
?>

</span>

<?php
echo esc_html(
    get_theme_mod(
        'promo_heading_one',
        'ON FIRST ORDER'
    )
);
?>

</h1>

<h2 class="text">

<?php
echo esc_html(
    get_theme_mod(
        'promo_sub_heading',
        'SPECIAL OFFER'
    )
);
?>

</h2>

</div>

</div>

</div>

<div class="col-lg-6 col-md-6 col-12">

<div class="promo-banner">

<?php
echo wp_get_attachment_image(
    get_theme_mod('promo_image_two'),
    'large',
    false,
    array(
        'class' => 'img-fluid rounded'
    )
);
?>

<div class="hero-content">

<h1 class="text-center cartxt">

<?php
echo esc_html(
    get_theme_mod(
        'promo_heading_two',
        'Business Car Rental'
    )
);
?>

</h1>

<p class="text-center">

<?php
echo esc_html(
    get_theme_mod(
        'promo_description_two',
        'If U need a Luxury Car for Business, We are here to provide'
    )
);
?>

</p>

</div>

</div>

</div>

</div>
</div>
</section>
<section class="brands py-5">

<div class="container">

<div class="row align-items-center g-4">

<div class="col-12 col-lg-3 text-center text-lg-start">

<h5 class="brandtxt">

<?php
echo esc_html(
get_theme_mod(
'brand_small_heading',
'OUR PARTNERS'
)
);
?>

</h5>

<h2 class="brandtxt1">

<?php
echo esc_html(
get_theme_mod(
'brand_heading',
'AND CLIENTS'
)
);
?>

</h2>

</div>

<div class="col-12 col-lg-9">

<div class="row g-4 justify-content-center">

<?php

$brands = new WP_Query(

array(

'post_type'=>'brand',

'posts_per_page'=>-1,

'orderby'=>'menu_order',

'order'=>'ASC'

)

);

if( $brands->have_posts() ) :

while( $brands->have_posts() ) :

$brands->the_post();

$url = get_post_meta(
get_the_ID(),
'_brand_url',
true
);

?>

<div class="col-6 col-sm-4 col-md-4 col-lg">

<div class="brand-item">

<a href="<?php echo esc_url( $url ); ?>">

<?php the_post_thumbnail(

'medium',

array(

'class'=>'img-fluid'

)

); ?>

</a>

</div>

</div>

<?php

endwhile;

wp_reset_postdata();

endif;

?>

</div>

</div>

</div>

</div>

</section>
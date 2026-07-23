<section class="paralax">
<div class="container">
  <h2 class="text-center ptext"><?php
echo esc_html(
    get_theme_mod(
        'app_small_heading',
        'Get More Benefits'
    )
);
?></h2>
<h1 class="text-center text-bold p1txt"><?php echo esc_html(get_theme_mod('app_heading','DOWNLOAD THE APP')); ?> </h1>
  <div class="row">
<div class="col-md-4">
<?php

$left = new WP_Query(

    array(

        'post_type' => 'app_feature',

        'posts_per_page' => -1,

        'orderby' => 'menu_order',

        'order' => 'ASC',

        'meta_key' => '_feature_position',

        'meta_value' => 'left'

    )

);

while ( $left->have_posts() ) :

$left->the_post();

$number = get_post_meta(
    get_the_ID(),
    '_feature_number',
    true
);

?>

    <!-- Item 1 -->
    <div class="promo-box mt-5 d-flex align-items-start mb-4" data-aos="fade-right">

        <div class="promo">
            <span class="num"> <?php echo esc_html( $number ); ?>
</span>
        </div>

        <div class="promotxt">
            <h2 class="txtt1"><?php the_title(); ?></h2>

            <h3 class="white">
               <?php the_content(); ?>
            </h3>
        </div>

    </div>
<?php endwhile; wp_reset_postdata(); ?>

</div>
<div class="col-md-4">
  <?php

$image = get_theme_mod( 'app_image' );

echo wp_get_attachment_image(

    $image,

    'large',

    false,

    array(

        'class' => 'img-fluid mt-3 w-100',
        'data-aos'=>"fade-up"

    )

);

?>
</div>
<div class="col-md-4">

<?php

$left = new WP_Query(

    array(

        'post_type' => 'app_feature',

        'posts_per_page' => -1,

        'orderby' => 'menu_order',

        'order' => 'ASC',

        'meta_key' => '_feature_position',

        'meta_value' => 'right'

    )

);

while ( $left->have_posts() ) :

$left->the_post();

$number = get_post_meta(
    get_the_ID(),
    '_feature_number',
    true
);

?>
    <!-- Item 1 -->
    <div class="promo-box mt-5 d-flex align-items-start mb-4" data-aos="fade-left">

        <div class="promo">
            <span class="num"><?php echo esc_html( $number ); ?>
</span>
        </div>

        <div class="promotxt">
            <h2 class="txtt1"> <?php the_title(); ?></h2>

            <h3 class="white">
                 <?php the_content(); ?>
            </h3>
        </div>

    </div>

    <?php endwhile; wp_reset_postdata(); ?>

    </div>

</div>


  </div>
</div>
</section>
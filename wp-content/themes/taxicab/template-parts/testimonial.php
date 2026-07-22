<section class="testimonials">
<div class="container">
  <h1 class="text-center txtylo">Happy Client's</h1>
  <h3 class="text-center text-bold txtdrk">Testimonials</h3>
  <div class="row">
<div class="owl-carousel testimonial-slider mt-5">
    <?php
$args = array(

'post_type'=>'testimonial',

'posts_per_page'=>-1,

'orderby'=>'menu_order',

'order'=>'ASC'

);

$testimonial = new WP_Query($args);

if($testimonial->have_posts()) :

while($testimonial->have_posts()) :

$testimonial->the_post();

?>
    <div class="testimonial">
    <?php

if(has_post_thumbnail()){

the_post_thumbnail(

'thumbnail',

array(

'class'=>'client-img img-fluid rounded-circle'

)

);

}

?>

    <h4><?php the_title(); ?> </h4>

    <span>CEO, ABC Company</span>

    <div class="stars">
        ★★★★★
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
</section>
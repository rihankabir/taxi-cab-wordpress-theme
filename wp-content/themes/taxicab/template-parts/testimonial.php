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
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial client1.jpg" alt="Client" class="img-fluid">

    <h4>John Doe</h4>

    <span>CEO, ABC Company</span>

    <div class="stars">
        ★★★★★
    </div>

    <p>
        Excellent service and outstanding support.
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
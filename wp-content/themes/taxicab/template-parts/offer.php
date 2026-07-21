<section class="offers card-carousel-section" data-aos="fade-up">

    <div class="container">

        <h3 class="ofertxt text-center mb-2">

            <?php
            echo esc_html(
                get_theme_mod(
                    'offer_small_heading',
                    'WHAT WE OFFER'
                )
            );
            ?>

        </h3>

        <h1 class="text-center">

            <?php
            echo esc_html(
                get_theme_mod(
                    'offer_heading',
                    "We're a Company of Talented"
                )
            );
            ?>

        </h1>

        <div class="custom-slider mt-5">

            <div class="owl-carousel offers-carousel">

                <?php

                $services = new WP_Query(

                    array(

                        'post_type' => 'offer',

                        'posts_per_page' => -1,

                        'orderby' => 'menu_order',

                        'order' => 'ASC'

                    )

                );

                if ( $services->have_posts() ) :

                    while ( $services->have_posts() ) :

                        $services->the_post();

                        $icon = get_post_meta(

                            get_the_ID(),

                            '_offer_icon',

                            true

                        );

                ?>

                    <div class="custom-card text-center">

                        <i class="<?php echo esc_attr( $icon ); ?>"></i>

                        <h3>

                            <?php the_title(); ?>

                        </h3>

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
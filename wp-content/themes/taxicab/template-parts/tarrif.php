<section class="tarrif" data-aos="fade-up">

    <div class="container">

        <h1 class="text-center">

            <span class="TRTEXT">

                <?php echo esc_html( get_theme_mod( 'tariff_small_heading', 'SEE' ) ); ?>

            </span>

            <?php echo esc_html( get_theme_mod( 'tariff_heading', 'OUR' ) ); ?>

            <span class="TRTEXT1">

                <?php echo esc_html( get_theme_mod( 'tariff_heading_last', 'TARIFFS' ) ); ?>

            </span>

        </h1>

        <div class="row g-4 mt-5">

            <?php

            $args = array(

                'post_type'      => 'tariff',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC'

            );

            $tariffs = new WP_Query( $args );

            if ( $tariffs->have_posts() ) :

                while ( $tariffs->have_posts() ) :

                    $tariffs->the_post();

                    $price = get_post_meta(
                        get_the_ID(),
                        '_tariff_price',
                        true
                    );

                    $unit = get_post_meta(
                        get_the_ID(),
                        '_tariff_unit',
                        true
                    );

                    $featured = get_post_meta(
                        get_the_ID(),
                        '_tariff_featured',
                        true
                    );

            ?>

            <div class="col-lg-3 col-md-6">

                <div class="tariff-card <?php echo $featured ? 'active-card' : ''; ?>">

                    <?php if ( $featured ) : ?>

                        <div class="corner">

                            <i class="fa-solid fa-star"></i>

                        </div>

                    <?php endif; ?>

                    <?php
                    if ( has_post_thumbnail() ) {

                        the_post_thumbnail(
                            'large',
                            array(
                                'class' => 'img-fluid'
                            )
                        );

                    }
                    ?>

                    <h3>

                        <?php the_title(); ?>

                    </h3>

                    <p>

                        <?php the_content(); ?>

                    </p>

                    <div class="price">

                        $<?php echo esc_html( $price ); ?>

                        <span>

                            <?php echo esc_html( $unit ); ?>

                        </span>

                    </div>

                </div>

            </div>

            <?php

                endwhile;

                wp_reset_postdata();

            endif;

            ?>

        </div>

    </div>

</section>
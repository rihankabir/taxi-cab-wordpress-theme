<?php

$args = array(
    'post_type'      => 'hero_slide',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
);

$hero = new WP_Query( $args );

?>

<!-- =========================
     HERO SLIDER START
========================= -->

<section class="hero-slider">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div
                    id="heroSlider"
                    class="carousel slide carousel-fade"
                    data-bs-ride="carousel"
                    data-bs-interval="4000">

                    <div class="carousel-inner">

                        <?php
                        if ( $hero->have_posts() ) :

                            $count = 0;

                            while ( $hero->have_posts() ) :

                                $hero->the_post();

                                $small_heading = get_post_meta(
                                    get_the_ID(),
                                    '_small_heading',
                                    true
                                );

                                $button_text = get_post_meta(
                                    get_the_ID(),
                                    '_button_text',
                                    true
                                );

                                $button_url = get_post_meta(
                                    get_the_ID(),
                                    '_button_url',
                                    true
                                );
                        ?>

                        <div class="carousel-item <?php echo ( $count == 0 ) ? 'active' : ''; ?>">

                            <?php
                            if ( has_post_thumbnail() ) :

                                the_post_thumbnail(
                                    'full',
                                    array(
                                        'class' => 'd-block w-100 slider-img',
                                        'alt'   => get_the_title(),
                                    )
                                );

                            endif;
                            ?>

                            <div class="carousel-caption custom-caption">

                                <?php if ( ! empty( $small_heading ) ) : ?>

                                    <h5>

                                        <?php echo esc_html( $small_heading ); ?>

                                    </h5>

                                <?php endif; ?>

                                <h1>

                                    <?php the_title(); ?>

                                </h1>

                                <p>

                                    <?php the_content(); ?>

                                </p>

                                <?php if ( ! empty( $button_text ) ) : ?>

                                    <a
                                        href="<?php echo esc_url( $button_url ); ?>"
                                        class="slider-btn">

                                        <?php echo esc_html( $button_text ); ?>

                                    </a>

                                <?php endif; ?>

                            </div>

                        </div>

                        <?php

                        $count++;

                        endwhile;

                        wp_reset_postdata();

                        endif;

                        ?>

                    </div>

                    <!-- RIGHT SIDE SLIDER BUTTONS -->

                    <div class="slider-controls">

                        <!-- PREVIOUS -->

                        <button
                            class="custom-slider-btn"
                            type="button"
                            data-bs-target="#heroSlider"
                            data-bs-slide="prev">

                            <i class="fa-solid fa-arrow-up"></i>

                        </button>

                        <!-- NEXT -->

                        <button
                            class="custom-slider-btn"
                            type="button"
                            data-bs-target="#heroSlider"
                            data-bs-slide="next">

                            <i class="fa-solid fa-arrow-down"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
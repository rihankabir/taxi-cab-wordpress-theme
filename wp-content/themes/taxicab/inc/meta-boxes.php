<?php

function taxi_cab_add_hero_meta_boxes() {

    add_meta_box(
        'hero_slide_details',
        'Hero Slide Details',
        'taxi_cab_hero_meta_callback',
        'hero_slide',
        'normal',
        'high'
    );

}

add_action(
    'add_meta_boxes',
    'taxi_cab_add_hero_meta_boxes'
);



/** *
*/

function taxi_cab_hero_meta_callback( $post ) {

    wp_nonce_field(
        'hero_slide_nonce_action',
        'hero_slide_nonce'
    );

    $small_heading = get_post_meta(
        $post->ID,
        '_small_heading',
        true
    );

    $button_text = get_post_meta(
        $post->ID,
        '_button_text',
        true
    );

    $button_url = get_post_meta(
        $post->ID,
        '_button_url',
        true
    );
?>

<p>

<label>

<strong>Small Heading</strong>

</label>

<br>

<input
type="text"
name="small_heading"
value="<?php echo esc_attr( $small_heading ); ?>"
style="width:100%;">

</p>

<p>

<label>

<strong>Button Text</strong>

</label>

<br>

<input
type="text"
name="button_text"
value="<?php echo esc_attr( $button_text ); ?>"
style="width:100%;">

</p>

<p>

<label>

<strong>Button URL</strong>

</label>

<br>

<input
type="url"
name="button_url"
value="<?php echo esc_url( $button_url ); ?>"
style="width:100%;">

</p>

<?php

}

function taxi_cab_save_hero_meta( $post_id ) {

    if (
        ! isset( $_POST['hero_slide_nonce'] ) ||
        ! wp_verify_nonce(
            $_POST['hero_slide_nonce'],
            'hero_slide_nonce_action'
        )
    ) {

        return;

    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {

        return;

    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {

        return;

    }

    if ( isset( $_POST['small_heading'] ) ) {

        update_post_meta(

            $post_id,

            '_small_heading',

            sanitize_text_field(
                $_POST['small_heading']
            )

        );

    }

    if ( isset( $_POST['button_text'] ) ) {

        update_post_meta(

            $post_id,

            '_button_text',

            sanitize_text_field(
                $_POST['button_text']
            )

        );

    }

    if ( isset( $_POST['button_url'] ) ) {

        update_post_meta(

            $post_id,

            '_button_url',

            esc_url_raw(
                $_POST['button_url']
            )

        );

    }

}

add_action(
    'save_post',
    'taxi_cab_save_hero_meta'
);


function taxi_cab_offer_meta_box() {

    add_meta_box(

        'offer_meta',

        'Offer Details',

        'taxi_cab_offer_meta_callback',

        'offer',

        'normal',

        'high'

    );

}

add_action(
    'add_meta_boxes',
    'taxi_cab_offer_meta_box'
);
function taxi_cab_offer_meta_callback( $post ) {

    $icon = get_post_meta(

        $post->ID,

        '_offer_icon',

        true

    );

?>

<p>

<label>

<strong>Font Awesome Icon</strong>

</label>

<br>

<input
type="text"
name="offer_icon"
value="<?php echo esc_attr( $icon ); ?>"
style="width:100%;">

</p>

<p>

Example:

</p>

<code>

fa-solid fa-plane

</code>

<?php

}
function taxi_cab_save_offer_meta( $post_id ) {

    if ( isset( $_POST['offer_icon'] ) ) {

        update_post_meta(

            $post_id,

            '_offer_icon',

            sanitize_text_field(

                $_POST['offer_icon']

            )

        );

    }

}

add_action(
    'save_post_offer',
    'taxi_cab_save_offer_meta'
);

function taxi_cab_testimonial_meta_box(){

add_meta_box(
    'testimonial_meta',
    'Testimonial Details',
    'taxi_cab_testimonial_meta_callback',
    'testimonial',
    'normal',
    'high'
);

}
add_action('add_meta_boxes','taxi_cab_testimonial_meta_box');


function taxi_cab_testimonial_meta_callback($post){
wp_nonce_field(
    'testimonial_nonce',
    'testimonial_nonce_field'
);

$company = get_post_meta($post->ID,'company',true);
$position = get_post_meta($post->ID,'position',true);
$rating = get_post_meta( $post->ID, 'rating', true );

?>

<p>

<label><strong>Company</strong></label>

<input
type="text"
name="company"
class="widefat"
value="<?php echo esc_attr( $company ); ?>">

</p>

<p>

<label><strong>Position</strong></label>

<input
type="text"
name="position"
class="widefat"
value="<?php echo esc_attr( $position ); ?>">

</p>

<p>

<label><strong>Rating (1-5)</strong></label>

<select name="rating" class="widefat">

<?php

for ( $i = 1; $i <= 5; $i++ ) :

?>

<option
value="<?php echo $i; ?>"
<?php selected( $rating, $i ); ?>>

<?php echo $i; ?> Star

</option>

<?php endfor; ?>

</select>

</p>

<?php

}

function taxi_cab_save_testimonial_meta( $post_id ) {

    if (
        ! isset( $_POST['testimonial_nonce_field'] ) ||
        ! wp_verify_nonce(
            $_POST['testimonial_nonce_field'],
            'testimonial_nonce'
        )
    ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( isset( $_POST['company'] ) ) {

        update_post_meta(
            $post_id,
            '_company',
            sanitize_text_field( $_POST['company'] )
        );

    }

    if ( isset( $_POST['position'] ) ) {

        update_post_meta(
            $post_id,
            '_position',
            sanitize_text_field( $_POST['position'] )
        );

    }

    if ( isset( $_POST['rating'] ) ) {

        update_post_meta(
            $post_id,
            '_rating',
            absint( $_POST['rating'] )
        );

    }

}

add_action(
    'save_post_testimonial',
    'taxi_cab_save_testimonial_meta'
);

function taxi_cab_tariff_meta_box() {

    add_meta_box(
        'tariff_meta',
        'Tariff Details',
        'taxi_cab_tariff_meta_callback',
        'tariff',
        'normal',
        'high'
    );

}

add_action(
    'add_meta_boxes',
    'taxi_cab_tariff_meta_box'
);
function taxi_cab_tariff_meta_callback( $post ) {

    wp_nonce_field(
        'tariff_nonce',
        'tariff_nonce_field'
    );

    $price = get_post_meta( $post->ID, '_tariff_price', true );

    $unit = get_post_meta( $post->ID, '_tariff_unit', true );

    $featured = get_post_meta( $post->ID, '_tariff_featured', true );

?>

<p>

<label><strong>Price</strong></label>

<input
type="text"
name="tariff_price"
class="widefat"
value="<?php echo esc_attr( $price ); ?>">

</p>

<p>

<label><strong>Price Unit</strong></label>

<input
type="text"
name="tariff_unit"
class="widefat"
placeholder="/km"
value="<?php echo esc_attr( $unit ); ?>">

</p>

<p>

<label>

<input
type="checkbox"
name="tariff_featured"
value="1"
<?php checked( $featured, 1 ); ?>>

Featured Card

</label>

</p>

<?php

}
function taxi_cab_save_tariff_meta( $post_id ) {

    if (
        ! isset( $_POST['tariff_nonce_field'] ) ||
        ! wp_verify_nonce(
            $_POST['tariff_nonce_field'],
            'tariff_nonce'
        )
    ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( isset( $_POST['tariff_price'] ) ) {

        update_post_meta(
            $post_id,
            '_tariff_price',
            sanitize_text_field( $_POST['tariff_price'] )
        );

    }

    if ( isset( $_POST['tariff_unit'] ) ) {

        update_post_meta(
            $post_id,
            '_tariff_unit',
            sanitize_text_field( $_POST['tariff_unit'] )
        );

    }

    $featured = isset( $_POST['tariff_featured'] ) ? 1 : 0;

    update_post_meta(
        $post_id,
        '_tariff_featured',
        $featured
    );

}

add_action(
    'save_post_tariff',
    'taxi_cab_save_tariff_meta'
);

function taxi_cab_app_feature_meta_box(){

add_meta_box(

'app_feature_meta',
'Feature Details',
'taxi_cab_app_feature_meta_callback',
'app_feature',
'normal',
'high'


);


}
add_action(
    'add_meta_boxes',
    'taxi_cab_app_feature_meta_box'
);

function taxi_cab_app_feature_meta_callback( $post ) {

    wp_nonce_field(
        'app_feature_nonce',
        'app_feature_nonce_field'
    );

    $number = get_post_meta(
        $post->ID,
        '_feature_number',
        true
    );

    $position = get_post_meta(
        $post->ID,
        '_feature_position',
        true
    );

?>

<p>

<label>

<strong>Feature Number</strong>

</label>

<input
type="text"
class="widefat"
name="feature_number"
value="<?php echo esc_attr( $number ); ?>">

</p>

<p>

<label>

<strong>Position</strong>

</label>

<select
name="feature_position"
class="widefat">

<option value="left"
<?php selected( $position, 'left' ); ?>>

Left

</option>

<option value="right"
<?php selected( $position, 'right' ); ?>>

Right

</option>

</select>

</p>

<?php

}
function taxi_cab_save_app_feature_meta( $post_id ) {

    if (
        ! isset( $_POST['app_feature_nonce_field'] ) ||
        ! wp_verify_nonce(
            $_POST['app_feature_nonce_field'],
            'app_feature_nonce'
        )
    ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( isset( $_POST['feature_number'] ) ) {

        update_post_meta(

            $post_id,

            '_feature_number',

            sanitize_text_field(
                $_POST['feature_number']
            )

        );

    }

    if ( isset( $_POST['feature_position'] ) ) {

        update_post_meta(

            $post_id,

            '_feature_position',

            sanitize_text_field(
                $_POST['feature_position']
            )

        );

    }

}

add_action(
    'save_post_app_feature',
    'taxi_cab_save_app_feature_meta'
);
function taxi_cab_driver_benefit_meta_box() {

    add_meta_box(

        'driver_benefit_meta',

        'Driver Benefit Details',

        'taxi_cab_driver_benefit_meta_callback',

        'driver_benefit',

        'normal',

        'high'

    );

}

add_action(
    'add_meta_boxes',
    'taxi_cab_driver_benefit_meta_box'
);
function taxi_cab_driver_benefit_meta_callback( $post ) {

    wp_nonce_field(
        'driver_benefit_nonce',
        'driver_benefit_nonce_field'
    );

    $number = get_post_meta(
        $post->ID,
        '_driver_number',
        true
    );

    $column = get_post_meta(
        $post->ID,
        '_driver_column',
        true
    );

?>

<p>

<label>

<strong>Benefit Number</strong>

</label>

<input
type="text"
class="widefat"
name="driver_number"
value="<?php echo esc_attr( $number ); ?>">

</p>

<p>

<label>

<strong>Column</strong>

</label>

<select
name="driver_column"
class="widefat">

<option
value="left"
<?php selected( $column, 'left' ); ?>>

Left

</option>

<option
value="right"
<?php selected( $column, 'right' ); ?>>

Right

</option>

</select>

</p>

<?php

}
function taxi_cab_save_driver_benefit_meta( $post_id ) {

    if (

        ! isset( $_POST['driver_benefit_nonce_field'] ) ||

        ! wp_verify_nonce(

            $_POST['driver_benefit_nonce_field'],

            'driver_benefit_nonce'

        )

    ) {

        return;

    }

    if (

        defined( 'DOING_AUTOSAVE' ) &&

        DOING_AUTOSAVE

    ) {

        return;

    }

    if ( isset( $_POST['driver_number'] ) ) {

        update_post_meta(

            $post_id,

            '_driver_number',

            sanitize_text_field(

                $_POST['driver_number']

            )

        );

    }

    if ( isset( $_POST['driver_column'] ) ) {

        update_post_meta(

            $post_id,

            '_driver_column',

            sanitize_text_field(

                $_POST['driver_column']

            )

        );

    }

}

add_action(

    'save_post_driver_benefit',

    'taxi_cab_save_driver_benefit_meta'

);
function taxi_cab_brand_meta_box() {

    add_meta_box(
        'brand_details',
        'Brand Details',
        'taxi_cab_brand_callback',
        'brand'
    );

}

add_action(
    'add_meta_boxes',
    'taxi_cab_brand_meta_box'
);
function taxi_cab_brand_callback( $post ) {

$url = get_post_meta(
    $post->ID,
    '_brand_url',
    true
);

?>

<p>

<label>Website URL</label>

<input
type="url"
name="brand_url"
value="<?php echo esc_attr( $url ); ?>"
style="width:100%;">

</p>

<?php

}
function taxi_cab_save_brand( $post_id ) {

if ( isset( $_POST['brand_url'] ) ) {

update_post_meta(

$post_id,

'_brand_url',

esc_url_raw(
$_POST['brand_url']
)

);

}

}

add_action(
'save_post',
'taxi_cab_save_brand'
);
function taxi_cab_about_counter_meta_box() {

    add_meta_box(

        'about_counter_details',

        'Counter Details',

        'taxi_cab_about_counter_callback',

        'about_counter',

        'normal',

        'high'

    );

}

add_action(
    'add_meta_boxes',
    'taxi_cab_about_counter_meta_box'
);
function taxi_cab_about_counter_callback( $post ) {

    wp_nonce_field(
        'about_counter_nonce',
        'about_counter_nonce'
    );

    $number = get_post_meta(
        $post->ID,
        '_about_counter_number',
        true
    );

    $symbol = get_post_meta(
        $post->ID,
        '_about_counter_symbol',
        true
    );

?>

<p>

<label><strong>Counter Number</strong></label>

<br>

<input
type="number"
name="about_counter_number"
value="<?php echo esc_attr( $number ); ?>"
style="width:100%;">

</p>

<p>

<label><strong>Counter Symbol</strong></label>

<br>

<input
type="text"
name="about_counter_symbol"
value="<?php echo esc_attr( $symbol ); ?>"
placeholder="+ or %"
style="width:100%;">

</p>

<?php

}
function taxi_cab_save_about_counter( $post_id ) {

    if ( ! isset( $_POST['about_counter_nonce'] ) ) {

        return;

    }

    if ( ! wp_verify_nonce(
        $_POST['about_counter_nonce'],
        'about_counter_nonce'
    ) ) {

        return;

    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {

        return;

    }

    if ( isset( $_POST['about_counter_number'] ) ) {

        update_post_meta(

            $post_id,

            '_about_counter_number',

            sanitize_text_field(
                $_POST['about_counter_number']
            )

        );

    }

    if ( isset( $_POST['about_counter_symbol'] ) ) {

        update_post_meta(

            $post_id,

            '_about_counter_symbol',

            sanitize_text_field(
                $_POST['about_counter_symbol']
            )

        );

    }

}

add_action(
    'save_post_about_counter',
    'taxi_cab_save_about_counter'
);
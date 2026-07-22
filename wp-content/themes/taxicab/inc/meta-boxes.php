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



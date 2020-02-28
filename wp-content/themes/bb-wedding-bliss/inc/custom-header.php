<?php
/**
 * @package BB Wedding Bliss
 * @subpackage bb-wedding-bliss
 * @since bb-wedding-bliss 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses bb_wedding_bliss_header_style()
*/

function bb_wedding_bliss_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'bb_wedding_bliss_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'bb_wedding_bliss_header_style',
	) ) );

}

add_action( 'after_setup_theme', 'bb_wedding_bliss_custom_header_setup' );

if ( ! function_exists( 'bb_wedding_bliss_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see bb_wedding_bliss_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'bb_wedding_bliss_header_style' );
function bb_wedding_bliss_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'bb-wedding-bliss-basic-style', $custom_css );
	endif;
}
endif; // bb_wedding_bliss_header_style
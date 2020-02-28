<?php
function bloger_lite_dynamic_styles() {

	$custom_css = '';

	$tpl_color = get_theme_mod( 'tpl_color', '#016ab9' );
    $tpl_color_lighter = bloger_lite_colour_brightness($tpl_color, 0.8);
    $tpl_color_darker = bloger_lite_colour_brightness($tpl_color, -0.49);
    $tpl_color_rgb = bloger_lite_hex2rgb($tpl_color);
    if( $tpl_color ) {
	   
        /** Text Color **/
		$custom_css .= "
		a:hover,
		a:focus,
		a:active,
        .main-navigation ul li:hover a,
        .main-navigation ul li.menu-item-has-children:hover:after,
        .main-navigation ul li.current-menu-item a,
        .main-navigation ul li.current-menu-parent a,
        .main-navigation ul li.current_page_item a,
        .main-navigation ul li ul.sub-menu li a:hover,
        .main-navigation ul li ul.children li a:hover,
        #primary article .title_cat_wrap .bloger_post_title:hover,
        .secondary .recent-post-wrap .recent-post-title-widget:hover,
        #secondary .recent-post-wrap .recent-post-title-widget:hover,
        #primary article .read_more_share a.continue_link:hover,
        .social_share a :hover,
        .site-info .footer_btm_left a:hover,
        .footer_social_icon_front .fa_link_wrap a:hover,
        .widget_bloger_featured_page .read_more_feature a:hover,
        #primary article .title_cat_wrap .bloger_cat:hover,
        .site-main .post-navigation .nav-links .nav-previous a:hover, 
        .site-main .post-navigation .nav-links .nav-next a:hover
        {
        color: {$tpl_color};
		}";

		/** Background Color **/
		$custom_css .= "
       .navigation_pegination ul li.active a,
       .navigation.pagination .nav-links span.current,
       .navigation_pegination ul li a:hover,
       .navigation.pagination .nav-links span:hover,
       .navigation.pagination .nav-links a:hover,
       #primary article .title_cat_wrap .bloger_cat:hover:before,
        .footer_btm_right .move_to_top_bloger:hover,
        .bloger-slider-wrapper .owl-controls .owl-dots .owl-dot.active span,
        .site-main .post-navigation .nav-links .nav-previous a, 
        .site-main .post-navigation .nav-links .nav-next a,
        .site-main .post-navigation .nav-links a:hover:after,
        .comment-form .form-submit input#submit
        
        {
            background:  {$tpl_color};
        }";
        
        /** Border Color **/
		$custom_css .= "
        .footer_btm_right .move_to_top_bloger:hover,
        .site-main .post-navigation .nav-links .nav-previous a,
        .site-main .post-navigation .nav-links .nav-next a{
            border-color:  {$tpl_color};
        }";

        /** Media Query **/
        $custom_css .= "
            @media (max-width: 768px){
                .main-navigation button.menu-toggle:hover .menu-bar, .main-navigation.toggled button.menu-toggle .menu-bar{
                    background: {$tpl_color} !important;
                }
            }";

	}

	wp_add_inline_style( 'bloger-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'bloger_lite_dynamic_styles' );
function bloger_lite_colour_brightness($hex, $percent) {
    // Work out if hash given
    $hash = '';
    if (stristr($hex, '#')) {
        $hex = str_replace('#', '', $hex);
        $hash = '#';
    }
    /// HEX TO RGB
    $rgb = array(hexdec(substr($hex, 0, 2)), hexdec(substr($hex, 2, 2)), hexdec(substr($hex, 4, 2)));
    //// CALCULATE 
    for ($i = 0; $i < 3; $i++) {
        // See if brighter or darker
        if ($percent > 0) {
            // Lighter
            $rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1 - $percent));
        } else {
            // Darker
            $positivePercent = $percent - ($percent * 2);
            $rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1 - $positivePercent));
        }
        // In case rounding up causes us to go to 256
        if ($rgb[$i] > 255) {
            $rgb[$i] = 255;
        }
    }
    //// RBG to Hex
    $hex = '';
    for ($i = 0; $i < 3; $i++) {
        // Convert the decimal digit to hex
        $hexDigit = dechex($rgb[$i]);
        // Add a leading zero if necessary
        if (strlen($hexDigit) == 1) {
            $hexDigit = "0" . $hexDigit;
        }
        // Append to the hex string
        $hex .= $hexDigit;
    }
    return $hash . $hex;
}

function bloger_lite_hex2rgb($hex) {
    $hex = str_replace("#", "", $hex);

    if (strlen($hex) == 3) {
        $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
        $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
        $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
    } else {
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));
    }
    $rgb = array($r, $g, $b);
    //return implode(",", $rgb); // returns the rgb values separated by commas
    return $rgb; // returns an array with the rgb values
}
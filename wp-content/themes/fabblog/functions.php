<?php
/**
 * Theme functions and definitions
 *
 * @package fabblog
 */ 

if ( ! function_exists( 'fabblog_theme_defaults' ) ) :
	/**
	 * Customize theme defaults.
	 *
	 * @since 1.0.0
	 *
	 * @param array $defaults Theme defaults.
	 * @param array Custom theme defaults.
	 */
	function fabblog_theme_defaults( $defaults ) {
        $defaults['blog_column_type'] = 'column-2';
        $defaults['column_type']      = 'column-1';
		$defaults['excerpt_count']    = 25;

		return $defaults;
	}
endif;
add_filter( 'fabulist_default_theme_options', 'fabblog_theme_defaults', 99 );

if ( ! function_exists( 'fabblog_slider_slidestoshow' ) ) :
    /**
     * Customize slider slides to show.
     *
     * @since 1.0.0
     *
     * @param array $defaults Theme defaults.
     * @param array Custom theme defaults.
     */
    function fabblog_slider_slidestoshow( $defaults ) {
        return 3;
    }
endif;
add_filter( 'fabulist_slider_slidestoshow_filter', 'fabblog_slider_slidestoshow', 99 );

if ( ! function_exists( 'fabblog_slider_fade' ) ) :
    /**
     * Customize slider fade.
     *
     * @since 1.0.0
     *
     * @param array $defaults Theme defaults.
     * @param array Custom theme defaults.
     */
    function fabblog_slider_fade( $defaults ) {
        return 'false';
    }
endif;
add_filter( 'fabulist_slider_fade_filter', 'fabblog_slider_fade', 99 );

if ( ! function_exists( 'fabblog_slider_image_size' ) ) :
    /**
     * Customize slider image size.
     *
     * @since 1.0.0
     *
     * @param array $defaults Theme defaults.
     * @param array Custom theme defaults.
     */
    function fabblog_slider_image_size( $defaults ) {
        return 'post-thumbnail';
    }
endif;
add_filter( 'fabulist_slider_image_size_filter', 'fabblog_slider_image_size', 99 );

if ( ! function_exists( 'fabblog_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function fabblog_enqueue_styles() {

		wp_enqueue_style( 'fabblog-style-parent', get_template_directory_uri() . '/style.css' );

		wp_enqueue_style( 'fabblog-style', get_stylesheet_directory_uri() . '/style.css', array( 'fabblog-style-parent' ), '1.0.0' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'fabblog_enqueue_styles', 99 );


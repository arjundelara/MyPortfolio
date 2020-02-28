<?php
/**
 * blogrid functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blogrid
 */


if ( ! function_exists( 'blogrid_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

function blogrid_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on blogrid, use a find and replace
		 * to change 'blogrid' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'blogrid', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 300 );

		add_image_size( 'blogrid-grid', 350 , 230, true );
		add_image_size( 'blogrid-slider', 850 );
		add_image_size( 'blogrid-small', 300 , 180, true );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1'	=> esc_html__( 'Primary', 'blogrid' ),
			) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'blogrid_custom_background_args', array(
			'default-color' => '#f1f1f1',
			'default-image' => '',
			'default-image' => '%1$s/images/bg.png',
			) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'flex-width'  => true,
			'flex-height' => true,
			) );
	}
	endif;
	add_action( 'after_setup_theme', 'blogrid_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blogrid_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blogrid_content_width', 640 );
}
add_action( 'after_setup_theme', 'blogrid_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blogrid_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'blogrid' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'blogrid' ),
		'before_widget' => '<section id="%1$s" class="fbox swidgets-wrap widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="sidebar-headline-wrapper"><div class="sidebarlines-wrapper"><div class="widget-title-lines"></div></div><h4 class="widget-title">',
		'after_title'   => '</h4></div>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget (1)', 'blogrid' ),
		'id'            => 'footerwidget-1',
		'description'   => esc_html__( 'Add widgets here.', 'blogrid' ),
		'before_widget' => '<section id="%1$s" class="fbox widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="swidget"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget (2)', 'blogrid' ),
		'id'            => 'footerwidget-2',
		'description'   => esc_html__( 'Add widgets here.', 'blogrid' ),
		'before_widget' => '<section id="%1$s" class="fbox widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="swidget"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget (3)', 'blogrid' ),
		'id'            => 'footerwidget-3',
		'description'   => esc_html__( 'Add widgets here.', 'blogrid' ),
		'before_widget' => '<section id="%1$s" class="fbox widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="swidget"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Widget (1)', 'blogrid' ),
		'id'            => 'headerwidget-1',
		'description'   => esc_html__( 'Add widgets here.', 'blogrid' ),
		'before_widget' => '<section id="%1$s" class="header-widget widget swidgets-wrap %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="swidget"><div class="sidebar-title-border"><h3 class="widget-title">',
		'after_title'   => '</h3></div></div>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Widget (2)', 'blogrid' ),
		'id'            => 'headerwidget-2',
		'description'   => esc_html__( 'Add widgets here.', 'blogrid' ),
		'before_widget' => '<section id="%1$s" class="header-widget widget swidgets-wrap %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="swidget"><div class="sidebar-title-border"><h3 class="widget-title">',
		'after_title'   => '</h3></div></div>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Widget (3)', 'blogrid' ),
		'id'            => 'headerwidget-3',
		'description'   => esc_html__( 'Add widgets here.', 'blogrid' ),
		'before_widget' => '<section id="%1$s" class="header-widget widget swidgets-wrap %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="swidget"><div class="sidebar-title-border"><h3 class="widget-title">',
		'after_title'   => '</h3></div></div>',
		) );

	
}




add_action( 'widgets_init', 'blogrid_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function blogrid_scripts() {
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'blogrid-style', get_stylesheet_uri() );


	wp_enqueue_script( 'blogrid-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20170823', true );
	wp_enqueue_script( 'blogrid-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20170823', true );	wp_enqueue_script( 'blogrid-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '20150423', true );
	wp_enqueue_script( 'blogrid-script', get_template_directory_uri() . '/js/script.js', array(), '20160720', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blogrid_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Google fonts, credits can be found in readme.
 */

function blogrid_google_fonts() {

	wp_enqueue_style( 'blogrid-google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700,900', false ); 
}

add_action( 'wp_enqueue_scripts', 'blogrid_google_fonts' );


/**
 * Dots after excerpt
 */

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



/**
 * Blog Pagination 
 */
if ( !function_exists( 'blogrid_numeric_posts_nav' ) ) {
	
	function blogrid_numeric_posts_nav() {
		
		$prev_arrow = is_rtl() ? 'Previous' : 'Next';
		$next_arrow = is_rtl() ? 'Next' : 'Previous';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			if( !$current_page = get_query_var('paged') )
				$current_page = 1;
			if( get_option('permalink_structure') ) {
				$format = 'page/%#%/';
			} else {
				$format = '&paged=%#%';
			}
			echo wp_kses_post(paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> 'Previous',
				'next_text'		=> 'Next',
				) ));
		}
	}
	
}




/**
 * Copyright and License for Upsell button by Justin Tadlock - 2016 © Justin Tadlock. customizer button https://github.com/justintadlock/trt-customizer-pro
 */
require_once( trailingslashit( get_template_directory() ) . 'justinadlock-customizer-button/class-customize.php' );


/**
 * Compare page CSS
 */

function blogrid_comparepage_css($hook) {
	if ( 'appearance_page_blogrid-info' != $hook ) {
		return;
	}
	wp_enqueue_style( 'blogrid-custom-style', get_template_directory_uri() . '/css/compare.css' );
}
add_action( 'admin_enqueue_scripts', 'blogrid_comparepage_css' );

/**
 * Compare page content
 */

add_action('admin_menu', 'blogrid_themepage');
function blogrid_themepage(){
	$theme_info = add_theme_page( __('Blogrid Info','blogrid'), __('Blogrid Info','blogrid'), 'manage_options', 'blogrid-info.php', 'blogrid_info_page' );
}

function blogrid_info_page() {
	$user = wp_get_current_user();
	?>
	<div class="wrap about-wrap blogrid-add-css">
		<div>
			<h1>
				<?php echo __('Welcome to Blogrid!','blogrid'); ?>
			</h1>

			<div class="feature-section three-col">
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php echo __("Contact Support", "blogrid"); ?></h3>
						<p><?php echo __("Getting started with a new theme can be difficult, if you have issues with Blogrid then throw us an email.", "blogrid"); ?></p>
						<p><a target="blank" href="<?php echo esc_url('https://superbthemes.com/help-contact/', 'blogrid'); ?>" class="button button-primary">
							<?php echo __("Contact Support", "blogrid"); ?>
						</a></p>
					</div>
				</div>
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php echo __("View our other themes", "blogrid"); ?></h3>
						<p><?php echo __("Do you like our concept but feel like the design doesn't fit your need? Then check out our website for more designs.", "blogrid"); ?></p>
						<p><a target="blank" href="<?php echo esc_url('https://superbthemes.com/wordpress-themes/', 'blogrid'); ?>" class="button button-primary">
							<?php echo __("View All Themes", "blogrid"); ?>
						</a></p>
					</div>
				</div>
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php echo __("Premium Edition", "blogrid"); ?></h3>
						<p><?php echo __("If you enjoy Blogrid and want to take your website to the next step, then check out our premium edition here.", "blogrid"); ?></p>
						<p><a target="blank" href="<?php echo esc_url('https://superbthemes.com/blogrid/', 'blogrid'); ?>" class="button button-primary">
							<?php echo __("Read More", "blogrid"); ?>
						</a></p>
					</div>
				</div>
			</div>
		</div>
		<hr>

		<h2><?php echo __("Free Vs Premium","blogrid"); ?></h2>
		<div class="blogrid-button-container">
			<a target="blank" href="<?php echo esc_url('https://superbthemes.com/blogrid/', 'blogrid'); ?>" class="button button-primary">
				<?php echo __("Read Full Description", "blogrid"); ?>
			</a>
			<a target="blank" href="<?php echo esc_url('https://superbthemes.com/demo/blogrid/', 'blogrid'); ?>" class="button button-primary">
				<?php echo __("View Theme Demo", "blogrid"); ?>
			</a>
		</div>


		<table class="wp-list-table widefat">
			<thead>
				<tr>
					<th><strong><?php echo __("Theme Feature", "blogrid"); ?></strong></th>
					<th><strong><?php echo __("Basic Version", "blogrid"); ?></strong></th>
					<th><strong><?php echo __("Premium Version", "blogrid"); ?></strong></th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo __("Header Background Color", "blogrid"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Custom Navigation Logo Or Text", "blogrid"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Hide Logo Text", "blogrid"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>

				<tr>
					<td><?php echo __("Premium Support", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Recent Posts Widget", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Easy Google Fonts", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Pagespeed Plugin", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>

				<tr>
					<td><?php echo __("Only Show Header Image On Front Page", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Show Header Everywhere", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Custom Text On Header Image", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Only Show Upper Widgets On Front Page", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Replace Copyright Text", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Upper Widgets Colors", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Navigation Color", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Post/Page Color", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Blog Feed Color", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Footer Color", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Header Background Image", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo __("Customize Background Color", "blogrid"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "blogrid"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "blogrid"); ?>" /></span></td>
				</tr>
			</tbody>
		</table>

	</div>
	<?php
}



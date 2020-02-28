<?php
//about theme info
add_action( 'admin_menu', 'bb_wedding_bliss_abouttheme' );
function bb_wedding_bliss_abouttheme() {    	
	add_theme_page( esc_html__('About Wedding Theme', 'bb-wedding-bliss'), esc_html__('About Wedding Theme', 'bb-wedding-bliss'), 'edit_theme_options', 'bb_wedding_bliss_guide', 'bb_wedding_bliss_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function bb_wedding_bliss_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'bb_wedding_bliss_admin_theme_style');

//guidline for about theme
function bb_wedding_bliss_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	 <div class="header">
	 	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="" />
	 	<h2><?php esc_html_e('Welcome to Wedding Lite Theme', 'bb-wedding-bliss'); ?></h2>
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Themeshopy has got everything that an individual and group need to be successful in their venture.', 'bb-wedding-bliss'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( BB_WEDDING_BLISS_BUY_NOW ); ?>"><?php esc_html_e('Buy Now', 'bb-wedding-bliss'); ?></a>
			<a href="<?php echo esc_url( BB_WEDDING_BLISS_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'bb-wedding-bliss'); ?></a>
			<a href="<?php echo esc_url( BB_WEDDING_BLISS_PRO_DOC ); ?>"><?php esc_html_e('Pro Documentation', 'bb-wedding-bliss'); ?></a>
		</div>
	</div>
	<div class="button-bg">
	<button class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'bb-wedding-bliss'); ?></button>
	<button class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'bb-wedding-bliss'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'bb-wedding-bliss'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( BB_WEDDING_BLISS_FREE_DOC ); ?>"><?php esc_html_e('Documentation', 'bb-wedding-bliss'); ?></a>
			<a href="<?php echo esc_url( BB_WEDDING_BLISS_CONTACT ); ?>"><?php esc_html_e('Support', 'bb-wedding-bliss'); ?></a>
			<a href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Start Customizing', 'bb-wedding-bliss'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'bb-wedding-bliss'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'bb-wedding-bliss'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'bb-wedding-bliss'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'bb-wedding-bliss'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.jpg" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'bb-wedding-bliss'); ?></b> <?php esc_html_e('Set the front page: Go to Setting -> Reading --> Set the front page display static page to home page', 'bb-wedding-bliss'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'bb-wedding-bliss'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( BB_WEDDING_BLISS_BUY_NOW ); ?>"><?php esc_html_e('Buy Now', 'bb-wedding-bliss'); ?></a>
			<a href="<?php echo esc_url( BB_WEDDING_BLISS_LIVE_DEMO );?>"><?php esc_html_e('Live Demo', 'bb-wedding-bliss'); ?></a>
			<a href="<?php echo esc_url( BB_WEDDING_BLISS_PRO_DOC ); ?>"><?php esc_html_e('Pro Documentation', 'bb-wedding-bliss'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.png" alt="" />
	  			<p><?php esc_html_e( 'BB wedding bliss brings you a Premium Wedding WordPress Theme. This Top Wedding WordPress theme will allow you to create an insane online Wedding invitation. You can use our premium Wedding Website templates and create an interactive yet stunning wedding invitation that will do a lot more than just being an invite. This responsive wedding planner WordPress theme is dedicated to turning your website into a temple of information about your wedding. Once you purchase our theme, you would not only be able to record, alter, save and send invites to everyone swiftly but you can also distribute wedding photos, information and so much more. The visitors will be able to see all the Information on the website. The theme contains a negative countdown, notifying everyone about the number of days and hours left for the wedding. It also contains RSVP, blog, Friends, and family section, Thanks note, photo gallery and a lot more. The bride and the groom can share their love story with the world, using our themes dedicated section. Our theme will save you from the aftermath tide of demand for wedding pictures by using our theme. Just send your friends and family the link and let them browse and download whatever pleases to their heart. ', 'bb-wedding-bliss' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'bb-wedding-bliss' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Slider with a Number of Slider Images Upload Option Available.', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'bb-wedding-bliss' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'bb-wedding-bliss' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<script>
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;

	}
</script>
<?php } ?>
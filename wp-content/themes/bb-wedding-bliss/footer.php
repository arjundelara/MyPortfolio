<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bb wedding bliss
 */
?>
<footer role="contentinfo">
  <div id="footer" class="copyright-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <?php dynamic_sidebar('footer-1');?>
        </div>
        <div class="col-lg-3 col-md-3">
          <?php dynamic_sidebar('footer-2');?>
        </div>
        <div class="col-lg-3 col-md-3">
          <?php dynamic_sidebar('footer-3');?>
        </div>
        <div class="col-lg-3 col-md-3">
          <?php dynamic_sidebar('footer-4');?>
        </div>        
      </div>
    </div>
  </div>
  <div class="abovecopyright">
    <div class="container">
      <div class="row">
        <div class="copyright col-lg-6 col-md-12 col-10">
          <p><?php echo esc_html(get_theme_mod('bb_wedding_bliss_footer_copy',__('Copyright 2017','bb-wedding-bliss'))); ?> <?php bb_wedding_bliss_credit(); ?> </p>
        </div>
        <div class="social-media col-lg-6 col-md-1 col-1">
          <?php if( get_theme_mod( 'bb_wedding_bliss_youtube_url' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'bb_wedding_bliss_youtube_url','' ) ); ?>"><i class="fab fa-youtube" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Youtube','bb-wedding-bliss' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'bb_wedding_bliss_facebook_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'bb_wedding_bliss_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Facebook','bb-wedding-bliss' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'bb_wedding_bliss_twitter_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'bb_wedding_bliss_twitter_url','' ) ); ?>"><i class="fab fa-twitter" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Twitter','bb-wedding-bliss' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'bb_wedding_bliss_rss_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'bb_wedding_bliss_rss_url','' ) ); ?>"><i class="fas fa-rss" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'RSS','bb-wedding-bliss' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'bb_wedding_bliss_insta_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'bb_wedding_bliss_insta_url','' ) ); ?>"><i class="fab fa-instagram" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Instagram','bb-wedding-bliss' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'bb_wedding_bliss_google_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'bb_wedding_bliss_google_url','' ) ); ?>"><i class="fab fa-google-plus-g" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Google','bb-wedding-bliss' );?></span></a>
          <?php } ?>
          <?php if( get_theme_mod( 'bb_wedding_bliss_pint_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'bb_wedding_bliss_pint_url','' ) ); ?>"><i class="fab fa-pinterest-p" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Pinterest','bb-wedding-bliss' );?></span></a>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</footer>  
<?php wp_footer(); ?>
  </body>
</html>
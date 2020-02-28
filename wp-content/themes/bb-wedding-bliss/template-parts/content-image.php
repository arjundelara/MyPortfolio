<?php
/**
 * The template part for displaying services
 *
 * @package bb wedding bliss
 * @subpackage bb_wedding_bliss
 * @since bb wedding bliss 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="page-box row">   
    <?php 
      if(has_post_thumbnail()) { ?>
      <div class="box-image col-lg-6 col-md-6">
        <?php the_post_thumbnail();  ?>
      </div>
    <?php } ?>
    <div class="new-text <?php 
      if(has_post_thumbnail()) { ?>col-lg-6 col-md-6 "<?php } else { ?>col-lg-12 col-md-12"<?php } ?>>
      <h2><a href="<?php echo esc_url( get_permalink() );?>" title="<?php the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>   
      <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( bb_wedding_bliss_string_limit_words( $excerpt, esc_attr(get_theme_mod('bb_wedding_bliss_excerpt_number','20')))); ?></p></div>
      <div class="content-bttn">
        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read More', 'bb-wedding-bliss' ); ?>"><?php echo esc_html(get_theme_mod('bb_wedding_bliss_button_text','Read More'));?><span class="screen-reader-text"><?php esc_html_e( 'Read More','bb-wedding-bliss' );?></span></a>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</article>
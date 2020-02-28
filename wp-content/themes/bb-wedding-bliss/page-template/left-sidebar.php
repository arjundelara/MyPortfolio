<?php
/**
 * Template Name: Page with Left Sidebar
 */

get_header(); ?>

<main role="main" id="maincontent">
    <?php do_action( 'bb_wedding_bliss_header_pageleft' ); ?>

    <div class="container">
        <div class="middle-align row">  
            <div class="col-lg-4 col-md-4" id="sidebar">
                <?php dynamic_sidebar('sidebar-2'); ?>
            </div>       
            <div class="col-lg-8 col-md-8" class="content-ts" >
                <?php while ( have_posts() ) : the_post(); ?>        
                    <h1><?php the_title();?></h1>
                    <?php the_post_thumbnail(); ?>
                    <?php the_content();
                    
                    //If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() )
                            comments_template();
                    ?>
                <?php endwhile; // end of the loop. ?>
            </div>
            <div class="clear"></div>    
        </div>
    </div>

    <?php do_action( 'bb_wedding_bliss_footer_pageleft' ); ?>
</main>

<?php get_footer(); ?>
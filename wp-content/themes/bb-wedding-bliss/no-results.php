<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package bb wedding bliss
 */
?>
<header>
	<h2 class="entry-title"><?php esc_html_e( 'Nothing Found', 'bb-wedding-bliss' ); ?></h2>
</header>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf(esc_html__('Ready to publish your first post? Get started here.','bb-wedding-bliss'), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bb-wedding-bliss' ); ?></p><br />
		<?php get_search_form(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bb-wedding-bliss' ); ?></p><br />
		<?php get_search_form(); ?>
<?php endif; ?>
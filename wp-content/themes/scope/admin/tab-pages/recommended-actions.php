<?php 
	$actions = $this->recommended_actions;
	$actions_todo = get_option( 'scope_recommended_actions', false );
?>
<div class="action-list">
	<?php if($actions): foreach ($actions as $key => $actiona): ?>
	<div class="action" id="<?php echo esc_attr($actiona['id']); ?>">
		<div class="action-watch">
		<?php if(!$actiona['is_done']): ?>
			<?php if(!isset($actions_todo[$actiona['id']]) || !$actions_todo[$actiona['id']]): ?>
				<span class="dashicons dashicons-visibility"></span>
			<?php else: ?>
				<span class="dashicons dashicons-hidden"></span>
			<?php endif; ?>
		<?php else: ?>
			<span class="dashicons dashicons-yes"></span>
		<?php endif; ?>
		</div>
		<div class="action-inner">
			<h3 class="action-title"><?php echo esc_html($actiona['title']); ?></h3>
			<div class="action-desc"><?php echo wp_kses_post($actiona['desc']); ?></div>
			<?php echo $actiona['link']; ?>
		</div>
	</div>
	<?php endforeach; endif; ?>
</div>
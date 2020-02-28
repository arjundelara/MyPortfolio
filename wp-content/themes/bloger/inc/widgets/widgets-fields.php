<?php
/**
 * Define fields for Widgets.
 * 
 * @package bloger Lite
 */

function bloger_widgets_show_widget_field( $instance = '', $widget_field = '', $athm_field_value = '' ) {
	$bloger_pagelist[0] = array(
        'value' => 0,
        'label' => esc_html__('--choose--','bloger')
    );
    $arg = array('posts_per_page'   => -1);
    $bloger_pages = get_pages($arg);
    foreach($bloger_pages as $bloger_page) :
        $bloger_pagelist[$bloger_page->ID] = array(
            'value' => $bloger_page->ID,
            'label' => $bloger_page->post_title
        );
    endforeach;
	extract( $widget_field );
	
	switch( $bloger_widgets_field_type ) {
	
		// Standard text field
		case 'text' : ?>
			<p>
				<label for="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>"><?php echo esc_html($bloger_widgets_title); ?>:</label>
				<input class="widefat" id="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>" name="<?php echo esc_attr($instance->get_field_name( $bloger_widgets_name )); ?>" type="text" value="<?php echo esc_attr($athm_field_value); ?>" />
				
				<?php if( isset( $bloger_widgets_description ) ) { ?>
				<br />
				<small><?php echo esc_html($bloger_widgets_description); ?></small>
				<?php } ?>
			</p>
			<?php
			break;

		// Textarea field
		case 'textarea' : ?>
			<p>
				<label for="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>"><?php echo esc_attr($bloger_widgets_title); ?>:</label>
				<textarea class="widefat" rows="6" id="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>" name="<?php echo esc_attr($instance->get_field_name( $bloger_widgets_name )); ?>"><?php echo esc_textarea($athm_field_value); ?></textarea>
			</p>
			<?php
			break;
			
		// Checkbox field
		case 'checkbox' : ?>
			<p>
				<input id="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>" name="<?php echo esc_attr($instance->get_field_name( $bloger_widgets_name )); ?>" type="checkbox" value="1" <?php checked( '1', $athm_field_value ); ?>/>
				<label for="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>"><?php echo esc_html($bloger_widgets_title); ?></label>

				<?php if( isset( $bloger_widgets_description ) ) { ?>
				<br />
				<small><?php echo esc_html($bloger_widgets_description); ?></small>
				<?php } ?>
			</p>
			<?php
			break;
			
		// Radio fields
		case 'radio' : ?>
			<p>
				<?php
				echo esc_html($bloger_widgets_title); 
				echo '<br />';
				foreach( $bloger_widgets_field_options as $athm_option_name => $athm_option_title ) { ?>
					<input id="<?php echo esc_attr($instance->get_field_id( $athm_option_name )); ?>" name="<?php echo esc_attr($instance->get_field_name( $bloger_widgets_name )); ?>" type="radio" value="<?php echo esc_attr($athm_option_name); ?>" <?php checked( $athm_option_name, $athm_field_value ); ?> />
					<label for="<?php echo esc_attr($instance->get_field_id( $athm_option_name )); ?>"><?php echo esc_html($athm_option_title); ?></label>
					<br />
				<?php } ?>
				
				<?php if( isset( $bloger_widgets_description ) ) { ?>
				<small><?php echo esc_html($bloger_widgets_description); ?></small>
				<?php } ?>
			</p>
			<?php
			break;
			
		// Select field
		case 'select' : ?>
			<p>
				<label for="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>"><?php echo esc_html($bloger_widgets_title); ?>:</label>
				<select name="<?php echo esc_attr($instance->get_field_name( $bloger_widgets_name )); ?>" id="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>" class="widefat">
					<?php
					foreach ( $bloger_widgets_field_options as $athm_option_name => $athm_option_title ) { ?>
						<option value="<?php echo esc_attr($athm_option_name); ?>" id="<?php echo esc_attr($instance->get_field_id( $athm_option_name )); ?>" <?php selected( $athm_option_name, $athm_field_value ); ?>><?php echo esc_html($athm_option_title); ?></option>
					<?php } ?>
				</select>

				<?php if( isset( $bloger_widgets_description ) ) { ?>
				<br />
				<small><?php echo esc_html($bloger_widgets_description); ?></small>
				<?php } ?>
			</p>
			<?php
			break;
			
		case 'number' : ?>
			<p>
				<label for="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>"><?php echo esc_html($bloger_widgets_title); ?>:</label><br />
				<input name="<?php echo esc_attr($instance->get_field_name( $bloger_widgets_name )); ?>" type="number" step="1" min="1" id="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>" value="<?php echo esc_attr($athm_field_value); ?>" class="small-text" />
				
				<?php if( isset( $bloger_widgets_description ) ) { ?>
				<br />
				<small><?php echo esc_html($bloger_widgets_description); ?></small>
				<?php } ?>
			</p>
			<?php
			break;

		// Select field
		case 'selectpage' : ?>
			<p>
				<label for="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>"><?php echo esc_html($bloger_widgets_title); ?> :</label>
				<select name="<?php echo esc_attr($instance->get_field_name( $bloger_widgets_name )); ?>" id="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>" class="widefat">
					<?php
					foreach ( $bloger_pagelist as $bloger_single_page ) { ?>
						<option value="<?php echo esc_attr($bloger_single_page['value']); ?>" id="<?php echo esc_attr($instance->get_field_id( $bloger_single_page['label'] )); ?>" <?php selected( $bloger_single_page['value'], $athm_field_value ); ?>><?php echo esc_html($bloger_single_page['label']); ?></option>
					<?php } ?>
				</select>

				<?php if( isset( $bloger_widgets_description ) ) { ?>
				<br />
				<small><?php echo esc_html($bloger_widgets_description); ?></small>
				<?php } ?>
			</p>
			<?php
			break;
            
        case 'upload' :

            $output = '';
            $id = $instance->get_field_id($bloger_widgets_name);
            $class = '';
            $int = '';
            $value = $athm_field_value;
            $name = $instance->get_field_name($bloger_widgets_name);


            if ($value) {
                $class = ' has-file';
            }
            ?>
            <div class="sub-option widget-upload">
            <label for="<?php echo esc_attr($instance->get_field_id($bloger_widgets_name)); ?>"><?php esc_html($bloger_widgets_title); ?></label><br/>
            <input id="<?php echo esc_attr($id); ?>" class="upload <?php echo esc_attr($class); ?>" type="text" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_url($value); ?>" placeholder="<?php esc_html_e('No file chosen', 'bloger'); ?>" />
        	<?php
            if (function_exists('wp_enqueue_media')) {
            ?>
                <input id="upload-<?php echo esc_attr($id); ?>" class="upload-button button" type="button" value="<?php esc_html_e('Upload', 'bloger'); ?>" />
            <?php
            } else {
        	?>
                <p><i><?php esc_html_e('Upgrade your version of WordPress for full media support.', 'bloger'); ?></i></p>
            <?php
            }
            ?>
            <div class="screenshot team-thumb" id="<?php echo esc_attr($id); ?>-image"><br/>
        	<?php
            if ($value != '') {
                $attachment_id = attachment_url_to_postid($value);

                $image_array = wp_get_attachment_image_src($attachment_id, 'medium');
                $image = preg_match('/(^.*\.jpg|jpeg|png|gif|ico*)/i', $value);
                if ($image) {
                	?>
                    <img width="100%" height="" src="<?php echo esc_url($image_array[0]); ?>" alt="" /><a class="remove-image remove-screenshot"><?php esc_html_e( 'Remove', 'bloger' ); ?></a>
                    <?php
                } else {
                    $parts = explode("/", $value);
                    for ($i = 0; $i < sizeof($parts); ++$i) {
                        $title = $parts[$i];
                    }

                    // Standard generic output if it's not an image.
                    $title = esc_html__('View File', 'bloger');
                    ?>
                    <div class="no-image"><span class="file_link"><a href="' . $value . '" target="_blank" rel="external"><?php esc_html($title); ?></a></span></div>
                    <?php
                }
            }
            ?>
        	</div></div><br/>
        	<?php
            break;	
            
        case 'select_theme' : ?>
			<p>
				<label for="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>"><?php echo esc_html($bloger_widgets_title); ?> :</label>
				<select name="<?php echo esc_attr($instance->get_field_name( $bloger_widgets_name )); ?>" id="<?php echo esc_attr($instance->get_field_id( $bloger_widgets_name )); ?>" class="widefat">
					<?php
					foreach ( $twitter_themes as $twitter_theme ) { ?>
						<option value="<?php echo esc_attr($twitter_theme['value']); ?>" id="<?php echo esc_attr($instance->get_field_id( $twitter_theme['label'] )); ?>" <?php selected( $twitter_theme['value'], $athm_field_value ); ?>><?php echo esc_html($twitter_theme['label']); ?></option>
					<?php } ?>
				</select>

				<?php if( isset( $bloger_widgets_description ) ) { ?>
				<br />
				<small><?php echo esc_html($bloger_widgets_description); ?></small>
				<?php } ?>
			</p>
			<?php
			break;
	}
	
}
<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file:
 *
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 */

?>
<div class="pp-spacer-module">
    <?php if ( FLBuilderModel::is_builder_active() ) { ?>
        <p class="pp-helper"><?php _e('Click here to edit Spacer module.', 'bb-powerpack-lite'); ?></p>
    <?php } ?>
</div>

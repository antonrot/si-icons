
    <div class="social_links_container">
        <hr>
        <?php if(get_option( 'fc_status' ) === 'fc_enabled'): ?>
            &nbsp; &nbsp; <span>
                <span class="dashicons dashicons-facebook"></span>
                <span><?php echo _e('We on', 'si_domain') ?></span>
                <a target="_blank" style="color: <?php echo get_option( 'fc_link_color' ) ?>" href="<?php echo get_option( 'fc_link_url' ) ?>"><?php _e('Facebook', 'si_domain');?></a>
            </span>
        <?php endif; ?>

        <?php if(get_option( 'tw_status' ) === 'tw_enabled'): ?>
            &nbsp; &nbsp; <span>
                <span class="dashicons dashicons-twitter"></span>
                <span><?php echo _e("We on", 'si_domain') ?></span>
                <a target="_blank"  style="color: <?php echo get_option( 'tw_link_color' ) ?>"  href="<?php echo get_option( 'tw_link_url' ) ?>"><?php _e('Twitter', 'si_domain');?></a>
            </span>
        <?php endif; ?>

        <?php if(get_option( 'in_status' ) === 'in_enabled'): ?>

            &nbsp; &nbsp; <span>
                <span class="dashicons dashicons-instagram"></span>
                <span><?php echo _e('We on', 'si_domain') ?></span>
                <a target="_blank"  style="color: <?php echo get_option( 'in_link_color' ) ?>"  href="<?php echo get_option( 'in_link_url' ) ?>"><?php _e('Instagram', 'si_domain');?></a>
            </span>
        <?php endif; ?>

        <?php if(get_option( 'you_status' ) === 'you_enabled'): ?>
            &nbsp; &nbsp; <span>
                <span class="dashicons dashicons-youtube"></span>
                <span><?php echo _e('We on', 'si_domain') ?></span>
                <a target="_blank"  style="color: <?php echo get_option( 'you_link_color' ) ?>"  href="<?php echo get_option( 'you_link_url' ) ?>"><?php _e('Youtube', 'si_domain');?></a>
            </span>
        <?php endif; ?>
        <hr>
    </div>

<form action="options.php" method="post">
    <?
    settings_fields( 'social_icons_plugin_options_group' );
    do_settings_sections( 'social_icons_plugin_options_group' );
    ?>
    <table class="form-table">
        <tbody>
        <tr>
            <td><h3><?php echo _e('Facebook settings', 'sl_domain')?></h3></td>
        </tr>
        <tr>
            <th scope="row"><?php echo _e('Link URL', 'sl_domain')?></th>
            <td><input class="regular-text code"  placeholder='Link URL' id='fc_link_url' name='fc_link_url' type='text' value='<?= esc_url(get_option( 'fc_link_url' )) ?>' /></td>
        </tr>
        <tr>
            <th scope="row"><?php echo _e('Link color', 'sl_domain')?></th>
            <td><input class="regular-text code"  placeholder='Link Color' id='fc_link_color' name='fc_link_color' type='text' value='<?= esc_attr(get_option( 'fc_link_color' )) ?>' /></td>
        </tr>
        <tr>
            <th scope="row"><?php echo _e('Status', 'sl_domain')?></th>
            <td>
                <select class="regular-text code"  name="fc_status" id="fc_status">
                    <option <?php selected( get_option( 'fc_status' ), 'fc_enabled') ?> value="fc_enabled"><?php echo _e('enabled', 'sl_domain')?></option>
                    <option <?php selected( get_option( 'fc_status' ), 'fc_disabled') ?> value="fc_disabled"><?php echo _e('disabled', 'sl_domain')?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td><h3><?php echo _e('Twitter settings', 'sl_domain')?></h3></td>
        </tr>
        <tr>
            <th scope="row"><?php echo _e('Link URL', 'sl_domain')?></th>
            <td><input class="regular-text code"  placeholder='Link URL' id='tw_link_url' name='tw_link_url' type='text' value='<?= esc_url(get_option( 'tw_link_url' )) ?>' /></td>
        </tr>
        <tr>
            <th scope="row"><?php echo _e('Link color', 'sl_domain')?></th>
            <td><input class="regular-text code"  placeholder='Link Color' id='tw_link_color' name='tw_link_color' type='text' value='<?= esc_attr(get_option( 'tw_link_color' )) ?>' /></td>
        </tr>
        <tr>
            <th scope="row"><?php echo _e('Status', 'sl_domain')?></th>
            <td>
                <select class="regular-text code"  name="tw_status" id="tw_status">
                    <option <?php selected( get_option( 'tw_status' ), 'tw_enabled') ?> value="tw_enabled"><?php echo _e('enabled', 'sl_domain')?></option>
                    <option <?php selected( get_option( 'tw_status' ), 'tw_disabled') ?> value="tw_disabled"><?php echo _e('disabled', 'sl_domain')?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td><h3><?php echo _e('Instagram settings', 'sl_domain')?></h3></td>
        </tr>
        <tr>
            <th scope="row"><?php echo _e('Link URL', 'sl_domain')?></th>
            <td><input class="regular-text code"  placeholder='Link URL' id='in_link_url' name='in_link_url' type='text' value='<?= esc_url(get_option( 'in_link_url' )) ?>' /></td>
        </tr>
        <tr>
            <th scope="row"><?php echo _e('Link color', 'sl_domain')?></th>
            <td><input class="regular-text code"  placeholder='Link Color' id='in_link_color' name='in_link_color' type='text' value='<?= esc_attr(get_option( 'in_link_color' )) ?>' /></td>
        </tr>
        <tr>
            <th scope="row"><?php echo _e('Status', 'sl_domain')?></th>
            <td>
                <select class="regular-text code"  name="in_status" id="in_status">
                    <option <?php selected( get_option( 'in_status' ), 'in_enabled') ?> value="in_enabled"><?php echo _e('enabled', 'sl_domain')?></option>
                    <option <?php selected( get_option( 'in_status' ), 'in_disabled') ?> value="in_disabled"><?php echo _e('disabled', 'sl_domain')?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td><h3><?php echo _e('Youtube settings', 'sl_domain')?></h3></td>
        </tr>
        <tr>
            <th scope="row"><?php echo _e('Link URL', 'sl_domain')?></th>
            <td><input class="regular-text code"  placeholder='Link URL' id='you_link_url' name='you_link_url' type='text' value='<?= esc_url(get_option( 'you_link_url' )) ?>' /></td>
        </tr>
        <tr>
            <th scope="row"><?php echo _e('Link color', 'sl_domain')?></th>
            <td><input class="regular-text code" placeholder='Link Color' id='you_link_color' name='you_link_color' type='text' value='<?= esc_attr(get_option( 'you_link_color' )) ?>' /></td>
        </tr>
        <tr>
            <th scope="row"><?php echo _e('Status', 'sl_domain')?></th>
            <td>
                <select class="regular-text code" name="you_status" id="you_status">
                    <option <?php selected( get_option( 'you_status' ), 'you_enabled') ?> value="you_enabled"><?php echo _e('enabled', 'sl_domain')?></option>
                    <option <?php selected( get_option( 'you_status' ), 'you_disabled') ?> value="you_disabled"><?php echo _e('disabled', 'sl_domain')?></option>
                </select>
            </td>
        </tr>
        <tr>
            <th><?php submit_button(); ?></th>
        </tr>
        </tbody>
    </table>
</form>
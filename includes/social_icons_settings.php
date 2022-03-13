<?php

if(!defined('ABSPATH')){
    exit;
}

class Social_Icons_Settings{

    public function __construct(){
        add_action( 'admin_menu', [ $this, 'social_icons_settings_page' ] );
        add_action( 'admin_init', [ $this, 'social_icons_register_settings' ] );
    }

    public function social_icons_settings_page() {
        add_menu_page( 'Social icons', 'Social icons', 'manage_options', 'social-icons-plugin', [$this, 'social_links_settings_form'] );
    }

    public function social_icons_register_settings(){
        register_setting('social_icons_plugin_options_group', 'fc_link_url');
        register_setting('social_icons_plugin_options_group', 'fc_link_color');
        register_setting('social_icons_plugin_options_group', 'fc_status');
        register_setting('social_icons_plugin_options_group', 'tw_link_url');
        register_setting('social_icons_plugin_options_group', 'tw_link_color');
        register_setting('social_icons_plugin_options_group', 'tw_status');
        register_setting('social_icons_plugin_options_group', 'in_link_url');
        register_setting('social_icons_plugin_options_group', 'in_link_color');
        register_setting('social_icons_plugin_options_group', 'in_status');
        register_setting('social_icons_plugin_options_group', 'you_link_url');
        register_setting('social_icons_plugin_options_group', 'you_link_color');
        register_setting('social_icons_plugin_options_group', 'you_status');
    }

    public function social_links_settings_form () {
        require_once( plugin_dir_path(__FILE__ ) . './parts/social_back_template.php');
    }
}

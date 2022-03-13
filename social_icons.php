<?php
/*
 * Plugin Name: Social icons
 * */
if(!defined('ABSPATH')){
    exit;
}

if( ! class_exists('Social_Icons' ) ){
    class Social_Icons{

        public function __construct(){
            $this->define_constants();
            add_action('wp_enqueue_scripts', [$this, 'social_icons_plugin_assets']);
            require_once( S_ICONS_PLUGIN_PATH . 'includes/social_icons_settings.php');
            require_once( S_ICONS_PLUGIN_PATH . 'includes/social_icons_shortcode.php');
            new Social_Icons_Settings();
            new Social_Icons_Shortcode();
        }

        public function define_constants(){
            define('S_ICONS_PLUGIN_PATH', plugin_dir_path(__FILE__));
            define('S_ICONS_PLUGIN_URL', plugin_dir_url(__FILE__));
            define('S_ICONS_PLUGIN_VERSION', '1.0.0');
        }

        public function social_icons_plugin_assets(){
            wp_register_script('social_icons', S_ICONS_PLUGIN_URL . '/assets/js/social_icons.js' );
            wp_register_style('social_icons', S_ICONS_PLUGIN_URL . '/assets/css/social_icons.css' );

            wp_enqueue_script('social_icons');
            wp_enqueue_style('social_icons');
        }

    }
}

if ( class_exists('Social_Icons' ) ) {
    new Social_Icons();
}



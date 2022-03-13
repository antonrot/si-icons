<?php

if(!defined('ABSPATH')){
    exit;
}

class Social_Icons_Shortcode{

    public function __construct(){
        add_shortcode('si-icons', [ $this, 'social_links_shortcode' ] );
    }

    public function social_links_shortcode() {
        ob_start();
        require_once('parts/social_front_template.php');
        $content = ob_get_clean();
        apply_filters('si_content', $content);
        return $content;
    }
}





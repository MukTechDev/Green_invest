<?php
require_once get_template_directory() . '/wp_pg_helpers.php';

function my_theme_scripts() {
    // Enqueue CSS
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/css-main.34aef33c831eb5708be0.css');
    
    // Enqueue JavaScript files
    wp_enqueue_script('klaviyo-js', get_template_directory_uri() . '/js/Tdau3v-klaviyo.js', array(), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/js-main.319cd4cd2ea376435fa5.js', array('jquery'), null, true);
    wp_enqueue_script('cloudflare-js', get_template_directory_uri() . '/js/cloudflare-static-email-decode.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');


?>



<?php
// Enqueue styles and scripts
function jayrotheme_scripts() {
    // Main stylesheet (style.css in theme root)
    wp_enqueue_style('jayrotheme-style', get_stylesheet_uri());
    wp_enqueue_style('jayrotheme-asset-fontawesome-all.min.css', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css');
    wp_enqueue_style('jayrotheme-asset-main.css', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script('jayrotheme-js-breakpoints.min.js', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), null, true);
    wp_enqueue_script('jayrotheme-js-browser.min.js', get_template_directory_uri() . '/assets/js/browser.min.js', array(), null, true);
    wp_enqueue_script('jayrotheme-js-jquery.min.js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true);
    wp_enqueue_script('jayrotheme-js-main.js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
    wp_enqueue_script('jayrotheme-js-util.js', get_template_directory_uri() . '/assets/js/util.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'jayrotheme_scripts');

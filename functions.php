<?php
/**geef g
 * Bora Starter Theme functions and definitions
 */

if(!function_exists('bora_setup')) :
    function bora_setup(){
        // Translate
        load_theme_textdomain('bora-starter', get_template_directory() . '/languages');

        // Feed links
        add_theme_support('automatic-feed-links');

        //title tag
        add_theme_support('title-tag');

        //Post thumbnails
        add_theme_support('post-thumbnails');

        //HTML5
        add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption'));

        // Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'bora-starter'),
        ));
    }
endif;

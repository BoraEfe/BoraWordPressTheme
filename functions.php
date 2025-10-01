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
add_action( 'after_setup_theme', 'bora_setup' );

// Widgets / Sidebar
function bora_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'bora-starter' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'bora_widgets_init' );

// Styles en scripts laden
function bora_scripts() {
    // Hoofd CSS bestand
    wp_enqueue_style( 'bora-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Eventueel extra JS (voorbeeld)
    // wp_enqueue_script( 'bora-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'bora_scripts' );
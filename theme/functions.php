<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function fivehd_enqueue_scripts_styles() {
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap' );
  // wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', array(), false, true );

  // **Everything** Foundation JS.
  // @todo: allow individual modules to be included, as required.
  // wp_enqueue_script( 'foundation-kitchen-sink', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js', array('jquery'), '6.4.3', true );
  // wp_add_inline_script( 'foundation-kitchen-sink', '(function($){$(document).foundation();})(jQuery);', 'after' );

    wp_enqueue_style( 'fivehdstarter', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));
}
add_action( 'wp_enqueue_scripts', 'fivehd_enqueue_scripts_styles' );

 wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery'), filemtime(get_stylesheet_directory() . '/js/theme.js'), true );

function fivehd_register_nav_menus() {
    register_nav_menus( array(
        'main-navigation' => __( 'Primary Menu', 'fivehdstarter' ),
    ) );
}
add_action( 'after_setup_theme', 'fivehd_register_nav_menus' );

function fivehd_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'main-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'fivehd_widgets_init' );

function larra_custom_image_sizes() {
  add_image_size( 'header-image', 2000, 650, true );
}

add_action( 'after_setup_theme', 'larra_custom_image_sizes' );


// Gutenberg custom stylesheet
add_theme_support('editor-styles');
add_editor_style( 'editor-style.css' ); // make sure path reflects where the file is located


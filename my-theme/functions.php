<?php

function my_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

function my_theme_enqueue_scripts() {
    wp_enqueue_style(
        'my-theme-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.0'
    );
    wp_enqueue_script(
        'my-theme-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );

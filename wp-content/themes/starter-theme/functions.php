<?php

/**
 * Enqueue Styles & Scripts
 */
function pemberley_styles() {
    wp_enqueue_style( 'pemberley_styles', get_template_directory_uri() . '/dist/styles/style.css' );
    wp_enqueue_script( 'pemberley_scripts', get_template_directory_uri() . '/src/scripts/main.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'pemberley_styles' );

/**
 * Add Custom Styles to Admin Area
 */
function pemberley_admin_styles() {
    wp_enqueue_style('pemberley-admin-styles', get_template_directory_uri() . '/admin/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'pemberley_admin_styles');

function pemberley_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/admin/css/login-styles.css' );
}
add_action( 'login_enqueue_scripts', 'pemberley_login_stylesheet' );

/**
 * Register Main Nav
 */
function register_pemberley_menus() {
    register_nav_menus(
        array(
            'pemberley-menu' => __( 'Header Menu' )
        )
    );
}
add_action( 'init', 'register_pemberley_menus' );

/**
 * Theme Support for Thumbnails
 */
add_theme_support( 'post-thumbnails' );

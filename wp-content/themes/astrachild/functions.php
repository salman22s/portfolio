<?php
// Enqueue Parent and Child Theme Styles
function astra_child_enqueue_styles() {
    // Load parent theme style
    wp_enqueue_style('astra-theme-css', get_template_directory_uri() . '/style.css');

    // Load child theme base style
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_directory_uri() . '/styles/style.css',
        array('astra-theme-css'),
        wp_get_theme()->get('Version')
    );

    // Load specific section styles
    wp_enqueue_style(
        'astra-child-header-style',
        get_stylesheet_directory_uri() . '/styles/header.css',
        array('astra-child-style'),
        filemtime(get_stylesheet_directory() . '/styles/header.css')
    );

    wp_enqueue_style(
        'astra-child-footer-style',
        get_stylesheet_directory_uri() . '/styles/footer.css',
        array('astra-child-style'),
        filemtime(get_stylesheet_directory() . '/styles/footer.css')
    );
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles', 15);

// Enqueue custom JS
function custom_theme_scripts() {
    wp_enqueue_script(
        'custom-js',
        get_stylesheet_directory_uri() . '/js/custom-js.js',
        array(),
        filemtime(get_stylesheet_directory() . '/js/custom-js.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

// Register Desktop and Mobile Menus
function register_custom_menus() {
    register_nav_menus(array(
        'navmenu'    => __('Nav Menu'),       // For desktop
        'mobilemenu' => __('Mobile Menu'),    // For mobile
    ));
}
add_action('init', 'register_custom_menus');
?>

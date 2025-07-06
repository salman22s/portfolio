<?php
function astra_child_enqueue_styles() {
    wp_enqueue_style('astra-theme-css', get_template_directory_uri() . '/style.css');

    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_directory_uri() . '/styles/style.css',
        array('astra-theme-css'),
        wp_get_theme()->get('Version')
    );

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

function register_custom_menus() {
    register_nav_menu('navmenu', __('Nav Menu'));
}
add_action('init', 'register_custom_menus');

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
?>

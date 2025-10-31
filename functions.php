<?php
function site_creativedata_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'site_creativedata_scripts');

function site_creativedata_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'main-menu' => __('Menu Principal', 'site-creativedata'),
    ));
}
add_action('after_setup_theme', 'site_creativedata_setup');

<?php

function addStyleSheets():void {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'addStyleSheets');

add_theme_support('menus');

register_nav_menus(
    array(
        'main-menu' => 'Main menu location',
        'footer-menu' => 'Footer menu location'
    )
);
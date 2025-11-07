<?php
// Basic theme setup
function swarajsecurity_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('primary'=>'Primary Menu'));
}
add_action('after_setup_theme','swarajsecurity_setup');

function swarajsecurity_scripts() {
    wp_enqueue_style('swaraj-main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','swarajsecurity_scripts');

<?php
/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
add_theme_support('post-thumbnails');

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(array(
    'main-menu' => 'Main Menu'
));

// Register widget area.
register_sidebar(array(
    'name' => 'Sidebar Right',
    'id' => 'sidebar-right',
    'description' => 'Display sidebar right',
    'before_widget' => '<div class="side-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
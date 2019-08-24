<?php

add_action('wp_enqueue_scripts', function () {
//    wp_dequeue_style('wp-block-library');
});

add_theme_support('post-thumbnails');

// Bind style with version
$theme = wp_get_theme();
$ver = $theme->get('Version');
$themecsspath = get_stylesheet_directory() . '/style.css';
$style_ver = filemtime($themecsspath);
wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), $style_ver);
<?php

if(!defined('ABSPATH')){
    exit();
}
// Enqueue stylesheets
function bookmylaundary_enqueue_styles() {
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'bookmylaundary_enqueue_styles');

// Enqueue scripts
function bookmylaundary_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_style('dashicons');
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');

    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
   // wp_enqueue_script('jquery-migrate-js', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js', array('jquery'), '', true);
    wp_enqueue_script('slick-js', 'https://kenwheeler.github.io/slick/slick/slick.min.js', array('jquery'), '', true);
    
}
add_action('wp_enqueue_scripts', 'bookmylaundary_enqueue_scripts');

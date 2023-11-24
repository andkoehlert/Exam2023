<?php
function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css'); 
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function theme_support(){
    add_theme_support('title_tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('page-templates');

}

add_action('after_setup_theme', 'theme_support');

function plp_register_strings() {
    pll_register_string('homeTitle', 'This is the frontpage');
   

}

function menus () {
 $locations = array(
     'primary' => "Desktop Primary Left Sidebar",
     'footer' => "Footer Menu Items"
 );   
 register_nav_menus($locations);

}

add_action('init', 'menus');

function register_styles_and_scripts() {
    // Enqueue your theme's style.css
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');

    // Enqueue Bootstrap stylesheet
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');

    // Enqueue Bootstrap JavaScript (popper.js is required for certain Bootstrap components)
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '1.12.9', true);
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery', 'popper'), '4.0.0', true);
}

add_action('wp_enqueue_scripts', 'register_styles_and_scripts');


/* function add_custom_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('day-night-script', get_template_directory_uri() . '/js/day-night-script.js', array('jquery'), '1.0', true);

    // Pass data to script
    wp_localize_script('day-night-script', 'day_night_params', array(
        'day_image' => get_template_directory_uri() . '/assets/images/day.jpg',
        'night_image' => get_template_directory_uri() . '/assets/images/night.jpg',
    ));
}

add_action('wp_enqueue_scripts', 'add_custom_scripts'); */
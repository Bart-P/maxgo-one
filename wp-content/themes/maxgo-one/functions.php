<?php

function load_css(): void {
	wp_register_style('tailwind', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('tailwind');

	wp_register_style('fontawesome', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css');
	wp_enqueue_style('fontawesome');

	wp_register_style('fa-solid', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/solid.css');
	wp_enqueue_style('fa-solid');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js(): void {
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('custom-logo' );
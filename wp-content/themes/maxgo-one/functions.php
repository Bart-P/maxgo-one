<?php

use Carbon_Fields\Carbon_Fields;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options(): void {
	Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
	         ->add_fields( array(
		                       Field::make( 'text', 'crb_text', 'Text Field' ),
	                       ) );

	//TODO add field in Card with a checkbox to show on Front Page - maybe as simple Card or big section Card..

	Container::make('post_meta', __('Kurzbeschreibung', 'crb'))
	         ->where('post_type', '=', 'page')
	         ->add_fields(array(
		                      Field::make('text', 'crb_short_title', 'Überschrift'),
		                      Field::make('textarea', 'crb_short_description', 'Text')
		                           ->set_rows(4),
	                      ));

	Container::make('post_meta', __('Banner', 'crb'))
	         ->where('post_type', '=', 'page')
	         ->add_fields(array(
		                      Field::make('image', 'crb_banner_image', 'Hintergrund Bild'),
		                      Field::make('text', 'crb_banner_title', 'Überschrift'),
		                      Field::make('text', 'crb_banner_description', 'Text'),
	                      ));
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load(): void {
	require_once( 'vendor/autoload.php' );
	Carbon_Fields::boot();
}


// Load CSS
function load_css(): void {
	wp_register_style('tailwind', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('tailwind');

	wp_register_style('fontawesome', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css');
	wp_enqueue_style('fontawesome');

	wp_register_style('fa-solid', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/solid.css');
	wp_enqueue_style('fa-solid');
}
add_action('wp_enqueue_scripts', 'load_css');

//Load Javascript (JQuery)
function load_js(): void {
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('custom-logo' );
add_theme_support('menus' );

// Menus
register_nav_menus(
	array(
		'top-navigation' => 'Top Menu Location',
		'mobile-navigation' => 'Mobile Menu Location',
		'legal-navigation' => 'Legal Menu Location',
		'footer-navigation' => 'Footer Menu Location',
	)
);
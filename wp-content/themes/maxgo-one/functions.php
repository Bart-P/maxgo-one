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

	Container::make('post_meta', __('Kurzbeschreibung', 'crb'))
	         ->where('post_type', '=', 'page')
			 ->or_where('post_type', '=', 'products')
			 ->or_where('post_type', '=', 'services')
	         ->add_fields(array(
				              Field::make('checkbox', 'crb_show_in_card_on_frontpage', 'Auf Startseite als Karte anzeigen (ohne Bild)'),
				              Field::make('checkbox', 'crb_show_in_section_on_frontpage', 'Auf Startseite als Sektion anzeigen (mit Bild)'),
				              Field::make('image', 'crb_short_image', 'Foto'),
		                      Field::make('text', 'crb_short_title', 'Überschrift'),
		                      Field::make('textarea', 'crb_short_description', 'Text')
		                           ->set_rows(4),
	                      ));

	Container::make('post_meta', __('Banner', 'crb'))
	         ->where('post_type', '=', 'page')
			 ->or_where('post_type', '=', 'services')
	         ->add_fields(array(
		                      Field::make('image', 'crb_banner_image', 'Hintergrund Bild'),
		                      Field::make('text', 'crb_banner_title', 'Überschrift'),
		                      Field::make('text', 'crb_banner_description', 'Text'),
	                      ));

	Container::make('post_meta', __('Produkt mit 5 bullets', 'crb'))
	         ->where('post_type', '=', 'page')
			 ->or_where('post_type', '=', 'products')
	         ->add_fields(array(
		                      Field::make('checkbox', 'crb_product_show', 'Auf Seite Anzeigen'),
		                      Field::make('image', 'crb_product_image', 'Hintergrund Bild'),
		                      Field::make('text', 'crb_product_title', 'Überschrift'),
		                      Field::make('text', 'crb_product_description', 'Kurzbeschreibung'),
		                      Field::make('text', 'crb_product_bullet1', 'Bullet Qualität'),
		                      Field::make('text', 'crb_product_bullet2', 'Bullet Sicherheit'),
		                      Field::make('text', 'crb_product_bullet3', 'Bullet Baustelle'),
		                      Field::make('text', 'crb_product_bullet4', 'Bullet Flexibel'),
		                      Field::make('text', 'crb_product_bullet5', 'Bullet Robust'),
	                      ));

	Container::make('post_meta', __('Technische Datails', 'crb'))
	         ->where('post_type', '=', 'products')
	         ->add_fields(array(
				 Field::make('complex', 'crb_tech_details', 'Teschniche Daten')
						->add_fields(array(
							 Field::make('text', 'crb_tech_title', 'Bezeichnung'),
							 Field::make('text', 'crb_tech_description', 'Text'),
						 ))));

	Container::make('post_meta', __('Leistungsheader mit Bullets', 'crb'))
		->where('post_type', '=', 'services')
		->add_fields(array(
				Field::make('text', 'crb_service_title', 'Überschrift'),
				Field::make('text', 'crb_service_short', 'Kurzbeschreibung'),
				Field::make('complex', 'crb_service_bullets')
					->set_max(4)
					->set_min(4)
					->add_fields(array(
						Field::make('text', 'crb_service_bullet_icon_unicode'),
						Field::make('text', 'crb_service_bullet_header'),
						Field::make('text', 'crb_service_bullet_description'),
								 )),
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

// Post Types
function product_post_type(): void {
	$args = array(
		'public' => true,
		'labels' => array(
			'name' => 'Produkte',
			'singular_name' => 'Produkt'
		),
		'supports' => array('title', 'editor', 'page-attributes'),
		'hierarchical' => true,
	);

	register_post_type('products', $args);
}
add_action('init', 'product_post_type');

function service_post_type(): void {
	$args = array(
		'public' => true,
		'has_archive' => false,
		'labels' => array(
			'name' => 'Leistungen',
			'singular_name' => 'Leistung'
			),
		'hierarchical' => true,
	);

	register_post_type('services', $args);
}
add_action('init', 'service_post_type');
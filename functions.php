<?php
function getPageTemplateCommand()
{
	$pageTemplateSlug = get_page_template_slug();
	
	if(
			$pageTemplateSlug === 'page-template/front-page.php' ||
			empty($pageTemplateSlug)
	){
		return null;
	}
	
	return explode("-",str_replace(".php", "", $pageTemplateSlug));	
}

// Plugins
require get_template_directory() . '/plugins/acf-repeater/acf-repeater.php';

function orappa_setup() {
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'orappa' ) );
	
	// Register custom navigation walker
	require_once('inc/wp_bootstrap_navwalker.php');
	
	// Defines custom header
	$customHeaderArgs = array(
		'default-image' => get_template_directory_uri() . "/images/logo.png",
		'uploads' => true
	);
	add_theme_support( 'custom-header', $customHeaderArgs );
}
add_action( 'after_setup_theme', 'orappa_setup' );

function orappa_scripts_styles() {
	//jQuery
	wp_enqueue_script( 'jquery');
	
	/*
	 * Bootstrap
	 * url: http://getbootstrap.com/
	 */
	wp_enqueue_script( 'orappa-bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array('jquery'), '3.1.1', false);
	wp_enqueue_style( 'orappa-bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css', array(), '3.1.1');
	
	//Backgrounds
	wp_enqueue_style( 'orappa-background', get_template_directory_uri() . '/css/background.css', array(), '1.0');
	
	//Navbar-default override
	wp_enqueue_style( 'orappa-nav', get_template_directory_uri() . '/css/navbar-default.css', array('orappa-bootstrap'), '1.0');
	
	//Fonts
	wp_enqueue_style( 'google-oswald', 'http://fonts.googleapis.com/css?family=Oswald:300,400');
}
add_action( 'wp_enqueue_scripts', 'orappa_scripts_styles' );
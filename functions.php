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

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'home-news-thumb', '360', '240', array('center', 'center') );

function orappa_setup() {
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', 'Menu principal' );
	register_nav_menu( 'primary-large', 'Menu principal para telas grandes (>= 1220px)');
	
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
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-1.11.2.min.js', array(), '1.11.2');
	wp_enqueue_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js', array('jquery'), '1.2.1');
	
	/*
	 * Bootstrap
	 * url: http://getbootstrap.com/
	 */
	wp_enqueue_script( 'orappa-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', array('jquery'), '3.3.2');
	wp_enqueue_style( 'orappa-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css', array(), '3.3.2');
	
	//CSS
	wp_enqueue_style( 'orappa-background', get_template_directory_uri() . '/css/background.css', array(), '1.0'); //Backgrounds
	wp_enqueue_style( 'orappa-nav', get_template_directory_uri() . '/css/navbar-default.css', array('orappa-bootstrap'), '1.0'); //Navbar-default override

	//Javascript
	wp_enqueue_script( 'orappa-functions', get_template_directory_uri() . '/js/functions.js', array('jquery', 'orappa-bootstrap'));
	
	//Fonts
	wp_enqueue_style( 'google-oswald', 'http://fonts.googleapis.com/css?family=Oswald:300,400');
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	
	//Youtube iframe API
	wp_enqueue_script('youtube-iframe', 'https://www.youtube.com/iframe_api', array('jquery', 'orappa-functions'));
	
	//jQuery Colorbox
	wp_enqueue_script('jquery-colorbox', get_template_directory_uri() . '/js/colorbox/jquery.colorbox-min.js', array('jquery'), '1.5.14');
	wp_enqueue_style('jquery-colorbox', get_template_directory_uri() . '/js/colorbox/colorbox.css');
}
add_action( 'wp_enqueue_scripts', 'orappa_scripts_styles' );

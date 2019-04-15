<?php

define('THEME_VERSION', '0.1.1');




if(!function_exists('JTS_addCssFile')){
	function JTS_addCssFile()
	{
		wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array() );
		wp_enqueue_style( 'normalize', 'https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css' );
		wp_enqueue_style( 'flexboxgrid', 'https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css' );
		wp_enqueue_style( 'default', get_stylesheet_uri(), array('flexboxgrid', 'google-fonts'), THEME_VERSION, 'all' );
	}
}

add_action( 'wp_enqueue_scripts', 'JTS_addCssFile' );

require_once( get_template_directory() .  '/inc/theme_supports.php');
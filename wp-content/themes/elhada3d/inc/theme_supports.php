<?php 

if(!function_exists('jts_eh3d_setup')){

  function jts_eh3d_setup()
  {
    add_theme_support( 'custom-logo', array (
      'height' => 450,
      'width' => 450,
      'flex-height' => true,
      'flex-width' => true
    ) );
    //* Add HTML5 markup structure
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    
    //* Add viewport meta tag for mobile browsers
    add_theme_support( 'genesis-responsive-viewport' );
    
    //* Add support for custom background
    add_theme_support( 'custom-background' );
  }
    
}

add_action('after_setup_theme', 'jts_eh3d_setup');
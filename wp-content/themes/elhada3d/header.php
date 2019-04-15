<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title( ' | ', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php get_header('wordpress'); ?>
  <header class="header">
  <div class="container">
  <div class="col-md-5 logo">
      <?php
        if ( has_custom_logo() ):
          the_custom_logo();
        else:
          echo '<a href="' . esc_url( home_url( '/' ) ) . '">'. get_bloginfo('name') .'</a>';
        endif;
        ?>
    </div>
  </div>
  </header>
  <main class="Main">
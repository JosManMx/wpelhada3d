<?php
// Register Sidebars
if (!function_exists('jts_custom_sidebars')){
	function jts_custom_sidebars() {

		$args = array(
			'id'            => 'footer_left',
			'class'         => 'footer-left col-xs-12 col-md-3',
			'name'          => __( 'Pié de página Izquierdo', 'jts-hada3d' ),
		);
		register_sidebar( $args );

		$args = array(
			'id'            => 'footer_center',
			'class'         => 'footer-center col-xs-12 col-md-6',
			'name'          => __( 'Pié de página Central', 'jts-hada3d' ),
		);
		register_sidebar( $args );

		$args = array(
			'id'            => 'footer_right',
			'class'         => 'footer-right col-xs-12 col-md-3',
			'name'          => __( 'Pié de página Derecho', 'jts-hada3d' ),
		);
		register_sidebar( $args );

	}
}

add_action( 'widgets_init', 'jts_custom_sidebars' );
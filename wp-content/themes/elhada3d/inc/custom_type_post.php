<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Eventos.
	 */

	$labels = array(
		"name" => __( "Eventos", "jts-hada3d" ),
		"singular_name" => __( "Evento", "jts-hada3d" ),
		"menu_name" => __( "Eventos", "jts-hada3d" ),
		"all_items" => __( "Todos los Eventos", "jts-hada3d" ),
		"add_new" => __( "Agregar Evento", "jts-hada3d" ),
		"add_new_item" => __( "Agregar Evento", "jts-hada3d" ),
		"edit_item" => __( "Editar Evento", "jts-hada3d" ),
		"new_item" => __( "Nuevo Evento", "jts-hada3d" ),
		"view_item" => __( "Ver Evento", "jts-hada3d" ),
	);

	$args = array(
		"label" => __( "Eventos", "jts-hada3d" ),
		"labels" => $labels,
		"description" => "Eventos impartidos por Elhada3d",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "events", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-calendar-alt",
		"supports" => array( "title", "custom-fields" ),
	);

	register_post_type( "events", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );












function cptui_register_my_cpts_events() {

	/**
	 * Post Type: Eventos.
	 */

	$labels = array(
		"name" => __( "Eventos", "jts-hada3d" ),
		"singular_name" => __( "Evento", "jts-hada3d" ),
		"menu_name" => __( "Eventos", "jts-hada3d" ),
		"all_items" => __( "Todos los Eventos", "jts-hada3d" ),
		"add_new" => __( "Agregar Evento", "jts-hada3d" ),
		"add_new_item" => __( "Agregar Evento", "jts-hada3d" ),
		"edit_item" => __( "Editar Evento", "jts-hada3d" ),
		"new_item" => __( "Nuevo Evento", "jts-hada3d" ),
		"view_item" => __( "Ver Evento", "jts-hada3d" ),
	);

	$args = array(
		"label" => __( "Eventos", "jts-hada3d" ),
		"labels" => $labels,
		"description" => "Eventos impartidos por Elhada3d",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "events", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-calendar-alt",
		"supports" => array( "title", "custom-fields" ),
	);

	register_post_type( "events", $args );
}

add_action( 'init', 'cptui_register_my_cpts_events' );














function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Tipos de Eventos.
	 */

	$labels = array(
		"name" => __( "Tipos de Eventos", "jts-hada3d" ),
		"singular_name" => __( "Tipo de Evento", "jts-hada3d" ),
	);

	$args = array(
		"label" => __( "Tipos de Eventos", "jts-hada3d" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'type_event', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "type_event",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "type_event", array( "events" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );














function cptui_register_my_taxes_type_event() {

	/**
	 * Taxonomy: Tipos de Eventos.
	 */

	$labels = array(
		"name" => __( "Tipos de Eventos", "jts-hada3d" ),
		"singular_name" => __( "Tipo de Evento", "jts-hada3d" ),
	);

	$args = array(
		"label" => __( "Tipos de Eventos", "jts-hada3d" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'type_event', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "type_event",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "type_event", array( "events" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes_type_event' );

<?php // Creamos el post type de Servicios
function servicios_post_type() {

	$labels = array(
		'name'                  => _x( 'Servicios', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Servicios', 'text_domain' ),
		'name_admin_bar'        => __( 'Servicios', 'text_domain' ),
		'archives'              => __( 'Item Servicios', 'text_domain' ),
		'attributes'            => __( 'Item Servicios', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Servicio:', 'text_domain' ),
		'all_items'             => __( 'Todos los Servicios', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo Servicio', 'text_domain' ),
		'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Servicio', 'text_domain' ),
		'edit_item'             => __( 'Editar Servicio', 'text_domain' ),
		'update_item'           => __( 'Actualizar Servicio', 'text_domain' ),
		'view_item'             => __( 'Ver Servicio', 'text_domain' ),
		'view_items'            => __( 'Ver Servicios', 'text_domain' ),
		'search_items'          => __( 'Buscar Servicios', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Servicio', 'text_domain' ),
		'description'           => __( 'Servicios Descripcion', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'servicios', $args );

}
add_action( 'init', 'servicios_post_type', 0 );
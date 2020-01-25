<?php 

/**
  /////// album 
 */
function Yourcolor_Album() {

	$labels = array(
		'name'               => __( 'Albums', 'YourColor Engineer' ),
		'singular_name'      => __( 'Albums', 'YourColor Engineer' ),
		'menu_name'          => __( 'Albums', 'YourColor Engineer' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array('tax_category'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
		),
	);

	register_post_type( 'album', $args );
}

add_action( 'init', 'Yourcolor_Album' );

/**
  /////// faqs 
 */
function Yourcolor_service() {

	$labels = array(
		'name'               => __( 'Services', 'YourColor Engineer' ),
		'singular_name'      => __( 'Services', 'YourColor Engineer' ),
		'menu_name'          => __( 'Services', 'YourColor Engineer' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
		),
	);

	register_post_type( 'service', $args );
}

add_action( 'init', 'Yourcolor_service' );

/**
  /////// team work 
 */
function Yourcolor_teamwork() {

	$labels = array(
		'name'               => __( 'Teamwork', 'YourColor Engineer' ),
		'singular_name'      => __( 'Teamwork', 'YourColor Engineer' ),
		'menu_name'          => __( 'Teamwork', 'YourColor Engineer' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
		),
	);

	register_post_type( 'teamwork', $args );
}

add_action( 'init', 'Yourcolor_teamwork' );

/**
  /////// testimonials 
 */
function Yourcolor_tistim() {

	$labels = array(
		'name'               => __( 'Testimonials', 'YourColor Engineer' ),
		'singular_name'      => __( 'Testimonials', 'YourColor Engineer' ),
		'menu_name'          => __( 'Testimonials', 'YourColor Engineer' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
		),
	);

	register_post_type( 'client', $args );
}

add_action( 'init', 'Yourcolor_tistim' );



/**
  /////// Slider post type 
 */
function yourcolor_slider() {

	$labels = array(
		'name'               => __( 'Slider', 'YourColor Engineer' ),
		'singular_name'      => __( 'Slider', 'YourColor Engineer' ),
		'menu_name'          => __( 'Slider', 'YourColor Engineer' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
		),
	);

	register_post_type( 'slider', $args );
}

add_action( 'init', 'yourcolor_slider' );




/**
  /////// Slider post type 
 */
function partener() {

	$labels = array(
		'name'               => __( 'Partners', 'YourColor Engineer' ),
		'singular_name'      => __( 'Partners', 'YourColor Engineer' ),
		'menu_name'          => __( 'Partners', 'YourColor Engineer' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'thumbnail',
		),
	);

	register_post_type( 'partener', $args );
}

add_action( 'init', 'partener' );

/**
  /////// faqs 
 */
function Yourcolor_faqs() {

	$labels = array(
		'name'               => __( 'Faqs', 'YourColor Engineer' ),
		'singular_name'      => __( 'Faqs', 'YourColor Engineer' ),
		'menu_name'          => __( 'Faqs', 'YourColor Engineer' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
		),
	);

	register_post_type( 'faqs', $args );
}

add_action( 'init', 'Yourcolor_faqs' );


/**
  /////// Order 
 */
function Yourcolor_offer() {

	$labels = array(
		'name'               => __( 'Make Your Order', 'YourColor Engineer' ),
		'singular_name'      => __( 'Make Your Order', 'YourColor Engineer' ),
		'menu_name'          => __( 'Make Your Order', 'YourColor Engineer' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
		),
	);

	register_post_type( 'offer', $args );
}

add_action( 'init', 'Yourcolor_offer' );
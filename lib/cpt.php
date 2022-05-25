<?php // Our custom post type function
  
  
function create_posttype() {

	register_post_type( 'solutions',
	// CPT Options
		array(
			'labels' => array(
				'name'                  => __( 'Solutions' ),
				'singular_name'         => __( 'Solution' ),
    		'all_items'             => __( 'Alle solutions' ),
    		'add_new_item'          => __( 'Nieuwe solution toevoegen' ),
    		'new_item'              => __( 'Nieuwe solution' ),
        'add_new'               => __( 'Nieuwe solution' ),
    		'edit_item'             => __( 'Bewerk solution' ),
    		'update_item'           => __( 'Update solution' ),
    		'view_item'             => __( 'Bekijk solution' ),
    		'search_items'          => __( 'Zoek solution' ),
			),
			'menu_icon'           => 'dashicons-share',
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'solution'),
		)
	);
	
	register_post_type( 'cases',
	// CPT Options
		array(
			'labels' => array(
				'name'                  => __( 'Cases' ),
				'singular_name'         => __( 'Case' ),
    		'all_items'             => __( 'Alle cases' ),
    		'add_new_item'          => __( 'Nieuwe case toevoegen' ),
    		'new_item'              => __( 'Nieuwe case' ),
        'add_new'               => __( 'Nieuwe case' ),
    		'edit_item'             => __( 'Bewerk case' ),
    		'update_item'           => __( 'Update case' ),
    		'view_item'             => __( 'Bekijk case' ),
    		'search_items'          => __( 'Zoek case' ),
			),
			'menu_icon'           => 'dashicons-admin-site',
			'public' => true,
			'has_archive' => false,
			'supports' => array( 'title', 'editor', 'thumbnail' )
		)
	);
	
	register_post_type( 'jobs',
	// CPT Options
		array(
			'labels' => array(
				'name'                  => __( 'Vacatures' ),
				'singular_name'         => __( 'Vacature' ),
			'all_items'             => __( 'Alle vacatures' ),
			'add_new_item'          => __( 'Nieuwe vacature toevoegen' ),
			'new_item'              => __( 'Nieuwe vacature' ),
		'add_new'               => __( 'Nieuwe vacature' ),
			'edit_item'             => __( 'Bewerk vacature' ),
			'update_item'           => __( 'Update vacature' ),
			'view_item'             => __( 'Bekijk vacature' ),
			'search_items'          => __( 'Zoek vacature' ),
			),
			'menu_icon'           => 'dashicons-businessperson',
			'public' => true,
			'has_archive' => false,
			'supports' => array( 'title', 'editor', 'thumbnail' )
		)
	);
			
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' ); 

?>
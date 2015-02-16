<?php
	//register menu
	function register_menu() {
	  register_nav_menu('menu_top',__( 'menu_top' ));
	  
		register_nav_menus( array(
			'menu_top' => 'Header - Menu',
			'menu_service' => 'Service - Menu'
		) );
	  register_nav_menu('menu_service',__( 'menu_service' ));
	}
	add_action( 'init', 'register_menu' );
	
	//add theme support
	add_theme_support('post-thumbnails',array('post','page','slider','news','clients'));
	
	//register meta box
	// Initialize the metabox class
	//metabox
	define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/meta-box' ) );
	define( 'RWMB_DIR', trailingslashit( STYLESHEETPATH . '/meta-box' ) );
	require_once RWMB_DIR . 'meta-box.php';
	include RWMB_DIR.'/custom/add-meta-box.php';
	
	//register post type
	include TEMPLATEPATH.'/post-type/registry-post-type.php';

	//customize options
	//include 'wptuts-options/wptuts-options.php'; 
	
	//change label post
	include 'inc/change_label_post.php';
	
	//breadcrums
	include 'inc/breadcrums.php';
	//paging blog
	//include 'inc/page_nav.php';
	
	//cache function
	//include TEMPLATEPATH .'/inc/disk_cached.php' ;
	
	//rewrite search result
	function change_services_url_rewrite() {
		if(is_page('services')){
			wp_redirect( home_url( "/services/bouwpromotoren-investeerders/")  );
			exit();
		}	
	}
	add_action( 'template_redirect', 'change_services_url_rewrite' );
	//remove p tag
	//remove_filter( 'the_content', 'wpautop' );
	add_action( 'admin_init', 'hide_editor' );
	
	function get_page_id_by_slug($slug){
	    global $wpdb;
	    $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'AND post_type = 'page'");
	    return $id;
	}
	
	function get_post_id_by_slug($slug){
	    global $wpdb;
	    $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'AND post_type = 'post'");
	    return $id;
	}
	
	function get_post_id( $slug, $post_type ) {
		if(!empty($slug)){
		    $query = new WP_Query(
		        array(
		            'name' => $slug,
		            'post_type' => $post_type
		        )
		    );
		
		    $query->the_post();
		
		    return get_the_ID();
		}
	}
	function the_slug($id) {
		$post_data = get_post($id, ARRAY_A);
		$slug = $post_data['post_name'];
		return $slug; 
	}
	
	function get_next_post_id( $post_id ) {
	    // Get a global post reference since get_adjacent_post() references it
	    global $post;
	
	    // Store the existing post object for later so we don't lose it
	    $oldGlobal = $post;
	
	    // Get the post object for the specified post and place it in the global variable
	    $post = get_post( $post_id );
	
	    // Get the post object for the previous post
	    $previous_post = get_next_post();
	
	    // Reset our global object
	    $post = $oldGlobal;
	
	    if ( '' == $previous_post ) 
	        return 0;
	
	    return $previous_post->ID;
	}
	function get_previous_post_id( $post_id ) {
	    // Get a global post reference since get_adjacent_post() references it
	    global $post;
	
	    // Store the existing post object for later so we don't lose it
	    $oldGlobal = $post;
	
	    // Get the post object for the specified post and place it in the global variable
	    $post = get_post( $post_id );
	
	    // Get the post object for the previous post
	    $previous_post = get_previous_post();
	
	    // Reset our global object
	    $post = $oldGlobal;
	
	    if ( '' == $previous_post ) 
	        return 0;
	
	    return $previous_post->ID;
	}
	
	
	function get_child_pages_by_parent_title($pageId,$limit)
	{
	    // needed to use $post
	    global $post;
	    // used to store the result
	    $pages = array();
	
	    // What to select
	    $args = array(
	        'post_type' => 'page',
	        'post_parent' => $pageId,
	        'posts_per_page' => $limit,
	        'order'			 => 'asc'
	    );
	    $the_query = new WP_Query( $args );
	
	    while ( $the_query->have_posts() ) {
	        $the_query->the_post();
	        $pages[] = $post;
	    }
	    wp_reset_postdata();
	    return $pages;
	}
<?php
/*slider*/
add_action( 'init', 'register_custom_slider' );
function register_custom_slider() {	
	$news_label = array(
    'name' => _x('Slider', 'Slider'),
    'singular_name' => _x('slider', 'slider'),
    'add_new' => _x('Add New', 'Slider'),
    'add_new_item' => __('Add New'),
    'edit_item' => __('Edit '),
    'new_item' => __('Add New'),
    'all_items' => __('View All'),
    'view_item' => __('View'),
    'search_items' => __('Search'),
    'not_found' =>  __('Not Find'),
    'not_found_in_trash' => __('Not Find in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Slider'
  );
  $news= array(
    'labels' => $news_label,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
   'show_in_nav_menus'=>true,
    'query_var' => true,
    'rewrite' =>  array('slug'=>'slider'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,  
    'menu_icon'	=> get_bloginfo('template_url').'/post-type/images/slider.jpg',
  	'taxonomies'		=> array('category'),
    'supports' => array('title','editor','thumbnail'),
    
  ); 
 register_post_type('slider',$news);
}


//NEWS
add_action( 'init', 'register_custom_news' );
function register_custom_news() {	
	$news_label = array(
    'name' => _x('Hompage Links', 'Hompage Links'),
    'singular_name' => _x('news', 'news'),
    'add_new' => _x('Add New', 'HOMEPAGE LINKS'),
    'add_new_item' => __('Add New'),
    'edit_item' => __('Edit '),
    'new_item' => __('Add New'),
    'all_items' => __('View All'),
    'view_item' => __('View'),
    'search_items' => __('Search'),
    'not_found' =>  __('Not Find'),
    'not_found_in_trash' => __('Not Find in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Hompage Links'
  );
  $news= array(
    'labels' => $news_label,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
   'show_in_nav_menus'=>true,
    'query_var' => true,
    'rewrite' =>  array('slug'=>'news'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,  
    'menu_icon'	=> get_bloginfo('template_url').'/post-type/images/facities.png',
  	'taxonomies'		=> array('category'),
    'supports' => array('title','editor','thumbnail'),
    
  ); 
 register_post_type('news',$news);
}

//CLIENTS
add_action( 'init', 'register_custom_clients' );
function register_custom_clients() {	
	$news_label = array(
    'name' => _x('Partners', 'Partners'),
    'singular_name' => _x('clients', 'clients'),
    'add_new' => _x('Add New', 'Clients'),
    'add_new_item' => __('Add New'),
    'edit_item' => __('Edit '),
    'new_item' => __('Add New'),
    'all_items' => __('View All'),
    'view_item' => __('View'),
    'search_items' => __('Search'),
    'not_found' =>  __('Not Find'),
    'not_found_in_trash' => __('Not Find in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Partners'
  );
  $news= array(
    'labels' => $news_label,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
   'show_in_nav_menus'=>true,
    'query_var' => true,
    'rewrite' =>  array('slug'=>'clients'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,  
    'menu_icon'	=> get_bloginfo('template_url').'/post-type/images/facities.png',
  	'taxonomies'		=> array('category'),
    'supports' => array('title','thumbnail'),
    
  ); 
 register_post_type('clients',$news);
}

//ABOUT LEFT
add_action( 'init', 'register_custom_ta_about' );
function register_custom_ta_about() {
    $news_label = array(
        'name' => 'Abouts',
        'singular_name' => _x('ta_about', 'ta_about'),
        'add_new' => _x('Add New', 'About'),
        'add_new_item' => __('Add New'),
        'edit_item' => __('Edit '),
        'new_item' => __('Add About'),
        'all_items' => __('View All'),
        'view_item' => __('View'),
        'search_items' => __('Search'),
        'not_found' =>  __('Not Find'),
        'not_found_in_trash' => __('Not Find in Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Abouts'
    );
    $news= array(
        'labels' => $news_label,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus'=>true,
        'query_var' => true,
        'rewrite' =>  array('slug'=>'ta_about'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'menu_icon'	=> get_bloginfo('template_url').'/post-type/images/facities.png',

    );
    register_post_type('ta_about',$news);
}

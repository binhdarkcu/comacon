<?php

	function revcon_change_post_label() {
	    global $menu;
	    global $submenu;
	    $menu[5][0] = 'Referenties';
	    $submenu['edit.php'][5][0] = 'Referenties';
	    $submenu['edit.php'][10][0] = 'Add Referenties';
	    $submenu['edit.php'][16][0] = 'Referenties Tags';
	    echo '';
	}
	function revcon_change_post_object() {
	    global $wp_post_types;
	    $labels = &$wp_post_types['post']->labels;
	    $labels->name = 'Referenties';
	    $labels->singular_name = 'Referenties';
	    $labels->add_new = 'Add Referenties';
	    $labels->add_new_item = 'Add Referenties';
	    $labels->edit_item = 'Edit Referenties';
	    $labels->new_item = 'Referenties';
	    $labels->view_item = 'View Referenties';
	    $labels->search_items = 'Search Referenties';
	    $labels->not_found = 'No News found';
	    $labels->not_found_in_trash = 'No News found in Trash';
	    $labels->all_items = 'All Referenties';
	    $labels->menu_name = 'Referenties';
	    $labels->name_admin_bar = 'Referenties';
	}
	 
	add_action( 'admin_menu', 'revcon_change_post_label' );
	add_action( 'init', 'revcon_change_post_object' );
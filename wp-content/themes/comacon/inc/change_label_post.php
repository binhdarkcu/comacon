<?php

	function revcon_change_post_label() {
	    global $menu;
	    global $submenu;
	    $menu[5][0] = 'References';
	    $submenu['edit.php'][5][0] = 'References';
	    $submenu['edit.php'][10][0] = 'Add References';
	    $submenu['edit.php'][16][0] = 'References Tags';
	    echo '';
	}
	function revcon_change_post_object() {
	    global $wp_post_types;
	    $labels = &$wp_post_types['post']->labels;
	    $labels->name = 'Referenties';
	    $labels->singular_name = 'Projects';
	    $labels->add_new = 'Add Projects';
	    $labels->add_new_item = 'Add Projects';
	    $labels->edit_item = 'Edit Projects';
	    $labels->new_item = 'Projects';
	    $labels->view_item = 'View Projects';
	    $labels->search_items = 'Search Projects';
	    $labels->not_found = 'No News found';
	    $labels->not_found_in_trash = 'No News found in Trash';
	    $labels->all_items = 'All Projects';
	    $labels->menu_name = 'Projects';
	    $labels->name_admin_bar = 'Projects';
	}
	 
	add_action( 'admin_menu', 'revcon_change_post_label' );
	add_action( 'init', 'revcon_change_post_object' );
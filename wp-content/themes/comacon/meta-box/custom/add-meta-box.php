<?php
$prefix = 'tt_';
global $meta_boxes;
$meta_boxes = array();


$meta_boxes[] =array(
   'id'=>'clients_meta',
   'title'=>'Images for Clients',
   'pages'=> array('clients'),
   'context' => 'normal',
   'priority' => 'high',
   'fields' => array(
  		
   		array(
			'name'             => 'Logo',
			'id'               => "{$prefix}logo_clients",
			'type'             => 'plupload_image'
		),
		array(
			'name'             => 'Link',
			'id'               => "{$prefix}link_clients",
			'type'             => 'textarea'
		)
	 )
);

$meta_boxes[] =array(
   'id'=>'projects_meta',
   'title'=>'Images for project',
   'pages'=> array('post'),
   'context' => 'normal',
   'priority' => 'high',
   'fields' => array(
  		
   		array(
			'name'             => 'Images',
			'id'               => "{$prefix}logo_projects",
			'type'             => 'plupload_image'
		)
	 )
);

/**
 * Register meta boxes
 *
 * @return void
 */
function register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'register_meta_boxes' );

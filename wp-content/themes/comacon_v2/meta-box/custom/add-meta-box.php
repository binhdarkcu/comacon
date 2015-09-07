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
   'id'=>'project_detail_meta',
   'title'=>'Details',
   'pages'=> array('post'),
   'context' => 'normal',
   'priority' => 'high',
   'fields' => array(
  		
   		array(
			'name'             => 'Images',
			'id'               => "{$prefix}logo_projects",
			'type'             => 'plupload_image'
		),
       array(
           'name'             => 'Date',
           'id'               => "{$prefix}date_projects",
           'type'             => 'text'
       ),

	 )
);

$meta_boxes[] =array(
    'id'=>'projects_meta',
    'title'=>'Services',
    'pages'=> array('post'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name'             => 'HAALBAARHEID',
            'id'               => "{$prefix}radio_services_01",
            'std'  =>'',
            'type'             => 'checkbox'
        ),
        array(
            'name'             => 'ONTWERP',
            'id'               => "{$prefix}radio_services_02",
            'std'  =>'',
            'type'             => 'checkbox'
        ),
        array(
            'name'             => 'PRIJSAANVRAGEN',
            'id'               => "{$prefix}radio_services_03",
            'std'  =>'',
            'type'             => 'checkbox'
        ),
        array(
            'name'             => 'BESTELLING',
            'id'               => "{$prefix}radio_services_04",
            'std'  =>'',
            'type'             => 'checkbox'
        ),
        array(
            'name'             => 'UITVOERING',
            'id'               => "{$prefix}radio_services_05",
            'std'  =>'',
            'type'             => 'checkbox'
        ),
        array(
            'name'             => 'VERKOOP EN MARKETING',
            'id'               => "{$prefix}radio_services_06",
            'std'  =>'',
            'type'             => 'checkbox'
        )
    )
);

$meta_boxes[] =array(
    'id'=>'abouts_meta',
    'title'=>'Images for project',
    'pages'=> array('ta_about'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(

        array(
            'name'             => 'Images',
            'id'               => "{$prefix}logo_about",
            'type'             => 'thickbox_image'
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

<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */



// Register Program Custom Post Type
function gradusone_program() {

	$labels = array(
		'name'                  => 'Programs',
		'singular_name'         => 'Program',
		'menu_name'             => 'Adult Program',
		'name_admin_bar'        => 'Program',
		'archives'              => 'Program Archives',
		'attributes'            => 'Program Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Programs',
		'add_new_item'          => 'Add New Program',
		'add_new'               => 'Add New Program',
		'new_item'              => 'New Program',
		'edit_item'             => 'Edit Program',
		'update_item'           => 'Update Program',
		'view_item'             => 'View Program',
		'view_items'            => 'View Programs',
		'search_items'          => 'Search Program',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Programs list',
		'items_list_navigation' => 'Programs list navigation',
		'filter_items_list'     => 'Filter programs list',
	);
	$args = array(
		'label'                 => 'Program',
		'description'           => 'listing of items to sell',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'programs', $args );

}
add_action( 'init', 'gradusone_program', 0 );


// Register events Custom Post Type
function gradusone_event() {

	$labels = array(
		'name'                  => 'Events',
		'singular_name'         => 'Event',
		'menu_name'             => 'Events',
		'name_admin_bar'        => 'Event',
		'archives'              => 'Event Archives',
		'attributes'            => 'Event Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Events',
		'add_new_item'          => 'Add New Event',
		'add_new'               => 'Add New Event',
		'new_item'              => 'New Event',
		'edit_item'             => 'Edit Event',
		'update_item'           => 'Update Event',
		'view_item'             => 'View Event',
		'view_items'            => 'View Events',
		'search_items'          => 'Search Event',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Events list',
		'items_list_navigation' => 'Events list navigation',
		'filter_items_list'     => 'Filter events list',
	);
	$args = array(
		'label'                 => 'Events',
		'description'           => 'listing of items to sell',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'gradusone_event', 0 );





// Register involved Custom Post Type
function gradusone_instructors() {

	$labels = array(
		'name'                  => 'Instructor',
		'singular_name'         => 'Instructor',
		'menu_name'             => 'Instructor',
		'name_admin_bar'        => 'Instructor',
		'archives'              => 'Instructor Archives',
		'attributes'            => 'Instructor Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Blogs',
		'add_new_item'          => 'Add New Instructor',
		'add_new'               => 'Add New Instructor',
		'new_item'              => 'New Instructor',
		'edit_item'             => 'Edit Instructor',
		'update_item'           => 'Update Instructor',
		'view_item'             => 'View Instructor',
		'view_items'            => 'View Instructor',
		'search_items'          => 'Search Instructor',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Instructor list',
		'items_list_navigation' => 'Instructor list navigation',
		'filter_items_list'     => 'Filter involved list',
	);
	$args = array(
		'label'                 => 'Instructor',
		'description'           => 'listing of items to sell',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'instructors', $args );

}
add_action( 'init', 'gradusone_instructors', 0 );



// Register involved Custom Post Type
function gradusone_team() {

	$labels = array(
		'name'                  => 'Team',
		'singular_name'         => 'Team',
		'menu_name'             => 'Team',
		'name_admin_bar'        => 'Team',
		'archives'              => 'Team Archives',
		'attributes'            => 'Team Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Blogs',
		'add_new_item'          => 'Add New Team',
		'add_new'               => 'Add New Team',
		'new_item'              => 'New Team',
		'edit_item'             => 'Edit Team',
		'update_item'           => 'Update Team',
		'view_item'             => 'View Team',
		'view_items'            => 'View Team',
		'search_items'          => 'Search Team',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Team list',
		'items_list_navigation' => 'Team list navigation',
		'filter_items_list'     => 'Filter involved list',
	);
	$args = array(
		'label'                 => 'Team',
		'description'           => 'listing of items to sell',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'gradusone_team', 0 );


// Register involved Custom Post Type
function gradusone_mentor() {

	$labels = array(
		'name'                  => 'Mentor',
		'singular_name'         => 'Mentor',
		'menu_name'             => 'Mentors',
		'name_admin_bar'        => 'Mentor',
		'archives'              => 'Mentor Archives',
		'attributes'            => 'Mentor Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Blogs',
		'add_new_item'          => 'Add New Mentor',
		'add_new'               => 'Add New Mentor',
		'new_item'              => 'New Mentor',
		'edit_item'             => 'Edit Mentor',
		'update_item'           => 'Update Mentor',
		'view_item'             => 'View Mentor',
		'view_items'            => 'View Mentor',
		'search_items'          => 'Search Mentor',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Mentor list',
		'items_list_navigation' => 'Mentor list navigation',
		'filter_items_list'     => 'Filter involved list',
	);
	$args = array(
		'label'                 => 'Mentor',
		'description'           => 'listing of items to sell',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'mentor', $args );

}
add_action( 'init', 'gradusone_mentor', 0 );




// // Register involved Custom Post Type
// function gradusone_resource() {

// 	$labels = array(
// 		'name'                  => 'Resource',
// 		'singular_name'         => 'Resource',
// 		'menu_name'             => 'Resource',
// 		'name_admin_bar'        => 'Resource',
// 		'archives'              => 'Resource Archives',
// 		'attributes'            => 'Resource Attributes',
// 		'parent_item_colon'     => 'Parent Item:',
// 		'all_items'             => 'All Blogs',
// 		'add_new_item'          => 'Add New Resource',
// 		'add_new'               => 'Add New Resource',
// 		'new_item'              => 'New Resource',
// 		'edit_item'             => 'Edit Resource',
// 		'update_item'           => 'Update Resource',
// 		'view_item'             => 'View Resource',
// 		'view_items'            => 'View Resource',
// 		'search_items'          => 'Search Resource',
// 		'not_found'             => 'Not found',
// 		'not_found_in_trash'    => 'Not found in Trash',
// 		'featured_image'        => 'Featured Image',
// 		'set_featured_image'    => 'Set featured image',
// 		'remove_featured_image' => 'Remove featured image',
// 		'use_featured_image'    => 'Use as featured image',
// 		'insert_into_item'      => 'Insert into item',
// 		'uploaded_to_this_item' => 'Uploaded to this item',
// 		'items_list'            => 'Resource list',
// 		'items_list_navigation' => 'Resource list navigation',
// 		'filter_items_list'     => 'Filter involved list',
// 	);
// 	$args = array(
// 		'label'                 => 'Resource',
// 		'description'           => 'listing of items to sell',
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 10,
// 		'menu_icon'             => 'dashicons-store',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'post',
// 	);
// 	register_post_type( 'resource', $args );

// }
// add_action( 'init', 'gradusone_resource', 0 );






// Register Program Custom Post Type
function gradusone_youthprogram() {

	$labels = array(
		'name'                  => 'Youth Program',
		'singular_name'         => 'Youth Program',
		'menu_name'             => 'Youth Programs',
		'name_admin_bar'        => 'Youth Program',
		'archives'              => 'Youth Program Archives',
		'attributes'            => 'Youth Program Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Youth Programs',
		'add_new_item'          => 'Add New Youth Program',
		'add_new'               => 'Add New Youth Program',
		'new_item'              => 'New Youth Program',
		'edit_item'             => 'Edit Youth Program',
		'update_item'           => 'Update Youth Program',
		'view_item'             => 'View Youth Program',
		'view_items'            => 'View Youth Program',
		'search_items'          => 'Search Youth Program',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Programs list',
		'items_list_navigation' => 'Programs list navigation',
		'filter_items_list'     => 'Filter programs list',
	);
	$args = array(
		'label'                 => 'Youth Program',
		'description'           => 'listing of items to sell',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),

		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'youthprogram', $args );

}
add_action( 'init', 'gradusone_youthprogram', 0 );





// Register Program Custom Post Type
function gradusone_contactus() {

	$labels = array(
		'name'                  => 'Contact Us',
		'singular_name'         => 'Contact Us',
		'menu_name'             => 'Contact Us',
		'name_admin_bar'        => 'Contact Us',
		'archives'              => 'Contact Us Archives',
		'attributes'            => 'Contact Us Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Contact Us',
		'add_new_item'          => 'Add New Contact Us',
		'add_new'               => 'Add New Contact Us',
		'new_item'              => 'New Contact Us',
		'edit_item'             => 'Edit Contact Us',
		'update_item'           => 'Update Contact Us',
		'view_item'             => 'View Contact Us',
		'view_items'            => 'View Contact Us',
		'search_items'          => 'Search Contact Us',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Contact Us list',
		'items_list_navigation' => 'Contact Us list navigation',
		'filter_items_list'     => 'Filter programs list',
	);
	$args = array(
		'label'                 => 'Contact Us',
		'description'           => 'listing of items to sell',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'contactus', $args );

}
add_action( 'init', 'gradusone_contactus', 0 );
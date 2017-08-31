<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Program Type Taxonomy
// function gradusone_tax_program_type() {

// 	$labels = array(
// 		'name'                       => 'Program Types',
// 		'singular_name'              => 'Program Type',
// 		'menu_name'                  => 'Program Type',
// 		'all_items'                  => 'All Program Types',
// 		'parent_item'                => 'Parent',
// 		'parent_item_colon'          => 'Parent Program Type:',
// 		'new_item_name'              => 'New Program Type',
// 		'add_new_item'               => 'Add New Program Type',
// 		'edit_item'                  => 'Edit Program Type',
// 		'update_item'                => 'Update Program Type',
// 		'view_item'                  => 'View Program Type',
// 		'separate_items_with_commas' => 'Separate items with commas',
// 		'add_or_remove_items'        => 'Add or remove items',
// 		'choose_from_most_used'      => 'Choose from the most used',
// 		'popular_items'              => 'Popular Program Types',
// 		'search_items'               => 'Search Program Types',
// 		'not_found'                  => 'Not Found',
// 		'no_terms'                   => 'No items',
// 		'items_list'                 => 'Program Type list',
// 		'items_list_navigation'      => 'Program Type list navigation',
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => true,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
// 		'show_tagcloud'              => true,
// 	);
// 	register_taxonomy( 'program_type', array( 'program' ), $args );

// }
// add_action( 'init', 'gradusone_tax_program_type', 0 );




// Event Type Taxonomy
function gradusone_tax_event_type() {

	$labels = array(
		'name'                       => 'Event Types',
		'singular_name'              => 'Event Type',
		'menu_name'                  => 'Event Type',
		'all_items'                  => 'All Event Types',
		'parent_item'                => 'Parent',
		'parent_item_colon'          => 'Parent Event Type:',
		'new_item_name'              => 'New Event Type',
		'add_new_item'               => 'Add New Event Type',
		'edit_item'                  => 'Edit Event Type',
		'update_item'                => 'Update Event Type',
		'view_item'                  => 'View Event Type',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Event Types',
		'search_items'               => 'Search Event Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Event Type list',
		'items_list_navigation'      => 'Event Type list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'event_type', array( 'event' ), $args );

}
add_action( 'init', 'gradusone_tax_event_type', 0 );



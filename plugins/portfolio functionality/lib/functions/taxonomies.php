<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
// Register Project Project Type Taxonomy
function register_project_type_taxonomy_() {
	$labels = array(
		'name'                       => 'Project Languages',
		'singular_name'              => 'Project Language',
		'menu_name'                  => 'Project Languages',
		'all_items'                  => 'All Project Languages',
		'parent_item'                => 'Parent Project Language',
		'parent_item_colon'          => 'Parent Project Language:',
		'new_item_name'              => 'New Project Language Name',
		'add_new_item'               => 'Add New Project Language Item',
		'edit_item'                  => 'Edit Project Language',
		'update_item'                => 'Update Project Language',
		'view_item'                  => 'View Project Language',
		'separate_items_with_commas' => 'Separate Project Languages with commas',
		'add_or_remove_items'        => 'Add or remove Project Languages',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Project Languages',
		'search_items'               => 'Search Project Languages',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Project Languages',
		'items_list'                 => 'Project Lanugage list',
		'items_list_navigation'      => 'Project Language list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'project_type', array( 'project' ), $args );
}
add_action( 'init', 'register_project_type_taxonomy_', 0 );
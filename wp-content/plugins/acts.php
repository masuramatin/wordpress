<?php
/*
Plugin Name: Asad3 Taxonomies
Description: Actors Custom Taxonomies
Author: Asaduzzaman Biswas
Version:1
*/
// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Actors', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Actors', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Actors', 'text_domain' ),
		'all_items'                  => __( 'All Actors', 'text_domain' ),
		'parent_item'                => __( 'Parent Actors', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Actors:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Actors', 'text_domain' ),
		'add_new_item'               => __( 'Add New Actors', 'text_domain' ),
		'edit_item'                  => __( 'Edit Actors', 'text_domain' ),
		'update_item'                => __( 'Update Actors', 'text_domain' ),
		'view_item'                  => __( 'View Actors', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Actors with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Actors', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Actors', 'text_domain' ),
		'search_items'               => __( 'Search Actors', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Actors list', 'text_domain' ),
		'items_list_navigation'      => __( 'Actors list navigation', 'text_domain' ),
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
	register_taxonomy( 'taxonomy1', array( 'post' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

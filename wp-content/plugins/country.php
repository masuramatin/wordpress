<?php
/*
Plugin Name: Asad1 Taxonomies
Description: Country Custom Taxonomies
Author: Asaduzzaman Biswas
Version:1
*/
function country_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Country', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Country', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Country', 'text_domain' ),
		'all_items'                  => __( 'All Country', 'text_domain' ),
		'parent_item'                => __( 'Parent Country', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Country:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Country', 'text_domain' ),
		'add_new_item'               => __( 'Add New Country', 'text_domain' ),
		'edit_item'                  => __( 'Edit Country', 'text_domain' ),
		'update_item'                => __( 'Update Country', 'text_domain' ),
		'view_item'                  => __( 'View Country', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Country with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Country', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Country', 'text_domain' ),
		'search_items'               => __( 'Search Country', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Country', 'text_domain' ),
		'items_list'                 => __( 'Country list', 'text_domain' ),
		'items_list_navigation'      => __( 'Country list navigation', 'text_domain' ),
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
	register_taxonomy( 'taxonomy', array( 'post' ), $args );

}
add_action( 'init', 'country_taxonomy', 0 );

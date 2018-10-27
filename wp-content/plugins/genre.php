<?php
/*
Plugin Name: Asad Taxonomies
Description: Genre Custom Taxonomies
Author: Asaduzzaman Biswas
Version:1
*/
function genre_custom_taxonomies() {
	

	$Genre = array(
		'name' => _x( 'Genre', 'taxonomy general name' ),
		'singular_name' => _x( 'Genre', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search in Genre' ),
		'all_items' => __( 'All Genre' ),
		'most_used_items' => null,
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Genre' ), 
		'update_item' => __( 'Update Genre' ),
		'add_new_item' => __( 'Add new Genre' ),
		'new_item_name' => __( 'New Genre' ),
		'menu_name' => __( 'Genre' ),
	);
	$args = array(
		'hierarchical' => true,
		'labels' => $Genre,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'Genre' )
	);
    register_taxonomy( 'Genre', array( 'coach_mentor', 'post' ), $args );

    

}
add_action( 'init', 'genre_custom_taxonomies', 0 );
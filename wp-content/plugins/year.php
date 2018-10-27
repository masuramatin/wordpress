<?php
/*
Plugin Name: Asad2 Taxonomies
Description: year Custom Taxonomies
Author: Asaduzzaman Biswas
Version:1
*/
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_year_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it topics for your posts
 
function create_year_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Year', 'taxonomy general name' ),
    'singular_name' => _x( 'Year', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Year' ),
    'all_items' => __( 'All Year' ),
    'parent_item' => __( 'Parent Year' ),
    'parent_item_colon' => __( 'Parent Year:' ),
    'edit_item' => __( 'Edit Year' ), 
    'update_item' => __( 'Update Year' ),
    'add_new_item' => __( 'Add New Year' ),
    'new_item_name' => __( 'New Year Name' ),
    'menu_name' => __( 'Year' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('Year',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'Year' ),
  ));
 
}
<?php
/*
Plugin Name: Asad Shortcode
Description: Shortcode to display 5 recent post film
Author: Asaduzzaman Biswas
Version:1
*/
function recent_posts_function($atts){
   extract(shortcode_atts(array(
      'posts' => 1,
   ), $atts));

   $return_string = '<ul>';
   query_posts(array('orderby' => 'date', 'order' => 'DESC' , 'showposts' => $posts));
   if (have_posts()) :
      while (have_posts()) : the_post();
         $return_string .= '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
      endwhile;
   endif;
   $return_string .= '</ul>';

   wp_reset_query();
   return $return_string;
}
function register_shortcodes(){
   add_shortcode('recent-posts', 'recent_posts_function');
}
add_action( 'init', 'register_shortcodes');
?>
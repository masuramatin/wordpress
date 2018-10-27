<?php

/*
 * Template Name: Page with sidebar
 * Template Post Type: page, post
 */
 

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'content', 'single' );
			?>	
			<?php
            /*
            	Display input of custom text boxes and taxonomies
            */
            ?>
			<?php the_terms( $post->ID, 'Genre', 'Genre: ', ', ', ' ' ); ?><br />
			<?php the_terms( $post->ID, 'taxonomy', 'Country: ', ', ', ' ' ); ?><br />
			<?php the_terms( $post->ID, 'taxonomy1', 'Actors: ', ', ', ' ' ); ?><br />
			<?php the_terms( $post->ID, 'Year', 'Year: ', ', ', ' ' ); ?>
        	<p>Ticket Price: <?php the_field('ticket_price'); ?></p>
			<p>Released Date: <?php the_field('release_date'); ?></p>
            <?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
</div><!-- .wrap -->
<?php get_sidebar(); ?>
<?php get_footer();
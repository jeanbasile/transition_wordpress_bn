<?php
/*
Template Name: actualite
*/
?>
<?php get_header(); ?>
<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			
			$args = array (
				'paged'		=> $paged,
				'tax_query' => array(
					array(
						'taxonomy' => 'post_format',
						'field'    => 'slug',
						'terms'    => array( 'post-format-video' ),
					),
				),
			);

			$the_query = new WP_Query( $args );
		?>

		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php get_template_part('content', get_post_format()); ?>
			<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php else: ?>
		<?php _e('No content found', 'wpc'); ?>
	<?php endif; ?>
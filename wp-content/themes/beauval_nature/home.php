<?php get_header(); ?>

<div class="entete_actu">
        <h1>Actualité</h1>
    </div>

<div class="contenu row">
    <div class="col col--3-of-12"></div>
    <div class="col col--6-of-12">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content();?>
			<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php else: ?>
		<?php _e('No content found', 'wpc'); ?>
	<?php endif; ?>
        </div>
    <div class="col col--3-of-12"></div>
 </div>

<?php  get_footer(); ?>
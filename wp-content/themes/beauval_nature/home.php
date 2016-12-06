<?php get_header(); ?>

<div class="entete_actu">
        <h1>Actualité</h1>
    </div>

<div class="contenu row">
    <div class="col col--2-of-12"></div>
    <div class="col col--8-of-12">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content('Lire la suite');?>
			<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php else: ?>
		<?php _e('No content found', 'wpc'); ?>
	<?php endif; ?>
        </div>
    <div class="col col--2-of-12"></div>

    <div class="barre col col--12-of-12">
        <p><span class="icon-puce"></span>
        </p>
    </div>

    <div class="lien_liste_actu col col--centered">
        <a href="http://localhost:7000/beauval_nature/archive/">Liste des actualités</a>
    </div>
 </div>


<?php  get_footer(); ?>

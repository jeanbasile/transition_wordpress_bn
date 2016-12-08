<?php

get_header();
?>

SINGLE

<div class="contenu zoom row">
    <div class="col col--2-of-12"></div>
    <div class="col col--8-of-12">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content('Lire la suite');?>
        <?php endwhile; ?>
      <?php else: ?>
      <?php _e('No content found', 'wpc'); ?>
      <?php endif; ?>

        </div>
    <div class="col col--2-of-12"></div>
 </div>

<?php
get_footer();
?>

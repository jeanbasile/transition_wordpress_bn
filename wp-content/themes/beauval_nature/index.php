<?php
/**
 * The main template file
*/

get_header();
?>

<div class="contenu row">
    <div class="col col--3-of-12"></div>
    <div class="col col--6-of-12">

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    
<?php endwhile; endif; ?>

<?php the_content(); ?>

        </div>
    <div class="col col--3-of-12"></div>
 </div>
        
<?php


get_footer();
?>
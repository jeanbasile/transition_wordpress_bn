<?php
/**
 * Template Name: animaux_conservation
 */
get_header();
?>

<section class="animaux">

        
            
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); 
            ?>
    
            <?php endwhile; endif; ?>
            
             <h1><?php the_title(); ?></h1>
    
            <?php the_content(); ?>
       
             
            <div class="barre">
                <p><span class="icon-puce"></span>
                </p>
             </div>
        
        
        <div class="lien">
            <a href="actualite.html">Revenir à la Page Conservation</a>
        </div>

    </section>

<?php get_footer();?>






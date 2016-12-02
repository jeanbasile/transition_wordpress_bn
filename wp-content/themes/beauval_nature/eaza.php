<?php
/**
 * Template Name: eaza
 */
get_header();
?>


<section class="animaux">
<div class="intro">


    <h2>Les évènements de L'association européenne des zoos et aquariums</h2>

    <p>Voici la liste des Evènements organisés sur le parc avec L'association européenne des zoos et aquariums</p>
</div>

    <div class="barre">
        <p><span class="icon-puce"></span>
        </p>
    </div>

    <div class="contenu">
                 <?php  $loop = new WP_Query( array( 'post_type' => 'anciens_programmes', 'posts_per_page' => 10 ) );
                    while ( $loop->have_posts() ) : $loop->the_post();?>

                      <h3><?php  the_title();?></h3>

                      <?php  echo '<div>';
                      the_content('Lire la suite');
                      echo '</div>';
                    endwhile;?>

    </div>






</section>


<?php get_footer();?>

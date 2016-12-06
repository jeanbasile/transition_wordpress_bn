<?php
/**
 * Template Name: eaza
 */
get_header();
?>

<div class="contenu">
<div class="intro">


    <h2>Les évènements de L'association européenne des zoos et aquariums</h2>

    <p>Voici la liste des Evènements organisés sur le parc avec L'association européenne des zoos et aquariums</p>
</div>

<div class="barre col col--12-of-12">
    <p><span class="icon-puce"></span>
    </p>
</div>

<div class="contenu row">
    <div class="col col--2-of-12"></div>
    <div class="col col--8-of-12">
             <?php  $loop = new WP_Query( array( 'post_type' => 'eaza', 'posts_per_page' => 10 ) );
                while ( $loop->have_posts() ) : $loop->the_post();?>

                  <h2><?php  the_title();?></h2>

                  <?php  echo '<div>';
                  the_content('Lire la suite');
                  echo '</div>';
                endwhile;?>

              </div>
          <div class="col col--2-of-12"></div>
       </div>








</div>


<?php get_footer();?>

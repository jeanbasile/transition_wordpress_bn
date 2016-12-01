<?php
/**
 * Template Name: anciens_programmes
 */
get_header();
?>


<section class="animaux">
<div class="intro">


    <h2>Les anciens programmes de Conservation</h2>

    <p>Les anciens programmes sont d'anciens partenariats de protection des espèces animales qui ont été menées à leur terme.</p>
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


    <div class="barre">
        <p><span class="icon-puce"></span>
        </p>
    </div>


    <div class="lien">
        <a href="http://localhost:7000/beauval_nature/conservation/">Revenir à la Page Conservation</a>
    </div>

</section>


<?php get_footer();?>

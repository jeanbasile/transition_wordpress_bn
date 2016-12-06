<?php
/**
 * Template Name: anciens_programmes
 */
get_header();
?>


<div class="intro">

    <h2>Les anciens programmes de Conservation</h2>

    <p>Les anciens programmes sont d'anciens partenariats de protection des espèces animales qui ont été menées à leur terme.</p>
</div>

    <div class="barre">
        <p><span class="icon-puce"></span>
        </p>
    </div>

    <div class="contenu row">
        <div class="col col--2-of-12"></div>
        <div class="col col--8-of-12">
                 <?php  $loop = new WP_Query( array( 'post_type' => 'anciens_programmes', 'posts_per_page' => 10 ) );
                    while ( $loop->have_posts() ) : $loop->the_post();?>

                      <h3 class="col col--centered"><?php  the_title();?></h3>



                      <?php  echo '<div>';
                      the_content('Lire la suite');
                      echo '</div>';?>
                      <div class="separation">

                      </div>

<?php
                    endwhile;?>

                  </div>
              <div class="col col--2-of-12"></div>
           </div>


    <div class="barre">
        <p><span class="icon-puce"></span>
        </p>
    </div>


    <div class="lien">
        <a href="http://localhost:7000/beauval_nature/conservation/">Revenir à la Page Conservation</a>
    </div>

</div>


<?php get_footer();?>

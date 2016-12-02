 <?php
/**
 * Template Name: accueil
 */
get_header();
?>

<ul class="bxslider">
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/lamantin.jpg" alt="">
            <span class="inner"></span>
            <div class="infos_slider">
              <?php
                $recentPosts = new WP_Query();
                  $recentPosts->query('showposts=1');
                    ?>
                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                      <h2><?php the_title(); ?></h2>

                        <a href="<?php the_permalink() ?>" rel="bookmark">En savoir plus :</a>
                      <?php endwhile; ?>
              </div>
        </li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/lamantin.jpg" alt="">
            <span class="inner"></span>
            <div class="infos_slider">
                <h2>Nous apportons notre soutiens aux ONG !</h2>
                <p>Si vous êtes une Association et avez besoin d'un financement :</p>
                <a href="presentation_article.html" target="_blank">téléchargez le formulaire de demande</a>
            </div>
        </li>

        <li><img src="<?php echo get_template_directory_uri(); ?>/images/gorille.jpg" alt="">
            <span class="inner"></span>
            <div class="infos_slider">
                <h2>Un geste pour les grands singes !</h2>
                <p>Apportez vos téléphones usagés au ZooParc de Beauval pourqu'ils y soient recyclés. </p>
                <a href="presentation_article.html" target="_blank">En savoir plus</a>
            </div>
        </li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/panda.jpg" alt="">
            <span class="inner"></span>
            <div class="infos_slider">
                <h2>Ensemble protégeons les animaux !</h2><a href="presentation_article.html">Faites un don !</a>
            </div>

        </li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/lamantin.jpg" alt="">
            <span class="inner"></span>
            <div class="infos_slider">
                <h2>Eurpean Association of Zoos and Aquaria</h2><a href="presentation_article.html">Voir les programmes</a>
            </div>
        </li>


    </ul>



    <section>
        <div class="row">
            <div class="texte_intro">
                <?php $post  = get_post(609); ?>
                <div class="col col--6-of-12 col--centered">
                    <h1><?php echo $post->post_title; ?></h1>
                    <?php echo $post->post_content; ?>
                </div>
            </div>
        </div>

        <div class="barre">
        <p><span class="icon-puce"></span>
        </p>
    </div>
    </section>

    <section class="intro_beauval_nature">
        <div class="row">
            <?php $post  = get_post(608); ?>
            <div class="col col--2-of-12 col--centered logo_intro_bn">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_beauval_nature.jpg" alt="" />
            </div>

            <div class="col col--5-of-12 col--centered texte_intro_asso">
                <h1><?php echo $post->post_title; ?></h1>
                <?php echo $post->post_content; ?>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/lamantin.jpg">En Savoir Plus</a>
            </div>

        </div>


    </section>

    <div class="barre">
        <p><span class="icon-puce"></span>
        </p>
    </div>


        <div class="js-parallax-container">
            <div class="js-parallax">
                <img src="<?php echo get_template_directory_uri(); ?>/images/lamantin.jpg" alt="">
            </div>
            <div class="inner"></div>
        </div>

    <!--  _______________________________________________   Nous Soutenir   ______________________________________  -->

    <section class="nous_soutenir">


        <h1 class="soutien">Soutenez-Nous !</h1>


<?php $post  = get_post(607); ?>
        <div class="row rappel_recyclage">
            <h1><?php echo $post->post_title; ?></h1>

            <div class="col col--4-of-12 col--centered">
                <img src="<?php echo get_template_directory_uri(); ?>/images/affiche_recyclage.jpg" alt="" class="img-responsive" />
            </div>

            <div class="col col--4-of-12 col--centered">
                <?php echo $post->post_content; ?>
                <a href="recyclage.html">En Savoir Plus</a>
            </div>
        </div>

        <div class="barre">
            <p><span class="icon-puce"></span>
            </p>
        </div>

<?php $post  = get_post(606); ?>
        <div class="row rappel_don">
            <h1><?php echo $post->post_title; ?></h1>
            <div class="col col--5-of-12 col--centered">
                <?php echo $post->post_content; ?>
                <a href="work_in_progress.html">Faites Un don</a>
            </div>
        </div>

<?php $post  = get_post(606); ?>
        <div class="row rappel_don">
            <h1><?php echo $post->post_title; ?></h1>
            <div class="col col--5-of-12 col--centered">
                <?php echo $post->post_content; ?>
                <a href="work_in_progress.html">Faites Un don</a>
            </div>
        </div>

        <div class="barre">
            <p><span class="icon-puce"></span>
            </p>
        </div>


        <?php $post  = get_post(605); ?>
        <div class="row rappel_financement">
            <h1><?php echo $post->post_title; ?></h1>
            <div class="col col--5-of-12 col--centered">
                <?php echo $post->post_content; ?>
                <a href="<?php echo get_template_directory_uri(); ?>/pdf/Beauval-Nature_Grant-Application-Form.pdf" target="_blank">Demande de Financement</a>
            </div>
        </div>


    </section>

    <div class="js-parallax-container">
        <div class="js-parallax">
            <img src="<?php echo get_template_directory_uri(); ?>/images/orang_outan.jpg" alt="">
        </div>
        <div class="inner"></div>
    </div>


<?php


get_footer();
?>

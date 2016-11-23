<?php
/**
 * Template Name: partenaires
 */
get_header();


$post  = get_post(6);

?>

<article class="row partenaire">
        <div class="js-parallax-container">
            <div class="js-parallax">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gorille.jpg" alt="">
            </div>
            <div class="inner"></div>
        </div>
        <h1><?php echo $post->post_title; ?></h1>
        
        <div class="col col--6-of-12 col--centered">
            <p><?php echo $post->post_content; ?></p>
        </div>
        

<?php $post  = get_post(8); ?>

        <h1><?php echo $post->post_title; ?></h1>

        <div class="col col--6-of-12 col--centered">
            <p><?php echo $post->post_content; ?></p>
        </div>
<?php $post = get_post(18);?>
        <h1><?php echo $post->post_title; ?></h1>
        <div class="col col--6-of-12 col--centered">
            <p><?php echo $post->post_content; ?></p>
        </div>
    </article>

<div class="js-parallax-container article">
        <div class="js-parallax">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gorille.jpg" alt="">
        </div>
        <div class="inner"></div>
    </div>

  <h1>Un grand merci à tout nos donateurs</h1>

<div class="barre ">
        <p><span class="icon-puce"></span>
        </p>
    </div>
  
  <article class="platine">
      <?php $post = get_post(21);?>
      
        <h1><?php echo $post->post_title; ?></h1>

        <img src="<?php echo get_template_directory_uri(); ?>/images/medals/platine.jpg" alt="" class="img-responsive">

        <div class="row">
            <div class="col col--8-of-12 col--centered"><?php echo $post->post_content; ?></div>
        </div>
    </article>
  
  <div class="barre ">
        <p><span class="icon-puce"></span>
        </p>
    </div>
  
  <article class="liste_donateurs row">

            <?php $post = get_post(33);?>

      <h2><?php echo $post->post_title;?></h2>
        <div class="col col--3-of-12 or">

            <img src="<?php echo get_template_directory_uri(); ?>/images/medals/or.jpg" alt="" class="img-responsive">

        </div>

        <div class="col col--3-of-12 or">
            <?php echo $post->post_content; ?>

        </div>

        <div class="barre">
            <p><span class="icon-puce"></span>
            </p>
        </div>

              <?php $post = get_post(35);?>

        <h2><?php echo $post->post_title;?></h2>
        <div class="col col--3-of-12 argent">

            <img src="<?php echo get_template_directory_uri(); ?>/images/medals/argent.jpg" alt="" class="img-responsive">

        </div>

        <div class="col col--3-of-12 argent">
            <?php echo $post->post_content; ?>
        </div>

        <div class="barre">
            <p><span class="icon-puce"></span>
            </p>
        </div>

        
              <?php $post = get_post(37);?>

        <h2><?php echo $post->post_title;?></h2>
        <div class="col col--3-of-12 bronze">

            <img src="<?php echo get_template_directory_uri(); ?>/images/medals/bronze.jpg" alt="" class="img-responsive">

        </div>
        <div class="col col--3-of-12 bronze">
           <?php echo $post->post_content; ?>
        </div>

    </article>

  
<?php


get_footer();
?>


        
        
        
        
        
        

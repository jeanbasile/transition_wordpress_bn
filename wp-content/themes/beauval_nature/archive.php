<?php
/*
Template Name: Page d'archives
*/
?>
<?php get_header(); ?>

<h2><?php the_title() ?></h2>
            <?php

                $cats = get_categories();
                foreach ($cats as $cat) {

                query_posts('showposts=10&cat='.$cat->cat_ID);

            ?>
                <h2><?php echo $cat->cat_name; ?></h2>

                <ul>
                        <?php while (have_posts()) : the_post(); ?>
                        <li style="font-weight:normal !important;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - Commentaires (<?php echo $post->comment_count ?>)</li>
                        <?php endwhile;  ?>
                </ul>

        <?php } ?>
<?php get_footer(); ?>
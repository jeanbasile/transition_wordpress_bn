<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="favicon" href="<?php echo get_template_directory_uri();?>/images/Pictogrammes/panda.png">

	<?php wp_head(); ?>
        <title>title</title>
    </head>
    <body <?php body_class(); ?>>
        <header>
        <div class="row">
            <div class="col col--2-of-12">
                <a href="http://localhost:7000/beauval_nature/"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo_bn.png" alt="" class="img-responsive logo_up_page" /></a>
            </div>



            <nav class="col col--10-of-12 menu_principale">
                <button id="show-menu" class="show-menu"><i class="fa fa-bars" aria-hidden="true"></i></button>
                <!-- <button id="close-menu"><i class="fa fa-times" aria-hidden="true"></i></button> -->

                <?php wp_nav_menu( [
			'menu'       => 'header',
			'container'  => '',
		] ); ?>

        </div>

    </header>




</div>

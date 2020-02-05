<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
     <meta name="description" content="A page's description,usually one or two sentences."/>

	  <title><?php bloginfo('name'); ?> <?php echo get_post_type(); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

      <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-114x114.png" />
      <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-144x144.png" />
      <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-152x152.png" />

      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" />
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png" />
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" />

      <meta name="msapplication-TileColor" content="#221E1F" />
      <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/icons/mstile-144x144.png" />


      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width,initial-scale=1.0">

      <link href="https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic" rel='stylesheet' type='text/css'>
	  <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700" rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.min.css">

      <?php wp_head(); ?>

      <!-- marketing pixel script from 3D Digital -->
      <script async src='https://tag.simpli.fi/sifitag/b0204af0-28dc-0138-6523-06659b33d47c'></script>

   </head>
   <body <?php body_class('menu'); ?>>
      <script type="text/javascript">
        var shopBool = false;
      </script>

      <a href="javascript:void(0);" class="mobile-menu-icon mobile-menu-toggle">
         <p style="display: none;">Main Menu</p>
         <span></span>
         <span></span>
         <span></span>
         <span></span>
      </a>

      <div class="mobile-menu-wrapper">
         <nav class="nav mobile-menu" >
            <div class="inner vAlign">
               <?php html5blank_nav(); ?>
            </div>
         </nav>
      </div>

      <div class="header-wrapper">
         <header class="header container" >

            <!-- logo -->
            <div class="logo">
               <a href="<?php echo home_url(); ?>" class="logo-img"><p style="display: none;">Logo</p></a>
            </div>
            <!-- /logo -->

            <!-- <a class="menu-button">Menu</a> -->
            <nav class="nav main-menu" >
               <a href="/cart" class="cartCount isHidden">
                  <span><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
               </a>
               <?php html5blank_nav(); ?>
            </nav>


         </header>
      </div><!-- /.header-wrapper -->

      <div class="middle-wrapper">

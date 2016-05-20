<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <title><?php wp_title(''); ?></title>

      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-114x114.png" />
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-144x144.png" />
      <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-152x152.png" />

      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" sizes="32x32" />
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png" sizes="16x16" />
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" />

      <meta name="msapplication-TileColor" content="#221E1F" />
      <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/icons/mstile-144x144.png" />


      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <meta name="description" content="<?php bloginfo('description'); ?>">

      <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>

      <?php wp_head(); ?>

   </head>
   <body <?php body_class(); ?>>

      <a href="" class="mobile-menu-icon mobile-menu-toggle">
         <span></span>
         <span></span>
         <span></span>
         <span></span>
      </a>

      <div class="mobile-menu-wrapper">
         <nav class="nav mobile-menu" role="navigation">
            <div class="inner vAlign">
               <?php html5blank_nav(); ?>
            </div>
         </nav>
      </div>

      <div class="header-wrapper">
         <header class="header container" role="banner">

            <!-- logo -->
            <div class="logo">
               <a href="<?php echo home_url(); ?>" alt="Logo" class="logo-img"></a>
            </div>
            <!-- /logo -->

            <!-- <a class="menu-button">Menu</a> -->
            <nav class="nav main-menu" role="navigation">
               <?php html5blank_nav(); ?>
            </nav>

         </header>
      </div><!-- /.header-wrapper -->

      <div class="middle-wrapper">
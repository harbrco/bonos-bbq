<?php get_header(); ?>

   <!-- PAGE SPECIFIC CONDITIONALS -->
   <?php /* CONTACT */ if ( is_page( 'contact' ) ) { ?>
      <?php get_template_part( 'partials/partial', 'contact' ); ?>

   <?php } /* CAREERS */ elseif ( is_page( 'careers' ) ) { ?>
      <?php get_template_part( 'partials/partial', 'careers' ); ?>

   <?php } /* MENU */ elseif ( is_page( 'menu' ) ) { ?>
      <?php get_template_part( 'partials/partial', 'menu' ); ?>

   <?php } /* ABOUT */ elseif ( is_page( 'about' ) ) { ?>
      <?php get_template_part( 'partials/partial', 'about' ); ?>

   <?php } /* LOCATIONS */ elseif ( is_page( 'locations' ) ) { ?>
      <?php get_template_part( 'partials/partial', 'locations' ); ?>

   <?php } /* CATERING */ elseif ( is_page( 'catering' ) ) { ?>
      <?php get_template_part( 'partials/partial', 'catering' ); ?>


   <?php } /* GENERIC PAGES */ else { ?>

      <div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-lower-cta-bg.jpg');">
         <div class="push-down">
         </div>

         <div class="hero-content">
            <div class="inner">
               <div class="hero-heading container">
                  <span class="top-accent"></span>
                  <h2><?php the_title(); ?></h2>
                  <span class="bottom-accent"></span>
               </div>
            </div>
         </div>
      </div>

      <div class="menu-section wrapper isWhite well">
         <div class="container narrowContentLg">
            <!-- section -->
            <section role="main">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

               <!-- article -->
               <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                  <?php the_content(); ?>

                  <br class="clear">

                  <?php edit_post_link(); ?>

               </article>
               <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

               <!-- article -->
               <article>

                  <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

               </article>
               <!-- /article -->

            <?php endif; ?>

            </section>
            <!-- /section -->
         </div>
      </div>

   <?php } ?>

<?php get_footer(); ?>
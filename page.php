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

   <?php } /* ORDER ONLINE */ elseif ( is_page( 'order-online' ) ) { ?>
      <?php get_template_part( 'partials/partial', 'order-online' ); ?>

   <?php } /* CATERING */ elseif ( is_page( 'catering' ) ) { ?>
      <?php get_template_part( 'partials/partial', 'catering' ); ?>

   <?php } /* FUNDRAISING */ elseif ( is_page( 'fundraising' ) ) { ?>
      <?php get_template_part( 'partials/partial', 'fundraising' ); ?>

   <?php } /* DONATION REQUESTS */ elseif ( is_page( 'donation-requests' ) ) { ?>
      <?php get_template_part( 'partials/partial', 'donation-requests' ); ?>


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


      <!-- FLEXIBLE / CUSTOMIZABLE CONTENT LAYOUT SECTION -->
      <?php if( get_field('flexible_content') ): ?>
         <?php while ( has_sub_field('flexible_content') ) : ?>
            <?php if( get_row_layout() == 'two_text_cols' ): ?>
               <div class="layout-2-text-col wrapper isWhite well--s">
                  <div class="container narrowContentLg split-50 hasContent">
                     <div class="split-50-left">
                        <div class="section-heading">
                           <h3><?php the_sub_field('left_col_heading'); ?></h3>
                        </div>
                     </div>

                     <div class="split-50-right">
                        <?php the_sub_field('right_col_text'); ?>
                     </div>
                  </div>
               </div>

            <?php elseif( get_row_layout() == 'text_img_bg' ): ?>
               <div class="layout-text-img-bg wrapper hasOverlay isDarkGray well--s" style="background-image: url('<?php the_sub_field('section_background_image'); ?>');">
                  <div class="darkOverlay do50">
                  </div>
                  <div class="container narrowContentLg hasContent">
                     <div class="left-text-col">
                        <div class="section-heading">
                           <h3><?php the_sub_field('section_heading'); ?></h3>
                        </div>

                        <?php the_sub_field('section_text'); ?>
                     </div>
                  </div>
               </div>

            <?php elseif( get_row_layout() == 'single_centered_column' ): ?>
               <div class="layout-single-centered-col wrapper isWhite well--s">
                  <div class="container narrowContent hasContent">
                     <div class="section-heading">
                        <h3><?php the_sub_field('section_heading'); ?></h3>
                     </div>

                     <?php the_sub_field('section_text'); ?>
                  </div>
               </div>

            <?php endif; ?>
         <?php endwhile; ?>
         <?php else : ?>
         <!-- no layouts found -->
      <?php endif; ?>
      <!-- ENDS FLEXIBLE / CUSTOMIZABLE CONTENT LAYOUT SECTION -->


      <?php
      $hasWell = '';
      if (!empty_content($post->post_content)) {
         $hasWell = 'well';
      } else {
         $hasWell = '';
      } ?>

      <div class="wrapper isWhite <?php echo $hasWell; ?>">
         <div class="container narrowContentLg">
            <section role="main">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

               <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                  <?php the_content(); ?>


                  <?php edit_post_link(); ?>

               </article>

            <?php endwhile; ?>

            <?php else: ?>

               <article>

                  <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

               </article>

            <?php endif; ?>

            </section>
         </div>
      </div>

   <?php } ?>

<?php get_footer(); ?>
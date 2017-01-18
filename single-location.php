<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

   <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

   <div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-hero-bg.jpg');">
      <div class="push-down">
      </div>

      <div class="hero-content">
         <div class="inner">
            <div class="hero-heading container">
               <span class="top-accent"></span>
               <h2>Our Locations</h2>
               <span class="bottom-accent"></span>
            </div>
         </div>
      </div>
   </div>


   <div class="location-intro page-intro-split-cols split-50 wrapper isLightGray">
      <div class="split-50-left hasContent">
         <div class="flex-inner well--s--dbl">
            <div class="section-heading">
               <h3><?php the_title(); ?></h3>
            </div>


            <div class="intro-text">
               <div class="info">
                  <p><?php the_field('location_address'); ?></p>
                  <p><?php the_field('location_phone_numbers'); ?></p>

                  <?php if ( get_field('location_menu_pdf') ) { ?>
                     <a href="<?php the_field('location_menu_pdf'); ?>" class="btn btn--ghost" target="_blank">View Menu</a>
                  <?php } ?>

                  <a href="/catering/" class="btn btn--ghost">Get Catering</a>

                  <?php if ( get_field('online_ordering_url') ) { ?>
                     <a href="<?php the_field('online_ordering_url') ?>" class="btn btn--ghost" target="_blank">Order Online</a>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>

      <div class="split-50-right" style="background-image: url('<?php echo $featImg[0]; ?>');">
      </div>
   </div>


   <div id="map-wrapper" class="location-map-info wrapper isWhite well">
      <div class="container narrowContentLg">
         <?php echo do_shortcode('[gmw_single_location map_width="100%" zoom_level="14" additional_info"0"]'); ?>
      </div>
   </div>

<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

<?php get_footer(); ?>
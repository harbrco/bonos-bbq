<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

   <div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-hero-bg.jpg');">
      <div class="push-down">
      </div>

      <div class="hero-content">
         <div class="inner">
            <div class="hero-heading container">
               <span class="top-accent"></span>
               <h2>Order Online</h2>
               <span class="bottom-accent"></span>
            </div>
         </div>
      </div>
   </div>


   <div class="location-intro page-intro-split-cols split-50 wrapper isLightGray">
      <?php
      $post_object = get_field('location_pair');

      if( $post_object ):

         // override $post
         $post = $post_object;
         setup_postdata( $post );

         $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
         ?>

            <div class="split-50-left hasContent">
               <div class="flex-inner well--s--dbl">
                  <div class="section-heading">
                     <h3><?php the_title(); ?></h3>
                  </div>

                  <div class="intro-text">
                     <div class="info">
                        <p><?php the_field('location_address'); ?></p>
                        <p><?php the_field('location_phone_numbers'); ?></p>

                        <a href="<?php the_permalink(); ?>#location-map" class="btn btn--ghost">Get Directions</a>
                     </div>
                  </div>
               </div>
            </div>

            <div class="split-50-right" style="background-image: url('<?php echo $featImg[0]; ?>');">
            </div>
         <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
   </div>


   <?php if ( get_field('location_online_order_code') ) { ?>
      <div id="order-online" class="order-online-wrapper well">
         <div class="container narrowContentLg">
            <h3 class="section-title">Order Online</h3>
            <?php the_field('location_online_order_code'); ?>
         </div>
      </div>
   <?php } ?>

<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

<?php get_footer(); ?>
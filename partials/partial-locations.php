<div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-lower-cta-bg.jpg');">
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


<div class="nearest-location-wrapper wrapper isLightGray">
   <?php echo do_shortcode('[gmw_nearby_locations show_random_locations="false" item_type="posts" post_types="location" show_map="false" nearby="user" radius="999" results_count="1"]'); ?>
</div>


<div class="locations-section wrapper isWhite well">
   <div class="container narrowContentLg">
      <div class="location-navigate">
         <div class="city-filter">
            <h4 class="label">Find Your City:</h4>
            <?php echo do_shortcode('[searchandfilter taxonomies="city" types"select"]') ?>
         </div>
      </div>

      <div class="image-box-links">
         <?php
         $args = array(
            'post_type' => 'location',
            'posts_per_page' => -1,
            'orderby'=> 'title',
            'order' => 'ASC'
         );

         // the query
         $locationsQuery = new WP_Query( $args ); ?>

         <?php if ( $locationsQuery->have_posts() ) : ?>

            <?php while ( $locationsQuery->have_posts() ) : $locationsQuery->the_post(); ?>

               <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

               <div class="image-box-wrap hasOverlay">
                  <a href="<?php the_permalink(); ?>">
                     <div class="darkOverlay do50"></div>
                     <div class="image-box isDarkGray" style="background-image: url('<?php echo $featImg[0]; ?>');">
                     </div>

                     <div class="image-box-title">
                        <div class="inner vAlign vAlignAbs">
                           <h3><?php the_title(); ?></h3>
                        </div>
                     </div>
                  </a>
               </div>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

         <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
         <?php endif; ?>
      </div>
   </div>
</div>
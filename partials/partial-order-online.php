<div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-lower-cta-bg.jpg');">
   <div class="push-down">
   </div>

   <div class="hero-content">
      <div class="inner">
         <div class="hero-heading container">
            <span class="top-accent"></span>
            <h1>Order Online</h1>
            <span class="bottom-accent"></span>
         </div>
      </div>
   </div>
</div>


<div class="locations-section wrapper isWhite well">
   <div class="container narrowContentLg">
      <div class="location-navigate">
         <div class="city-filter">
            <h4 class="label">Choose Your Location:</h4>
         </div>
      </div>

      <div class="image-box-links">
         <?php
         $args = array(
            'post_type' => 'order_online',
            'posts_per_page' => -1,
            'orderby'=> 'title',
            'order' => 'ASC'
         );

         // the query
         $orderOnlineLocationsQuery = new WP_Query( $args ); ?>

         <?php if ( $orderOnlineLocationsQuery->have_posts() ) : ?>

            <?php while ( $orderOnlineLocationsQuery->have_posts() ) : $orderOnlineLocationsQuery->the_post(); ?>

               <?php
               $locationLink = get_post_permalink();

               $post_object = get_field('location_pair');

               if( $post_object ):

                  // override $post
                  $post = $post_object;
                  setup_postdata( $post );
                  ?>

                  <?php
                  $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
                  $locationTitle = get_the_title();
                  ?>

                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

                  <div class="image-box-wrap hasOverlay">
                     <a href="<?php echo $locationLink; ?>">
                        <div class="darkOverlay do50"></div>
                        <div class="image-box isDarkGray" style="background-image: url('<?php echo $featImg[0]; ?>');">
                        </div>

                        <div class="image-box-title">
                           <div class="inner vAlign vAlignAbs">
                              <h3><?php echo $locationTitle; ?></h3>
                           </div>
                        </div>
                     </a>
                  </div>

               <?php endif; ?>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

         <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
         <?php endif; ?>
      </div>
   </div>
</div>
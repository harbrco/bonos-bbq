<div class="split-50-left hasContent">
   <div class="flex-inner well--s--dbl">
      <div class="section-heading">
         <h3>Nearest You</h3>
      </div>

      <div class="intro-text">
         <h3><a href="<?php echo get_permalink($post->ID); ?>"><?php echo stripslashes( the_title() ); ?></a></h3>

         <div class="info">
            <p><?php the_field('location_address'); ?></p>
            <p><?php the_field('location_phone_numbers'); ?></p>

            <a href="<?php echo get_permalink($post->ID); ?>#location-map" class="btn btn--ghost">View On The Map</a>

            <!-- directions -->
            <?php //if ( $directions ) : ?>
               <!-- <div class="gmw-nbp-directions-wrapper">
                  <?php //echo $directions; ?>
               </div> -->
            <?php //endif; ?>
         </div>
      </div>
   </div>
</div>

<div class="split-50-right">
   <!-- featured image -->
   <?php if ( !empty( $image_class ) ) { ?>
      <div class="featured-image">
         <?php echo $image; ?>
      </div>

   <?php } ?>
</div>



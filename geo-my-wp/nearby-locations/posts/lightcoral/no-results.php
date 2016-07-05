<div id="gmw-nbl-no-results-wrapper-<?php echo esc_attr( $this->args['element_id'] ); ?>" class="nearest-location-wrapper wrapper isLightGray gmw-nbl-no-results-wrapper type-<?php echo esc_attr( $this->args['item_type'] ); ?> template-<?php echo esc_attr( $this->args['results_template'] ); ?>">
   <div class="locations-list page-intro-split-cols split-50 no-locations-found wrapper">
      <div class="split-50-left hasContent">
         <div class="flex-inner well--s--dbl">
            <div class="section-heading">
               <h3>Nearest You</h3>
            </div>

            <div class="intro-text">
               <h3>Enter Your Current Location</h3>

               <div>
                  <div class="current-location-finder">
                     <?php echo do_shortcode('[gmw_current_location]'); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</div>
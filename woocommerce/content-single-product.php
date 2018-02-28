
<div id="product">
  <?php
  wc_print_notices();

  ?>
  <div class="leadership shopArchive isWhite well--s">
    <div class="section-heading">
      <h3><?php the_title(); ?></h3>
    </div>
    <div class="container productContent">
      <div class="imgContainer<?php if (get_field('each_variant_needs_a_unique_image')) { ?> isVarianted<?php } ?>">
        <?php

            if (get_field('each_variant_needs_a_unique_image')) {
              $variantCount = 0;
              while ( have_rows('variant_gallery') ) : the_row(); ?>
                <div data-variant="<?php the_sub_field('variant_name'); ?>" class="variantWrapper isHidden variant-<?php echo $variantCount; ?>">
                  <?php if (get_sub_field('single_image_or_gallery') == 'single') { ?>
                    <img src="<?php the_sub_field('variant_image') ?>" class="" />
                  <?php } else { ?>
                    <div class="selected-image">
                      <?php $featSlideCount = 1; ?>
                      <?php while ( have_rows('variant_inner_gallery') ) : the_row(); ?>
                        <img src="<?php the_sub_field('gallery_image') ?>" class="featured slide-<?php echo $featSlideCount; ?>" />
                        <?php $featSlideCount = $featSlideCount + 1; ?>
                      <?php endwhile; ?>
                    </div>
                    <div class="inner-gallery">
                      <?php $slideCount = 1; ?>
                      <?php while ( have_rows('variant_inner_gallery') ) : the_row(); ?>
                        <div class="slide slide-<?php echo $slideCount; ?>">
                          <img src="<?php the_sub_field('gallery_image') ?>" class="" />
                        </div>
                        <?php $slideCount = $slideCount + 1; ?>
                      <?php endwhile; ?>
                    </div>
                  <?php } ?>
                </div>
              <?php $variantCount = $variantCount + 1; ?>
              <?php endwhile;
            } else { //if each_variant_needs_a_unique_image is not checked
              global $product;

              //this checks if there is Product Gallery Images to display
              $attachment_ids = $product->get_gallery_attachment_ids();
              $galLength = sizeof($attachment_ids);
              if ($galLength > 0) { ?>

                <div class="selected-image baseGallery">
                  <?php $featSlideCount = 1; ?>
                  <?php foreach( $attachment_ids as $attachment_id ) { ?>
                    <img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>" class="featured slide-<?php echo $featSlideCount; ?>" />
                    <?php $featSlideCount = $featSlideCount + 1;
                  } ?>
                </div>
                <div class="inner-gallery baseGallery">
                  <?php $slideCount = 1; ?>
                  <?php foreach( $attachment_ids as $attachment_id ) { ?>
                    <div class="slide slide-<?php echo $slideCount; ?>">
                      <img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>" />
                    </div>
                    <?php $slideCount = $slideCount + 1;
                  } ?>
                </div>
              <?php } else { //if there is no Product Gallery Images to display
                if ( has_post_thumbnail()) {
                  the_post_thumbnail();
                }
              }
            }
        ?>
      </div>
      <div class="postMeta">
        <div class="inner">
           <?php
              /**
               * woocommerce_single_product_summary hook
               *
               * @hooked woocommerce_template_single_price - 10
               * @hooked woocommerce_template_single_add_to_cart - 30
               * @hooked woocommerce_template_single_meta - 40
               * @hooked woocommerce_template_single_sharing - 50
               */
              do_action( 'woocommerce_single_product_summary' );
           ?>
           <?php the_content(); ?>

        </div>
      </div>
    </div>
  </div>
</div>


<div class="wrapper well--s">
  <div class="container">
    <div class="relatedSection">
      <?php
        /**
         * woocommerce_after_single_product_summary hook.
         *
         * @hooked woocommerce_output_product_data_tabs - 10
         * @hooked woocommerce_upsell_display - 15
         * @hooked woocommerce_output_related_products - 20
         */
        do_action( 'woocommerce_after_single_product_summary' );
      ?>
    </div>
  </div>
</div>

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
         <div class="layout-2-text-col wrapper isWhite well--s isLightGray">
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


<div class="form-section wrapper isWhite well">
   <div class="container narrowContentMd hasContent">
      <div class="section-heading">
         <h3><?php the_field('form_section_heading'); ?></h3>
      </div>

      <div class="form-instructions">
         <?php the_field('form_instructions'); ?>

         <h4><?php the_field('form_instruction_subheading'); ?></h4>
      </div>

      <div class="form-wrapper">
         <?php gravity_form(7, false, false, false, '', true, 12); ?>
      </div>
   </div>
</div>
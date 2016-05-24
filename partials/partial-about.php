<div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-hero-bg.jpg');">
   <div class="push-down">
   </div>

   <div class="hero-content">
      <div class="inner">
         <div class="hero-heading container">
            <span class="top-accent"></span>
            <h2>Our Soul is Our People</h2>
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


<div id="team">
   <div class="leadership isLightGray well--s">
      <div class="section-heading">
         <h3>Leadership</h3>
      </div>

      <?php if( have_rows('leadership_team_member') ): ?>
      <div class="container team-grid narrowContentLg">
         <?php while( have_rows('leadership_team_member') ): the_row(); ?>
         <div class="team-member-block">
            <div class="member-photo" style="background-image: url('<?php the_sub_field('leader_photo'); ?>');">
            </div>

            <div class="member-details">
               <h3><?php the_sub_field('leader_name'); ?></h3>
               <p><?php the_sub_field('leader_title_position'); ?></p>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
      <?php endif; ?>
   </div>

   <div class="employees isWhite well--s">
      <?php if( have_rows('team_member') ): ?>
      <div class="container team-grid narrowContentLg">
         <?php while( have_rows('team_member') ): the_row(); ?>
         <div class="team-member-block">
            <div class="member-photo" style="background-image: url('<?php the_sub_field('team_member_photo'); ?>');">
            </div>

            <div class="member-details">
               <h3><?php the_sub_field('team_member_name'); ?></h3>
               <p><?php the_sub_field('team_member_title_position'); ?></p>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
      <?php endif; ?>
   </div>
</div>


<div class="about-lower-cta well isDarkGray" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-lower-cta-bg.jpg');">
   <div class="container">
      <div class="section-heading wBarsTextTop">
         <div class="heading-tagline">
            <h3>Say Hello</h3>
            <span class="top-left-accent"></span>
            <span class="top-right-accent"></span>
         </div>

         <h2>Plan Your Visit</h2>

         <span class="bottom-accent"></span>
      </div>

      <div class="centerBtn">
         <a href="/locations/" class="btn wAccents">View Locations</a>
      </div>
   </div>
</div>
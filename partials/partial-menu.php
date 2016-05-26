<div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-lower-cta-bg.jpg');">
   <div class="push-down">
   </div>

   <div class="hero-content">
      <div class="inner">
         <div class="hero-heading container">
            <span class="top-accent"></span>
            <h2>Our Menu</h2>
            <span class="bottom-accent"></span>
         </div>
      </div>
   </div>
</div>


<div class="menu-section wrapper isWhite well">
   <div class="container narrowContentLg">
      <div class="section-heading">
         <h3>What Are You in the Mood For?</h3>
      </div>

      <?php if( have_rows('menu_Category') ): ?>
      <div class="menu-categories">
         <?php while( have_rows('menu_Category') ): the_row(); ?>
            <div class="menu-category-wrap hasOverlay">
               <a href="#">
                  <div class="darkOverlay do50"></div>
                  <div class="menu-category isDarkGray" style="background-image: url('<?php the_sub_field('menu_category_image'); ?>');">
                  </div>

                  <div class="menu-category-title">
                     <div class="inner vAlign vAlignAbs">
                        <h3><?php the_sub_field('menu_category_title'); ?></h3>
                     </div>
                  </div>
               </a>
            </div>

         <?php endwhile; ?>
      </div>
      <?php endif; ?>
   </div>
</div>
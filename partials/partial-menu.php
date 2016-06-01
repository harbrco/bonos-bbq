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
         <?php $menuCatIndex = 1; ?>
         <?php while( have_rows('menu_Category') ): the_row(); ?>
            <div class="menu-category-wrap hasOverlay">
               <a href="#menu-category-<?php echo $menuCatIndex; ?>" class="fancybox-menu-box" data-fancybox-group="menuCategories">
                  <div class="darkOverlay do50"></div>
                  <div class="menu-category isDarkGray" style="background-image: url('<?php the_sub_field('menu_category_image'); ?>');">
                  </div>

                  <div class="menu-category-title">
                     <div class="inner vAlign vAlignAbs">
                        <h3><?php the_sub_field('menu_category_title'); ?></h3>
                     </div>
                  </div>
               </a>

               <div id="menu-category-<?php echo $menuCatIndex; ?>" class="menu-items-box">
                  <div class="menu-category-box-shadow">
                     <div class="menu-category-heading isDarkGray hasOverlay" style="background-image: url('<?php the_sub_field('menu_category_image'); ?>');">
                        <div class="darkOverlay do50"></div>
                        <h3><?php the_sub_field('menu_category_title'); ?></h3>
                        <span class="close-menu-modal">
                           <a href="javascript:parent.$.fancybox.close();">
                              <span class="close-modal close-menu-box close-btn modal-toggle">
                                 <span></span>
                                 <span></span>
                              </span>
                           </a>
                        </span>
                     </div>

                     <?php if( have_rows('menu_item') ): ?>
                     <div class="menu-items-list isWhite">
                        <ul class="menu-item-list">
                        <?php while( have_rows('menu_item') ): the_row(); ?>
                           <li class="menu-item">
                              <?php if (get_sub_field('menu_item_description')) { ?>
                                 <h4><?php the_sub_field('menu_item_name'); ?></h4>
                                 <p><?php the_sub_field('menu_item_description'); ?></p>

                              <?php } else { ?>
                                 <h4 class="no-description"><?php the_sub_field('menu_item_name'); ?></h4>

                              <?php } ?>
                           </li>
                        <?php endwhile; ?>
                        </ul>
                     </div>
                     <?php endif; ?>
                  </div>

                  <div class="next-prev-menu-category-links">
                     <div class="more-items">
                        <h4>Keep Looking</h4>
                     </div>

                     <div class="prev hasOverlay" style="background-image: url('<?php the_sub_field('menu_category_image'); ?>');">
                        <div class="darkOverlay do50"></div>
                        <span class="prev-next-arrow arrow-lt"></span>
                        <a href="javascript:parent.$.fancybox.prev();">prev</a>
                     </div>

                     <div class="next hasOverlay" style="background-image: url('<?php the_sub_field('menu_category_image'); ?>');">
                        <div class="darkOverlay do50"></div>
                        <span class="prev-next-arrow arrow-rt"></span>
                        <a href="javascript:parent.$.fancybox.next();">next</a>
                     </div>
                  </div>
               </div>
            </div>

         <?php $menuCatIndex++; ?>
      <?php endwhile; ?>
      </div>
      <?php endif; ?>
   </div>
</div>
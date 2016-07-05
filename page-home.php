<?php get_header(); ?>

   <div class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/home-hero-bg2.jpg');">
      <audio id="scrollaudio" src="<?php echo get_template_directory_uri(); ?>/media/jingle.mp3"></audio>

      <div class="push-down">
      </div>

      <span class="audio-toggle pauseBtn">
         <span class="icon"></span>
      </span>

      <div class="hero-content">
         <div class="inner">
            <div class="hero-heading container">
               <span class="top-accent"></span>
               <h2>Real Pit Barbecue Since 1949</h2>

               <div class="heading-tagline">
                  <h3>Yeah, It's Good.</h3>
                  <span class="bottom-left-accent"></span>
                  <span class="bottom-right-accent"></span>
               </div>
            </div>

            <div class="centerBtn container">
               <a href="/menu/" class="btn wAccents">See Our Menu</a>
            </div>
         </div>
      </div>
   </div>


   <div class="home-about-intro-slider isDarkGray">
      <div class="home-about-intro left-col hasContent">
         <div class="well--dbl">
            <div class="section-heading">
               <h3><?php the_field('intro_heading'); ?></h3>
            </div>

            <?php the_field('intro_text'); ?>
            <a href="/about/" class="btn wAccents btn--ghost">More About Us</a>
         </div>
      </div>

      <div class="home-about-slider-wrapper right-col">
         <?php if( have_rows('intro_slides') ): ?>
         <div class="home-about-slider">
            <?php while( have_rows('intro_slides') ): the_row(); ?>
            <div class="slide hasOverlay" style="background-image: url('<?php the_sub_field('slide_background_image'); ?>');">
               <div class="darkOverlay do20"></div>
               <div class="slide-text">
                  <?php if ( get_sub_field('open_in_new_tab') && get_sub_field('slide_link_url') ) { ?>
                     <a href="<?php the_sub_field('slide_link_url'); ?>" target="_blank">
                        <h4><?php the_sub_field('slide_title'); ?></h4>
                        <span>View</span>
                     </a>

                  <?php } elseif ( get_sub_field('slide_link_url') ) { ?>
                     <a href="<?php the_sub_field('slide_link_url'); ?>">
                        <h4><?php the_sub_field('slide_title'); ?></h4>
                        <span>View</span>
                     </a>

                  <?php } elseif ( get_sub_field('slide_type') == "image-popup" ) { ?>
                     <a href="<?php the_sub_field('slide_image'); ?>" class="fancybox-image image-modal">
                        <h4><?php the_sub_field('slide_title'); ?></h4>
                        <span>View</span>
                     </a>

                  <?php } elseif ( get_sub_field('slide_type') == "video-popup" ) { ?>
                     <a href="<?php the_sub_field('slide_video_url'); ?>" class="video-play-btn fancybox-video">
                        <h4><?php the_sub_field('slide_title'); ?></h4>
                        <span>View</span>
                     </a>

                  <?php } ?>
               </div>
            </div>

            <?php endwhile; ?>
         </div>
         <?php endif; ?>
      </div>
   </div>


   <div class="home-tagline-banner isPrimary" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/home-tagline-bg.jpg');">
      <h3>If You Don't See A Pit, <span class="noWrap">It Ain't Legit.</span></h3>
   </div>


   <div class="home-lower-ctas split-50 isDarkGray">
      <div class="or-box">
         <span>OR</span>
      </div>
      <div class="home-lower-cta split-50-left hasOverlay">
         <div class="darkOverlay do60"></div>
         <div class="flex-inner well--dbl">
            <div class="section-heading wBars">
               <h3>Plan Your Visit</h3>
            </div>

            <a href="/locations/" class="btn wAccents">View Locations</a>
         </div>

         <div class="video" style="background-image: url('<?php the_field('cta_left_background_image'); ?>');">
            <video class="thevideo" loop preload="none">
            <source src="<?php the_field('cta_left_background_video_webm'); ?>" type="video/webm">
            <source src="<?php the_field('cta_left_background_video_mp4'); ?>" type="video/mp4">
            Your browser does not support the video tag.
            </video>
         </div>
      </div>

      <div class="home-lower-cta split-50-right hasOverlay">
         <div class="darkOverlay do60"></div>
         <div class="flex-inner well--dbl">
            <div class="section-heading wBars">
               <h3>Plan Your Event</h3>
            </div>

            <a href="/catering/" class="btn wAccents">Catering Info</a>
         </div>

         <div class="video" style="background-image: url('<?php the_field('cta_right_background_image'); ?>');">
            <video class="thevideo" loop preload="none">
            <source src="<?php the_field('cta_right_background_video_webm'); ?>" type="video/webm">
            <source src="<?php the_field('cta_right_background_video_mp4'); ?>" type="video/mp4">
            Your browser does not support the video tag.
            </video>
         </div>
      </div>
   </div>

<?php get_footer(); ?>
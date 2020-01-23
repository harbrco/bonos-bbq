<?php get_header(); ?>

<div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-hero-bg.jpg');">
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


<div class="locations-section wrapper isWhite well">
   <div class="container narrowContentLg">
      <div class="location-navigate">
         <div class="city-filter">
            <h4 class="label">Find Your City2:</h4>
            <?php echo do_shortcode('[searchandfilter taxonomies="city" types"select"]') ?>
         </div>

         <!-- <div class="all-locations">
            <a href="/locations/" class="btn btn--ghost">View All</a>
         </div> -->
      </div>


      <div class="image-box-links">
         <?php get_template_part('loop-locations'); ?>
      </div>
   </div>
</div>

<?php get_footer(); ?>
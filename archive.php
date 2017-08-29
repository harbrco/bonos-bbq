<?php get_header(); ?>

<div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-lower-cta-bg.jpg');">
   <div class="push-down">
   </div>

   <!-- <div class="hero-content">
      <div class="inner">
         <div class="hero-heading container">
            <span class="top-accent"></span>
            <h2>Bono's News</h2>
            <span class="bottom-accent"></span>
         </div>
      </div>
   </div> -->
</div>

<div class="blog-heading container narrowContentLg well well--noBottom">
   <h1><?php _e( 'Archives', 'html5blank' ); ?>: <?php single_month_title(' '); ?></h1>
</div>


<section role="main" class="post-feed-wrapper wrapper isWhite well well--noBottom">
   <div class="container narrowContentLg">
      <?php get_template_part('loop'); ?>
   </div>
</section>

<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-lower-cta-bg.jpg');">
   <div class="push-down">
   </div>

   <div class="hero-content">
      <div class="inner">
         <div class="hero-heading container">
            <span class="top-accent"></span>
            <h1>Bono's News</h1>
            <span class="bottom-accent"></span>
         </div>
      </div>
   </div>
</div>


<section role="main" class="post-feed-wrapper wrapper isWhite well well--noBottom">
   <div class="container narrowContentLg">
      <?php get_template_part('loop'); ?>
   </div>
</section>

<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>
<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
   <?php if (get_field('hero_background_image')) {
      $heroImg = get_field('hero_background_image');
   } else if ( has_post_thumbnail()) { // Check if Thumbnail exists
      $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full, false, '' );
      $heroImg = $featImg[0];
   } else { // if no Hero Background Image OR Featured Image...
      $heroImg = get_template_directory_uri() . "/img/section-bgs/about-lower-cta-bg.jpg";
   } ?>


   <div class="hero hero--small hasOverlay" style="background-image: url('<?php echo $heroImg; ?>');">
      <div class="darkOverlay do60"></div>

      <div class="push-down">
      </div>

      <div class="hero-content">
         <div class="inner">
            <div class="hero-heading container">
               <span class="top-accent"></span>
               <h2><?php the_title(); ?></h2>
               <span class="bottom-accent"></span>
               <span class="date"><?php the_time('F j, Y'); ?></span>
            </div>
         </div>
      </div>
   </div>

   <div class="wrapper">
      <div class="container article-nav">
         <a href="/news/" class="article-back"><span class="fa fa-chevron-left"></span>&nbsp; Back to News</a>

         <?php $prevPost = get_previous_post(); ?>
         <?php $prevPostID = $prevPost->ID; ?>
         <?php if($prevPost) { ?>
            <a href="<?php echo get_permalink( $prevPost->ID ); ?>" class="article-next">Next Article &nbsp;<span class="fa fa-chevron-right"></span></a>
         <?php } else {
            // don't display a link
         } ?>
      </div>
   </div>


   <section role="main" class="post-feed-wrapper wrapper isWhite well">
      <div class="container narrowContentLg">
         <article id="post-<?php the_ID(); ?>" <?php post_class('isContentArea'); ?>>
            <?php if (get_field('include_featured_image_at_top')) { ?>
               <div class="featured-image">
                  <?php the_post_thumbnail(); // Fullsize image for the single post ?>
               </div>
            <?php } ?>

            <?php the_content(); // Dynamic Content ?>

            <div class="social-sharing">
               <h3>Share This Article</h3>
               <ul class="social-links">
                  <li><a target="_blank" href="http://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=<?php the_permalink(); ?>" rel="nofollow"><span class="fa fa-facebook"></span></a></li>
                  <li><a target="_blank" href="http://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=<?php the_permalink(); ?>" rel="nofollow"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="mailto:?subject=Check out this article&body=Hi, I found this and thought you might like it: <?php the_permalink(); ?>"><span class="fa fa-envelope-o"></span></a></li>
               </ul>
            </div>
         </article>
      </div>
   </section>

<?php endwhile; ?>

<?php else: ?>

   <section role="main" class="post-feed-wrapper wrapper isWhite well">
      <div class="container narrowContentLg">
         <article>
            <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
         </article>
      </div>
   </section>

<?php endif; ?>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
<?php if (get_field('shop_header_image', 'option')) {
  $bgImage = get_field('shop_header_image', 'option');
} else {
  $bgImage = get_template_directory_uri() . '/img/section-bgs/home-hero-bg.jpg';
} ?>
 <div class="hero hero--small" style="background-image: url('<?php echo $bgImage; ?>');">
   <div class="push-down">
   </div>
</div>

<div id="shop">
   <div class="leadership shopArchive isWhite well--s">
      <div class="section-heading">
         <h3>Cart</h3>
      </div>
      <div class="container narrowContentLg">
         <!-- section -->
         <section role="main">

         <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

               <?php the_content(); ?>

               <br class="clear">

               <?php edit_post_link(); ?>

            </article>
            <!-- /article -->

         <?php endwhile; ?>

         <?php else: ?>

            <!-- article -->
            <article>

               <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

            </article>
            <!-- /article -->

         <?php endif; ?>

         </section>
         <!-- /section -->
      </div>
   </div>
</div>

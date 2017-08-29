<?php if (have_posts()): while (have_posts()) : the_post(); ?>

   <!-- article -->
   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php if ( has_post_thumbnail()) { // Check if thumbnail exists ?>
         <div class="article-teaser-columns">
            <div class="feat-img-col">
               <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php the_post_thumbnail(array(400,400)); // Declare pixel size you need inside the array ?>
               </a>
            </div>

            <div class="article-info-col">
               <div class="article-teaser-text">
                  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

                  <span class="date"><?php the_time('F j, Y'); ?></span>

                  <?php html5wp_excerpt('html5wp_custom_post'); // Build your custom callback length in functions.php ?>

                  <div class="btn-row">
                     <a href="<?php the_permalink(); ?>" class="view-article btn btn--ghost">Read Article</a>
                  </div>
               </div>
            </div>
         </div>

      <?php } else { ?>

         <div class="article-teaser-text">
            <div class="article-teaser-text">
               <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

               <span class="date"><?php the_time('F j, Y'); ?></span>

               <?php html5wp_excerpt('html5wp_custom_post'); // Build your custom callback length in functions.php ?>

               <div class="btn-row">
                  <a href="<?php the_permalink(); ?>" class="view-article btn btn--ghost">Read Article</a>
               </div>
            </div>
         </div>
      <?php } ?>



   </article>
   <!-- /article -->

   <div class="article-divider"></div>

<?php endwhile; ?>

<?php else: ?>

   <!-- article -->
   <article>
      <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
   </article>
   <!-- /article -->

<?php endif; ?>
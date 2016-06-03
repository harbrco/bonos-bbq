<?php if (have_posts()): while (have_posts()) : the_post(); ?>
   <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

   <div class="image-box-wrap hasOverlay">
      <a href="<?php the_permalink(); ?>">
         <div class="darkOverlay do50"></div>
         <div class="image-box isDarkGray" style="background-image: url('<?php echo $featImg[0]; ?>');">
         </div>

         <div class="image-box-title">
            <div class="inner vAlign vAlignAbs">
               <h3><?php the_title(); ?></h3>
            </div>
         </div>
      </a>
   </div>

<?php endwhile; ?>

<?php else: ?>
<?php endif; ?>
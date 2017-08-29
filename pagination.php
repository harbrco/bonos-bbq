<!-- pagination -->
<?php if(get_next_posts_link() || get_previous_posts_link()) { ?>
   <div class="pagination wrapper well">
      <div class="container narrowContentLg">
         <?php html5wp_pagination(); ?>
      </div>
   </div>

<?php } else { ?>
   <div class="pagination wrapper well well--noBottom">
   </div>
<?php } ?>

<!-- /pagination -->
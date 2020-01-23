<div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-hero.jpg');">
   <div class="push-down">
   </div>

   <div class="hero-content">
      <div class="inner">
         <div class="hero-heading container">
            <span class="top-accent"></span>
            <h1>Bono's Shop</h1>
            <span class="bottom-accent"></span>
         </div>
      </div>
   </div>
</div>


<div id="team">
   <div class="leadership isLightGray well--s">
      <div class="section-heading">
         <h3>Leadership</h3>
      </div>

      <?php if( have_rows('leadership_team_member') ): ?>
      <div class="container team-grid narrowContentLg">
         <?php while( have_rows('leadership_team_member') ): the_row(); ?>
         <div class="team-member-block">
            <div class="member-photo" style="background-image: url('<?php the_sub_field('leader_photo'); ?>');">
            </div>

            <div class="member-details">
               <h3><?php the_sub_field('leader_name'); ?></h3>
               <p><?php the_sub_field('leader_title_position'); ?></p>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
      <?php endif; ?>
   </div>

   <div class="employees isWhite well--s">
      <?php if( have_rows('team_member') ): ?>
      <div class="container team-grid narrowContentLg">
         <?php while( have_rows('team_member') ): the_row(); ?>
         <div class="team-member-block">
            <div class="member-photo" style="background-image: url('<?php the_sub_field('team_member_photo'); ?>');">
            </div>

            <div class="member-details">
               <h3><?php the_sub_field('team_member_name'); ?></h3>
               <p><?php the_sub_field('team_member_title_position'); ?></p>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
      <?php endif; ?>
   </div>
</div>


<div class="about-lower-cta well isDarkGray" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-lower-cta-bg.jpg');">
   <div class="container">
      <div class="section-heading wBarsTextTop">
         <div class="heading-tagline">
            <h3>Say Hello</h3>
            <span class="top-left-accent"></span>
            <span class="top-right-accent"></span>
         </div>

         <h2>Plan Your Visit</h2>

         <span class="bottom-accent"></span>
      </div>

      <div class="centerBtn">
         <a href="/locations/" class="btn wAccents">View Locations</a>
      </div>
   </div>
</div>

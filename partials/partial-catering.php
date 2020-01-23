<div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/catering-hero.jpg');">
   <div class="push-down">
   </div>

   <div class="hero-content">
      <div class="inner">
         <div class="hero-heading container">
            <span class="top-accent"></span>
            <h1>Bono's Catering</h1>
            <span class="bottom-accent"></span>
         </div>
      </div>
   </div>
</div>


<div class="page-intro-split-cols split-50 wrapper isLightGray">
   <div class="split-50-left hasContent">
      <div class="flex-inner well--s--dbl">
         <div class="section-heading">
            <h3><?php the_field('intro_heading'); ?></h3>
         </div>

         <div class="intro-text">
            <?php the_field('intro_text'); ?>

            <?php if(get_field('catering_menu_pdf')) { ?>
               <a href="<?php the_field('catering_menu_pdf'); ?>" class="btn btn--ghost" target="_blank">Download Menu<span class="target_blank">(opens in new window)</span></a>
            <?php } ?>
         </div>
      </div>
   </div>

   <div class="split-50-right" style="background-image: url('<?php the_field('intro_photo'); ?>');">
   </div>
</div>


<div class="form-section wrapper isWhite well">
   <div class="container narrowContentMd hasContent">
      <div class="section-heading">
         <h3><?php the_field('form_section_heading'); ?></h3>
      </div>

      <div class="form-instructions">
         <p><?php the_field('form_instructions'); ?></p>

         <h4><?php the_field('form_instruction_subheading'); ?></h4>
      </div>

      <div class="form-wrapper">
         <?php gravity_form(2, false, false, false, '', true, 12); ?>
      </div>
   </div>
</div>
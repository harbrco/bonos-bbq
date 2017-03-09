<div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/about-lower-cta-bg.jpg');">
   <div class="push-down">
   </div>

   <div class="hero-content">
      <div class="inner">
         <div class="hero-heading container">
            <span class="top-accent"></span>
            <h2>Careers</h2>
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
            <div class="address">
               <h3>Corporate Office</h3>
               <p><?php the_field('corporate_office_address'); ?></p>
            </div>

            <div class="phone">
               <h3>Phone</h3>
               <?php
               $phoneNumber = get_field('phone_number');
               $phoneClean = str_replace('.', '', $phoneNumber);
               ?>
               <p><a href="tel:+1<?php echo $phoneClean; ?>"><?php the_field('phone_number'); ?></a></p>
            </div>

            <div class="fax">
               <h3>Fax</h3>
               <p><?php the_field('fax_number'); ?></p>
            </div>
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
         <?php the_field('form_instructions'); ?>

         <h4><?php the_field('form_instruction_subheading'); ?></h4>
      </div>

      <div class="form-wrapper">
         <?php gravity_form(5, false, false, false, '', true, 12); ?>
      </div>
   </div>
</div>
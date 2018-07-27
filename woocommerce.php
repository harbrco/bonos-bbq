<?php get_header();

global $product;
 ?>
 <?php if (is_woocommerce() || is_page('cart')) { ?>
	<script type="text/javascript">
		var shopBool = true;
	</script>
 <?php } ?>
 <?php if (is_product()) { ?>
	<script type="text/javascript">
		var productBool = "true";
	</script>
 <?php } ?>
 <?php if( is_product_category() ) { ?>
   <script type="text/javascript">
     var prodCatBool = "true";
   </script>
 <?php } ?>

<?php if( is_shop() || is_product_category() ) { ?>
  <?php if (get_field('shop_header_image', 'option')) {
    $bgImage = get_field('shop_header_image', 'option');
  } else {
    $bgImage = get_template_directory_uri() . '/img/section-bgs/home-hero-bg.jpg';
  } ?>
   <div class="hero hero--small" style="background-image: url('<?php echo $bgImage; ?>');">
      <div class="push-down">
      </div>
      <div class="hero-content">
         <div class="inner">
            <div class="hero-heading container">
               <span class="top-accent"></span>
               <?php if (get_field('shop_header_title', 'option')) { ?>
                 <h2><?php the_field('shop_header_title', 'option') ?></h2>
               <?php } else { ?>
                 <h2>Bono's Shop</h2>
               <?php } ?>
               <span class="bottom-accent"></span>
            </div>
         </div>
      </div>
   </div>

   <div id="shop">
      <div class="layout-single-centered-col shopArchive isWhite well--s">
         <div class="section-heading">
            <h3>What can we get for you?</h3>
         </div>

         <div class="layout-2-text-col wrapper isWhite">
            <div class="gift-cards-promo container narrowContentLg split-50 hasContent">
               <div class="split-50-left">
                  <div class="section-heading">
                     <h3>Looking for Bono's Gift Cards?</h3>
                  </div>
               </div>

               <div class="split-50-right">
                  <p>Look no further! You can purchase gift cards starting at $20.</p>
                  <a href="https://onelink.quickgifts.com/merchant/bonos-pit-bar-b-q/" target="_blank" class="btn btn--ghost">Purchase Gift Cards Now</a>
               </div>
            </div>
         </div>


         <div class="container">

            <?php woocommerce_content(); ?>
         </div>
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
<?php } else { ?>
   <div class="hero hero--small" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/section-bgs/home-hero-bg.jpg');">
      <div class="push-down">
      </div>
   </div>
   <?php woocommerce_content(); ?>
<?php } ?>
<?php get_footer(); ?>

<?php
/**
 * Empty cart page
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly
}

wc_print_notices();

?>
<script type="text/javascript">
  var shopBool = true;
</script>

<div class="empty-cart-wrapper">
   <div class="inner vAlign">

      <?php do_action( 'woocommerce_cart_is_empty' ); ?>

      <p class="return-to-shop"><a class="btn btn--ghost btn--ghost--onWhite wc-backward" href="/shop"><?php _e( 'Go Shop', 'woocommerce' ) ?></a></p>
   </div>
</div>

<?php get_header(); ?>
<!-- new custom loop -->
 <ul class="products wow fadeIn" data-wow-delay=".25s">
    <?php
    if ( is_shop() || is_product_category() || is_product_tag() ) { // Only run on shop archive pages, not single products or other pages
       // Products per page
       $per_page = 8;
       if ( get_query_var( 'taxonomy' ) ) { // If on a product taxonomy archive (category or tag)
          $args = array(
             'post_type' => 'product',
             'posts_per_page' => $per_page,
             'paged' => get_query_var( 'paged' ),
             'tax_query' => array(
                array(
                   'taxonomy' => get_query_var( 'taxonomy' ),
                   'field'    => 'slug',
                   'terms'    => get_query_var( 'term' ),
                ),
             ),
          );
       } else { // On main shop page
          //$exclude_ids = array( 144 );  // remove the "Complete CNC Package" product from main loop
          $args = array(
             'post_type' => 'product',
             'posts_per_page' => $per_page,
             'paged' => get_query_var( 'paged' ),
             //'post__not_in' => $exclude_ids,
             'tax_query' => array(
                array(
                   'taxonomy'  => 'product_cat',
                   'field'     => 'slug',
                   'terms'     => array( 'workshops' ), // exclude media posts in the certain custom taxonomy
                   'operator'  => 'NOT IN'
                ),
             ),
          );
       }
       // Set the query
       $products = new WP_Query( $args );
       // Standard loop
       if ( $products->have_posts() ) :
          while ( $products->have_posts() ) : $products->the_post();

             wc_get_template_part( 'content', 'product' );

          endwhile;
          wp_reset_postdata();
       endif;
    } else { // If not on archive page (cart, checkout, etc), do normal operations
       woocommerce_content();
    }
    ?>
 </ul><!--/.products-->

 <?php get_footer(); ?>

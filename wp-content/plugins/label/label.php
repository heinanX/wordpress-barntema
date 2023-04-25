<?php

/**
 * Plugin Name: label
 * Description: Adds a 'New' label to the two latest added products.
 * Version: 1.0.0
 * Author: Linda
 */


function my_custom_product_label() {
  global $product;
  $latest_product = wc_get_products( array(
    'limit' => 2,
    'orderby' => 'date',
    'order' => 'DESC',
  ) );
  if ( $product->get_id() == $latest_product[0]->get_id() || $product->get_id() == $latest_product[1]->get_id() ) {
    echo '<span class="newArrival">New!</span>';

  }
}

add_action( 'woocommerce_before_shop_loop_item_title', 'my_custom_product_label' );
add_action( 'woocommerce_single_product_summary', 'my_custom_product_label' );
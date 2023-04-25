<?php
/**
 * Plugin Name: Greeting
 * Description: Custom greeting.
 * Version: 1.0.0
 * Author: Linda
 */

 function custom_greeting() {
    if (is_front_page() || is_product_category()) {
        return dynamic_sidebar( 'message' );
    }
 }

 add_action('woocommerce_before_main_content', 'custom_greeting');
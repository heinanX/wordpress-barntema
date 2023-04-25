<?php

// code that registers a widget from the my_plugin
register_sidebar( [
    'name' => 'message',
    'description' => 'Store message',
    'id' => 'message',
    'before_widget' => '<div class="storeMessage">',
    'after_widget' => '</div>'
] );


// a message that echos out 'Fri frakt vid beställningar över 199kr' inside a P element
function cart_message() {
    echo '<p>Fri frakt vid beställningar över 199kr</p>';
}
// hook that adds cart_message to content before cart
add_action( 'woocommerce_before_cart', 'cart_message' );


function message_to_remove() {

    if ( is_front_page() || is_product_category()) {
        // removes the function if page is front page or cathegory. as they use the same template as cart.
        return remove_action( 'woocommerce_before_main_content', 'message_to_remove' );
    }
    echo "<p>This should be a paragraph that's only visible on the single product page.</p>"; //it's also visible on tags
}
// hook that adds cart_message to content before cart
add_action( 'woocommerce_before_main_content', 'message_to_remove' );

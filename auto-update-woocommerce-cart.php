<?php 
// Removing woocommerce add to cart notification
add_filter( 'wc_add_to_cart_message_html', '__return_false' );

// function to remove update cart button on cart page
add_action( 'wp_footer', 'codedocx_update_cart_button' ); 
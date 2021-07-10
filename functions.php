add_action( 'woocommerce_cart_is_empty', 'codeithub_add_content_empty_cart' );
  
function codeithub_add_content_empty_cart() {
   echo 'This will show on the empty cart page';
}

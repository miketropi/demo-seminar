<?php 
/**
 * Static method
 */

add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_script('fe', PLG_URI . '/dist/fe.bundle.js', ['jquery'], PLG_VER, true);
} );
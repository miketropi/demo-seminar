<?php 
/**
  Plugin Name: Demo Seminar
  Plugin URI: #
  description: Auto deployment!!!
  Version: 1.0
  Author: Be+
  Author URI: #
  License: GPL2
  */

{
  /**
   * Define 
   */
  define('PLG_VER', '1.0.0');
  define('PLG_DIR', plugin_dir_path( __FILE__ ));
  define('PLG_URI', plugin_dir_url( __FILE__ ));
}

{
  /**
   * inc
   */
  require( PLG_DIR . '/inc/static.php' );
  require( PLG_DIR . '/inc/helpers.php' );
  require( PLG_DIR . '/inc/hooks.php' );
  require( PLG_DIR . '/inc/options.php' );
  require( PLG_DIR . '/inc/ajax.php' );
}
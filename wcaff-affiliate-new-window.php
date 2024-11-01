<?php
/*
Plugin Name: WC External/Affiliate Links New Window
Plugin URI: http://wordpress.org/
Description: Opens up affiliate or external WooCommerce links in a new window.
Version: 1.0.1
Author: Justin Rains
Author URI: http://portalplanet.net/
*/

if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');

function activate_woo_new_window() {
}

function deactivate_woo_new_window() {
}

function admin_init_ribbon_manager() {
}

function admin_menu_ribbon_manager() {
}

/**
 * Register style sheet and JS.
 */

add_action('wp_footer', 'wcaff_affiliate_new_window');
function wcaff_affiliate_new_window() {
  wp_enqueue_script('wcaff-affiliate-new-window', plugins_url( '/js/wcaff-affiliate-new-window.js', __FILE__), array(), '1.0.0', true );
}

register_activation_hook(__FILE__, 'activate_woo_new_window');
register_deactivation_hook(__FILE__, 'deactivate_woo_new_window');

// reference
if (is_admin()) {
}
?>

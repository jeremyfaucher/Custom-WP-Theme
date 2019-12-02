<?php
/**
 * Cafe Faucher Theme WooCommerce.
 *
 * @package Cafe_Faucher
 */
/**
 * WooCommerce theme adjusments.
 *
 * @since Cafe Faucher 1.0
 */


add_action('template_redirect', 'remove_sidebar_shop');
function remove_sidebar_shop() {
    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
 
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}
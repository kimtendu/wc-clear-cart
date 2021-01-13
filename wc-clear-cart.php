<?php
/*
 Plugin Name: WC Clear cart on before checkout page
 Description: Clear cart when u left checkout page.
 Author: kimtendu
 Author URI: https://github.com/kimtendu/wc-clear-cart
 Version: 1.0
 License: GPLv3 or later License
 URI: http://www.gnu.org/licenses/gpl-3.0.html
 */


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('template_redirect', 'clear_card');
function clear_card()
{
    if (class_exists('WooCommerce')) {
        if (is_product()) {
            global $woocommerce;
            $woocommerce->cart->empty_cart();
        }
    }
    return;
}

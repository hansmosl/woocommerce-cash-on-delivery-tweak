<?php
/**
 * Plugin Name: WooCommerce Cash On Delivery Tweak
 * Plugin URI: https://github.com/hansmosl/woocommerce-cash-on-delivery-tweak/
 * Description: Change the default status order from Cash On Delivery payment method from processing to completed
 * Version: 1.0
 * Author: hansmosl
 * Author URI: https://github.com/hansmosl/
 */
 
if(!defined('ABSPATH'))
{
	exit;
}// Exit if accessed directly

if (!class_exists('WooCommerce'))
{
	exit;
}// Exit if WooCommerce is not active

add_filter( 'woocommerce_cod_process_payment_order_status', 'set_cod_process_payment_order_status_completed', 10, 2 );
function set_cod_process_payment_order_status_completed( $status, $order ) {
    return 'completed';
}// Especial Filter for Cash On Delivery (cos) payment method
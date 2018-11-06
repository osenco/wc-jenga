<?php
/**
 * @package Jenga For WooCommerce
 * @author Osen Concepts < hi@osen.co.ke >
 * @version 1.10
 *
 * Plugin Name: Jenga For WooCommerce
 * Plugin URI: https://wc-mpesa.osen.co.ke/
 * Description: This plugin extends WordPress and WooCommerce functionality to integrate <cite>Jenga APIs</cite> for making and receiving mobile payments online.
 * Author: Osen Concepts Kenya < hi@osen.co.ke >
 * Version: 1.10.0
 * Author URI: https://osen.co.ke/
 *
 * Requires at least: 4.4
 * Tested up to: 4.9.5
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ){
	exit;
}

if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ){
	exit('Please install WooCommerce for this extension to work');
}
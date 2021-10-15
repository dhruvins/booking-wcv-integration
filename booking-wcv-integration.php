<?php 
/**
 * Plugin Name: Bookings and WC Vendors integration
 * Plugin URI: https://imaginate-solutions.com/
 * Description: This plugin integrates Booking and WC Vendors plugin to allow commissions to be granted only after Booking Date.
 * Version: 1.0.0
 * Author: Dhruvin Shah
 * Author URI: https://imaginate-solutions.com/
 * Requires PHP: 5.6
 * WC requires at least: 3.0.0
 * WC tested up to: 3.5
 */

remove_action( 'woocommerce_order_status_completed', array( 'WCV_Commission', 'log_commission_due' ) );
remove_action( 'woocommerce_order_status_processing', array( 'WCV_Commission', 'log_commission_due' ) );
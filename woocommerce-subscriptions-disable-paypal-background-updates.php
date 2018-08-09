<?php
/**
 * Plugin Name: WCS Disable PayPal Repair
 * Plugin URI: https://github.com/Prospress/woocommerce-subscriptions-disable-paypal-background-updates/
 * Description: TEMPORARILY Disable background PayPal repair script
 * Author: Prospress Inc.
 * Author URI: https://prospress.com/
 * License: GPLv3
 * Version: 1.0.0
 * Requires at least: 4.0
 * Tested up to: 4.9
 * WC requires at least: 2.6
 * WC tested up to: 3.4
 *
 * GitHub Plugin URI: Prospress/woocommerce-subscriptions-disable-paypal-background-updates
 * GitHub Branch: master
 *
 * Copyright 2018 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package WCS Disable PayPal Repair
 * @author  Prospress Inc.
 * @since   1.0
 */

// Disable direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

// Load our code after background updaters have been loaded.
add_action( 'init', 'wcsdpr_disable_repair', 99999 );

/**
 * Disable the repair process for suspended PayPal subscriptions.
 *
 * This removes all functions attached to the repair process hook. Utilization of this
 * plugin should be a temporary measure.
 */
function wcsdpr_disable_repair() {
	remove_all_actions( 'wcs_repair_subscriptions_suspended_paypal_not_woocommerce' );
}

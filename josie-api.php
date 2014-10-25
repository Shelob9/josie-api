<?php
/*
Plugin Name: Josie API
Plugin URI: https://github.com/shelob9/josie-api
Description: Companion for the Josie REST API-powered starter app. Useful tools for any site using the WP REST API.
Version: 0.1.1
Author: Josh Pollock
Author URI: http://JoshPress.net/
Text Domain: josie-api
License: GPL v2 or later
*/

/**
 * Copyright (c) 2014 Josh Pollock (email: Josh@JoshPress.net). All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * **********************************************************************
 */


//autoload dependencies
$vendor_dir = __DIR__ . '/vendor/autoload.php';
if ( file_exists( $vendor_dir ) ) {
	require_once( $vendor_dir );
}

if ( ! defined( 'JP_API_ROUTE' ) ) {
	define( 'JP_API_ROUTE', 'josie-api' );
}


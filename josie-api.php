<?php
/*
 Plugin Name: Josie API
 */

//autoload dependencies
$vendor_dir = __DIR__ . '/vendor/autoload.php';
if ( file_exists( $vendor_dir ) ) {
	require_once( $vendor_dir );
}

if ( ! defined( 'JP_API_ROUTE' ) ) {
	define( 'JP_API_ROUTE', 'josie-api' );
}


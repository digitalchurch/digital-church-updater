<?php
/*
	Plugin Name: Digital Church Updater
	Description: This is for updating your Wordpress plugin.
	Version: 1.0.0
	Author: Mark Tenney
	Author URI: https://digitalchurch.limited
*/
if( ! class_exists( 'Digital_Church_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Digital_Church_Updater( __FILE__ );
$updater->set_username( 'digitalchurch' );
$updater->set_repository( 'digital-church-updater' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();

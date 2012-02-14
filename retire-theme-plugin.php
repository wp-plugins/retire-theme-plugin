<?php
/*
Plugin Name: Retire Theme Plugin
Plugin URI: http://wordpress.org/extend/plugins/retire-theme-plugin/
Description: Allow network administrators to look at theme usage and make announcements about theme retirement and make recommendation which theme to switch to. This is a very useful for network administrator still running some of the older themes for some WordPress network installation. It is a passive agressive way to tell user to switch theme.
Version: 0.1
Author: Michael Ha
Author URI: http://khmha.com/
Network: true
*/

//set up the network admin menu
//network administrator will be able to determine which theme needs to be retired and by which date

if ( is_network_admin() ) {
	require_once('rtp-menu-init.php');
}

//add a lightbox to logged in user in the theme view and dashboard view that the theme will be retired on what date, and suggest user to switch to another theme by the date otherwise 
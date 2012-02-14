<?php

add_action('network_admin_menu', 
'register_retire_theme_plugin_page' );

function register_retire_theme_plugin_page() {
	add_submenu_page( 'themes.php', 'Retire Theme', 'Retire Theme', 'manage_options', 'retire-theme-plugin', 'retire_theme_plugin_callback' );
}

function retire_theme_plugin_callback() {
	require_once('rtp-wrap.php');
}

function rtp_settings_api_init() {
	add_settings_field('rtp-setting', 'RTP Setting', 'rtp_setting_callback', 'theme');
	
	register_setting('theme', 'rtp-setting');
}


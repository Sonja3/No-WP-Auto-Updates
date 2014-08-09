<?php
/**
 * Plugin Name: No-WP-Auto-Updates
 * Plugin URI: http://zosi.me/
 * Description: Disables background updates 
 * Version: 0.1.0
 * Author: Sonja London
 * Author URI: http://sonjalondon.com/
 * License: GPLv2 or later
 */

add_filter( 'automatic_updater_disabled', '__return_true' );

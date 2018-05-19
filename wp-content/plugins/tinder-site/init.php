<?php
/**
* Plugin Name: Fiona Howard
* Plugin URI: http://www.tghp.co.uk
* Description: Additional site functionality
* Version: 1.0
* Author: TGHP
* Author URI: http://www.tghp.co.uk
* License: GPL12
*/

if (!defined('ABSPATH')) {
	die();
}
/**
 * Abort plugin loading if WordPress is upgrading
 */
if (defined('WP_INSTALLING') && WP_INSTALLING)
	return;

/**
 * Location constants
 */
define('FH_PLUGIN_FILE', 'fionahoward-site/init.php');
define('FH_PLUGIN_DIR', dirname(__FILE__));

/**
 * Custom meta boxes
 */
include_once('inc/cmb.php');

/**
 * Custom post types
 */
include_once('inc/cpt.php');

/**
 * Site Options
 */
include_once('inc/site-options.php');
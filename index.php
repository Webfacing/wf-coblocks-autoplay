<?php
namespace WebFacing\CoBlocks;

/**
 * CoBlocks Post Carousel Block Autoplay for WordPress
 *
 * @package         	WebFacingCoBlocksPostCarouselBlockAutoplayPlugin
 * @author          	knutsp <knut@sparhell.no>
 * @copyright       	© 2021 Knut Sparhell, Nettvendt/IT-ing Sparhell, Norway
 * @license         	GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:     	WebFacing - Autoplay for Post Carousel Block from GoDaddy® CoBlocks
 * Description:     	🕸️ By WebFacing. Adds autoplay - and pause on hovering - to the Post Carousel Block from GoDaddy® CoBlocks plugin.
 * Plugin URI:      	https://webfacing.eu/
 * Version:         	1.0
 * Author:          	Knut Sparhell
 * Author URI:      	https://profiles.wordpress.org/knutsp/
 * License:         	GPL v2 or later
 * License URI:     	https://www.gnu.org/licenses/gpl-2.0.html
 * Requires PHP:    	7.3
 * Requires at least:   5.0
 * Tested up to:    	5.7.2
 * Domain Path:     	/languages
 * Text Domain:     	wf-coblocks-autoplay
 */

/**
 * Exit if accessed directly
 */
if ( ! \class_exists( '\WP' ) ) {
	exit;
}

/**
 * Define a non-magic constant inside the namespace pointing to this main plugin file
 */
const PLUGIN_FILE = __FILE__;

require_once 'includes/Plugin.php';

Plugin::load();

if ( \is_admin() ) {
	Plugin::admin_load();
}

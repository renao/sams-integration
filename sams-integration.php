<?php
/**
 * Plugin Name:       SAMS Integration
 * Description:       Displays fixtures and rankings from a SAMS results system
 * Requires at least: 5.6
 * Requires PHP:      7.2
 * Version:           1.2.0
 * Author:            René Siemer
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       sams-integration
 *
 * @package SAMSPlugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( file_exists( __DIR__ . '/build/lib/autoload.php' ) ) {

    require_once __DIR__ . '/build/lib/autoload.php';
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function samsintegration_initialize_blocktypes() {
	register_block_type( __DIR__ . '/build/blocks/sams-ranking' );
	register_block_type( __DIR__ . '/build/blocks/sams-fixtures' );
}
add_action( 'init', 'samsintegration_initialize_blocktypes' );

function sams_integration_get_template( $template_name ) {
    $theme_template = locate_template( 'sams-integration/' . $template_name );
    
    if ( ! empty( $theme_template ) ) {
        // if exists: use template from theme
        return $theme_template;
    } else {
        // fallback on default template
        return plugin_dir_path( __FILE__ ) . 'build/php/templates/' . $template_name;
    }
}


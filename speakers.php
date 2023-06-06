<?php
/**
 * Plugin Name:       Speakers
 * Description:       Example dynamic block scaffolded with Create Block tool.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Michał Jarecki
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       speakers
 *
 * @package           create-block
 */


 require_once plugin_dir_path( __FILE__ ) . 'includes/custom-posts.php';

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_speakers_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_speakers_block_init' );
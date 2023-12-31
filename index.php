<?
/**
 * Plugin Name: WordCamp Germany 2023 Demo
 * Description: Demo plugin for WordCamp Germany 2023
 * Author: Fabian Kägy
 * Author URI: https://fabian-kaegy.com
 * Version: 1.0.0
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wordcamp-germany-2023-demo
 * Domain Path: /languages
 *
 * @package WordCamp\Germany\Demo
 */

namespace WordCamp\Germany\Demo;

/**
 * enqueue block editor scripts and styles
 */
function enqueue_block_editor_assets() {

	$asset_info = require __DIR__ . '/build/index.asset.php';

	wp_enqueue_script(
		'wordcamp-germany-2023-demo-editor-script',
		plugins_url( 'build/index.js', __FILE__ ),
		$asset_info['dependencies'],
		$asset_info['version']
	);
}

add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets' );

require_once __DIR__ . '/includes/post-types.php';

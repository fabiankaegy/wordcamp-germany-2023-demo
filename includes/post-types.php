<?php
/**
 * Post Types
 *
 * Setup various custom post types.
 *
 * @package WordCamp\Germany\Demo
 */

namespace WordCamp\Germany\Demo;

/**
 * Register team post types.
 *
 * @return void
 */
function register_team_post_types() {
	register_post_type(
		'team',
		[
			'public'    => true,
			'labels'    => [
				'name'          => __( 'Team Members', 'wordcamp-germany-2023-demo' ),
				'menu_name'     => __( 'Team', 'wordcamp-germany-2023-demo' ),
				'singular_name' => __( 'Team', 'wordcamp-germany-2023-demo' ),
				'add_new'       => __( 'Add Person', 'wordcamp-germany-2023-demo' ),
				'edit_item'     => __( 'Edit Person', 'wordcamp-germany-2023-demo' ),
			],
			'supports'  => [
				'title',
				'editor',
				'thumbnail',
				'custom-fields',
				'page-attributes',
			],
			'menu_icon' => 'dashicons-groups',
		]
	);
}

add_action( 'init', __NAMESPACE__ . '\register_team_post_types' );

/**
 * Register position taxonomy.
 *
 * @return void
 */
function register_position_taxonomy() {
	register_taxonomy(
		'position',
		'team',
		[
			'public'            => true,
			'labels'            => [
				'name'          => __( 'Positions', 'wordcamp-germany-2023-demo' ),
				'menu_name'     => __( 'Positions', 'wordcamp-germany-2023-demo' ),
				'singular_name' => __( 'Position', 'wordcamp-germany-2023-demo' ),
				'add_new'       => __( 'Add Position', 'wordcamp-germany-2023-demo' ),
				'edit_item'     => __( 'Edit Position', 'wordcamp-germany-2023-demo' ),
			],
			'show_admin_column' => true,
			'hierarchical'      => false,
		]
	);
}

add_action( 'init', __NAMESPACE__ . '\register_position_taxonomy' );

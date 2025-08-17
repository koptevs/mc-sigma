<?php


/**
 * MC Sigma functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage MC Sigma
 * @since MC Sigma 1.0
 */

function mc_sigma_block_assets()
{
	// Enqueue theme stylesheet for the front-end.
	wp_enqueue_style('mc-sigma-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), wp_get_theme()->get('Version'));
	wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3');
	// wp_enqueue_script('jquery-sticky', get_stylesheet_directory_uri() . '/assets/js/jquery-sticky.js', array('jquery'));
	wp_enqueue_script('mc-sigma-main-script', get_stylesheet_directory_uri() . '/assets/js/theme.js', array('jquery'), '1.0.0', true);
}

// add_action('wp_enqueue_scripts', 'mc_sigma_block_assets');
add_action('enqueue_block_assets', 'mc_sigma_block_assets');

// register own theme pattern

function mc_sigma_register_pattern_category()
{

	$patterns = array();

	$block_pattern_categories = array(
		'mc-sigma' => array('label' => __('MC Sigma', 'mc-sigma'))
	);

	$block_pattern_categories = apply_filters('mc_sigma_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}

add_action( 'init', 'mc_sigma_register_pattern_category');



// https://make.wordpress.org/core/2022/10/10/filters-for-theme-json-data/
// https://developer.wordpress.org/news/2023/07/how-to-modify-theme-json-data-using-server-side-filters/
function mc_sigma_filter_theme_json_theme($theme_json)
{
	$new_data = array(
		'version' => 2,
		'settings' => array(
			'color' => array(
				'text' => false,
				'palette' => array( /* New palette */
					array(
						'slug' => 'base',
						'color' => 'white',
						'name' => __('Base', 'mc-sigma'),
					),
					array(
						'slug' => 'contrast',
						'color' => 'black',
						'name' => __('Contrast', 'mc-sigma'),
					),
				),
			),
		),
	);

	return $theme_json->update_with($new_data);
}
// For the filter to work properly, it must be run after theme setup.
function mc_sigma_apply_theme_json_theme_filters()
{
	// Check to make sure the theme has a theme.json file.
	if (wp_theme_has_theme_json()) {
		add_filter('wp_theme_json_data_theme', 'mc_sigma_filter_theme_json_theme');
	}
}
// add_action('after_setup_theme', 'mc_sigma_apply_theme_json_theme_filters');
<?php
/**
 * Rocker Radio Core Register CPT
 *
 * @package    Rr_Core_Functionality
 * @subpackage Rr_Core_Functionality\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

/**
 * Register Bands Custom Post Type
 *
 * @since 0.1.0
 *
 * @uses register_extended_post_type()
 * @link https://github.com/johnbillion/extended-cpts/wiki
 *
 * @return void
 */
function rr_core_register_band() {
  load_plugin_textdomain(
    'band',
    false,
    dirname( plugin_basename( __FILE__ ) ) . '/languages/'
  );

  $labels = array(
    'name'               => __( 'Bands', 'rr-core' ),
    'singular_name'      => __( 'Band', 'rr-core' ),
    'menu_name'          => __( 'Bands', 'rr-core' ),
    'add_new'            => _x( 'Add New', 'Band', 'rr-core' ),
    'add_new_item'       => __( 'Add New Band', 'rr-core' ),
    'edit_item'          => __( 'Edit Band', 'rr-core' ),
    'new_item'           => __( 'New Band', 'rr-core' ),
    'view_item'          => __( 'View Band', 'rr-core' ),
    'search_items'       => __( 'Search Bands', 'rr-core' ),
    'not_found'          => __( 'No bands found', 'rr-core' ),
    'not_found_in_trash' => __( 'No bands found in Trash', 'rr-core' ),
    'parent_item_colon'  => __( 'Parent Band:', 'rr-core' ),
    'all_items'          => __( 'All Bands', 'rr-core' ),
 	);

  $options = array(
		'show_in_feed' => true,
  	'labels'       => $labels,
  	'menu_icon'    => 'dashicons-album',
    'admin_cols' => array(
      'featured_image'   => array(
				'title'          => __( 'Photo', 'rr-core' ),
				'featured_image' => 'thumbnail',
        'width'          => 80,
      	'height'         => 80,
			),
      'title'             => array(
        'title'           => __( 'Band', 'rr-core' ),
      ),
      'twitter_name'    => array(
      	'title'    => __( 'Twitter', 'rr-core' ),
      	'meta_key' => 'twitter_name',
      ),
		),
  );

  if( function_exists( 'register_extended_post_type' ) ) {
    register_extended_post_type( 'band', $options );
  }
}
add_action( 'plugins_loaded', 'rr_core_register_band' );

/**
 * Register Stations Custom Post Type
 *
 * @since 0.1.0
 *
 * @uses register_extended_post_type()
 * @link https://github.com/johnbillion/extended-cpts/wiki
 *
 * @return void
 */
function rr_core_register_station() {
  load_plugin_textdomain(
    'station',
    false,
    dirname( plugin_basename( __FILE__ ) ) . '/languages/'
  );

  $labels = array(
    'name'               => __( 'Stations', 'rr-core' ),
    'singular_name'      => __( 'Station', 'rr-core' ),
    'menu_name'          => __( 'Radio Stations', 'rr-core' ),
    'add_new'            => _x( 'Add New', 'Station', 'rr-core' ),
    'add_new_item'       => __( 'Add New Station', 'rr-core' ),
    'edit_item'          => __( 'Edit Station', 'rr-core' ),
    'new_item'           => __( 'New Station', 'rr-core' ),
    'view_item'          => __( 'View Station', 'rr-core' ),
    'search_items'       => __( 'Search Stations', 'rr-core' ),
    'not_found'          => __( 'No stations found', 'rr-core' ),
    'not_found_in_trash' => __( 'No stations found in Trash', 'rr-core' ),
    'parent_item_colon'  => __( 'Parent Station:', 'rr-core' ),
    'all_items'          => __( 'All Stations', 'rr-core' ),
 	);

  $options = array(
		'show_in_feed' => true,
  	'labels'       => $labels,
  	'menu_icon'    => 'dashicons-format-audio',
    'admin_cols' => array(
      'featured_image'   => array(
				'title'          => __( 'Logo', 'rr-core' ),
				'featured_image' => 'thumbnail',
        'width'          => 80,
      	'height'         => 80,
			),
      'title'             => array(
        'title'           => __( 'Station', 'rr-core' ),
      ),
      'twitter_name'    => array(
      	'title'    => __( 'Twitter', 'rr-core' ),
      	'meta_key' => 'twitter_name',
      ),
      'website'    => array(
      	'title'    => __( 'Website', 'rr-core' ),
      	'meta_key' => 'website',
      ),
		),
  );

  if( function_exists( 'register_extended_post_type' ) ) {
    register_extended_post_type( 'station', $options );
  }
}
add_action( 'plugins_loaded', 'rr_core_register_station' );

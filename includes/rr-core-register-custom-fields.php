<?php
/**
 * Rocker Radio Core Register Custom Fields
 *
 * @package    Rr_Core_Functionality
 * @subpackage Rr_Core_Functionality\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

/**
 * Modify Featured Image Metabox Labels
 *
 * @since 0.1.0
 *
 * @uses post_type_labels_{$post_type} filter hook
 * @link https://developer.wordpress.org/reference/hooks/post_type_labels_post_type/
 *
 * @param {array} $labels
 */
function rr_core_modify_featured_image_labels( $labels ) {
  $labels->featured_image = __( 'Band Photo', 'rr-core' );
  $labels->set_featured_image = __( 'Set Band Photo', 'rr-core' );
  $labels->remove_featured_image = __( 'Remove Band Photo', 'rr-core' );
  $labels->use_featured_image = __( 'Use as Band Photo', 'rr-core' );

  return $labels;
}
add_filter( 'post_type_labels_band', 'rr_core_modify_featured_image_labels', 10, 1 );

/**
 * Modify Featured Image Metabox Labels
 *
 * @since 0.1.0
 *
 * @uses post_type_labels_{$post_type} filter hook
 * @link https://developer.wordpress.org/reference/hooks/post_type_labels_post_type/
 *
 * @param {array} $labels
 */
function rr_core_modify_station_featured_image_labels( $labels ) {
  $labels->featured_image = __( 'Station Logo', 'rr-core' );
  $labels->set_featured_image = __( 'Set Station Logo', 'rr-core' );
  $labels->remove_featured_image = __( 'Remove Station Logo', 'rr-core' );
  $labels->use_featured_image = __( 'Use as Station Logo', 'rr-core' );

  return $labels;
}
add_filter( 'post_type_labels_station', 'rr_core_modify_station_featured_image_labels', 10, 1 );

/**
 * Resize Admin Column Width
 *
 * @uses admin_enqueue_scripts action hook
 * @link https://developer.wordpress.org/reference/hooks/admin_enqueue_scripts/
 *
 * @since 0.1.0
 */
function rr_core_post_listing_column_resize() { ?>
    <style type="text/css">
        .edit-php .fixed .column-featured_image {
            width: 90px !important;
        }
    </style>
<?php }
add_action( 'admin_enqueue_scripts', 'rr_core_post_listing_column_resize' );

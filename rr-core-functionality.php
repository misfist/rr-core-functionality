<?php
/**
 * Plugin Name:     Rocker Radio Core Functionality
 * Plugin URI:      https://github.com/misfist/rr-core-functionality
 * Description:     Core functionality
 * Author:          misfist
 * Author URI:      https://github.com/misfist
 * Text Domain:     rr-core
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Rr_Core_Functionality
 */


if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Plugin Directory
 *
 * @since 0.1.0
 */
define( 'RR_CORE_DIR', dirname( __FILE__ ) );

/**
 * Required Files
 */
require_once( 'includes/lib/extended-cpts/extended-cpts.php' );

require_once( 'includes/rr-core-register-cpt.php' );
require_once( 'includes/rr-core-register-custom-fields.php' );

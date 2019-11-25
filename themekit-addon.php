<?php
/**
 * Plugin Name: ThemoKit Theme Addons
 * Description: Addons for theme
 * Version:     1.0
 *
 * @package     ThemoKit Theme Addons
 * Author:      ThemoKit
 * Text Domain: themokit-theme-addons
 */

define( 'THEMO_KIT_THEME_ADDONS_PATH', realpath( plugin_dir_path( __FILE__ ) ) . DIRECTORY_SEPARATOR );
define( 'THEMO_KIT_THEME_ADDONS_URL', plugin_dir_url( __FILE__ ) );
define( 'THEMO_KIT_THEME_ADDONS_VERSION', '1.0' );
require THEMO_KIT_THEME_ADDONS_PATH . 'init.php';

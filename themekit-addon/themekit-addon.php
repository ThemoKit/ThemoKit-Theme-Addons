<?php
/**
 * Plugin Name: ThemeKit Theme Addons
 * Description: Addons for theme
 * Version:     1.0
 *
 * @package     ThemeKit Theme Addons
 * Author:      ThemeKit
 * Text Domain: themekit-theme-addons
 */

define( 'THEME_KIT_THEME_ADDONS_PATH', realpath( plugin_dir_path( __FILE__ ) ) . DIRECTORY_SEPARATOR );
define( 'THEME_KIT_THEME_ADDONS_URL', plugin_dir_url( __FILE__ ) );
define( 'THEME_KIT_THEME_ADDONS_VERSION', '1.0' );
require THEME_KIT_THEME_ADDONS_PATH . 'init.php';

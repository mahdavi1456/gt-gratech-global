<?php
/*
 * Plugin Name: افزونه گلوبال گراتک
 * Version: 1
 * Plugin URI: http://gratech.ir/
 * Description: پیش نیازهای هر وبسایت که تو گراتک تولید شده :)
 * Author: Seyed Morteza Mahdavi
 * Author URI: http://sm-mahdavi.ir/
 * Text Domain: gratech
 */
defined('ABSPATH') || exit('No Direct Access!!');
define('GT_GRATECH_USER_DIR', plugin_dir_path(__FILE__));
define('GT_GRATECH_USER_URL', plugin_dir_URL(__FILE__));
define('GT_GRATECH_USER_CSS_URL', trailingslashit(GT_GRATECH_USER_URL . 'assets/css'));
define('GT_GRATECH_USER_JS_URL', trailingslashit(GT_GRATECH_USER_URL . 'assets/js'));
define('GT_GRATECH_USER_IMG_URL', trailingslashit(GT_GRATECH_USER_URL . 'assets/img'));
define('GT_GRATECH_USER_INC', trailingslashit(GT_GRATECH_USER_DIR . 'include'));
define('GT_GRATECH_USER_ADMIN_DIR', trailingslashit(GT_GRATECH_USER_DIR . 'admin'));
require_once( ABSPATH . 'wp-includes/pluggable.php');


/* functions */
include GT_GRATECH_USER_INC . "functions.php";

function gt_gratech_add_admin_scripts() {
	wp_enqueue_style('style', GT_GRATECH_USER_CSS_URL . 'style.css');
}
add_action('admin_enqueue_scripts', 'gt_gratech_add_admin_scripts');
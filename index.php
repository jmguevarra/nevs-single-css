<?php
/**
 * @package Nevs Single Css
 * @version 1.0.0
 */

/*
Plugin Name: Nevs Single Css
Plugin URI: https://github.com/jmguevarra/nevs-single-css
Description: It's a simple plugin in every post/page to customize styling. 
Version: 1.0.0
Author: Jaime I. Guevarra Jr.
Author URI: https://github.com/jmguevarra/
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: nevs-single-css
*/

if(  !defined('WPINC') ){
    die;
}

//define variables
define('PLUGIN_DIR', dirname(__FILE__));
define('PLUGIN_VERSION', '1.0.1');
define('TEXT_DOMAIN', 'nevs-single-css');


//require files to load
require_once 'includes/metabox.php';
require_once 'includes/enqueue-scripts.php';
require_once 'includes/shortcode.php';

 
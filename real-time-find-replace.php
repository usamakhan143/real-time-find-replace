<?php

/**
 * Plugin Name: Real Time Find Replace
 * Description: Just another text replacement plugin. Simple but flexible.
 * Version: 1.0.0
 * Author: Usama Khan
 * Author URI: https://github.com/usamakhan143
 * Requires PHP: 7.4
 * Text Domain: translate-rtfr-plugin
 */


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if(!class_exists('RealTimeFindReplace')){


    class RealTimeFindReplace {


        public function __construct()
        {
            // Define a constant to initialize the plugin path.
			define('RTFR_PLUGIN_PATH', plugin_dir_path(__FILE__));

			// Define a constant to initialize the frontend plugin path.
			define('RTFR_PLUGIN_URL', plugin_dir_url(__FILE__));

			// Call the packages that you are using in the plugin to enhance the functionality.
			require_once(RTFR_PLUGIN_PATH . '/vendor/autoload.php');        
        }


        public function initialize_rtfr()
		{
			include_once(RTFR_PLUGIN_PATH . '/includes/utilities.php');
			include_once(RTFR_PLUGIN_PATH . '/includes/option-page.php');
			include_once(RTFR_PLUGIN_PATH . '/includes/real-time-find-replace.php');
		}

    }


} else {
	die('This class is already exist!');
}


$RealTimeFindReplace = new RealTimeFindReplace();
$RealTimeFindReplace->initialize_rtfr();
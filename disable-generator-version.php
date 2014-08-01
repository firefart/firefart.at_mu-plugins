<?php

/**
 * Plugin Name: firefart.at - Disable generator version disclosure
 * Plugin URI: https://www.firefart.at
 * Description: Disables the generator version disclosure
 * Version: 1.0.0
 * Author: Christian Mehlmauer
 * Author URI: https://www.firefart.at
 */

add_filter('the_generator', '__return_empty_string');

?>

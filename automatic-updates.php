<?php

/**
 * Plugin Name: firefart.at - Automatic Updates
 * Plugin URI: https://www.firefart.at
 * Description: Enables automatic theme and plugin updates
 * Version: 1.0.0
 * Author: Christian Mehlmauer
 * Author URI: https://www.firefart.at
 */

add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
add_filter( 'allow_minor_auto_core_updates', '__return_true' );
add_filter( 'allow_major_auto_core_updates', '__return_true' );

?>


<?php

/**
 * Plugin Name: firefart.at - Disable XML-RPC
 * Plugin URI: https://www.firefart.at
 * Description: Disables the XML-RPC Interface
 * Version: 1.0.0
 * Author: Christian Mehlmauer
 * Author URI: https://www.firefart.at
 */

add_filter( 'xmlrpc_enabled', '__return_false' );

?>

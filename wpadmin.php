<?php

/**
 * Plugin Name: firefart.at - Different URL for wp-admin
 * Plugin URI: https://www.firefart.at
 * Description: Use a different domain for administration. You need to set the admin domain in <code>wp-config</code> via <code>ADMIN_HOST</code>
 * Version: 1.0.0
 * Author: Christian Mehlmauer
 * Author URI: https://www.firefart.at
 */

function _different_wpadmin_url( $url )
{
    $host = $_SERVER['SERVER_NAME'];
    $admin_host = defined( 'ADMIN_HOST' ) ? ADMIN_HOST : 'undefined';
    if ($host == $admin_host)
    {
        $domain = parse_url( $url, PHP_URL_HOST );
        return str_replace( $domain, $host, $url);
    }
    return $url;
}
add_filter( 'plugins_url', '_different_wpadmin_url', 1 );
add_filter( 'content_url', '_different_wpadmin_url', 1 );
add_filter( 'site_url', '_different_wpadmin_url', 1 );
add_filter( 'home_url', '_different_wpadmin_url', 1 );

?>

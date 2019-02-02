<?php

/*
Plugin Name: Wordpress Automated Migration Plugin
Plugin URI: https://github.com/dorumrr/wp-automated-migration
Description: Worries-free migration plugin for wordpress sites. Used when moving your website, it will automatically update the new address in the database.
Version: 1.3
Author: Doru Moraru
Author URI: http://doru-moraru.com
*/

defined( 'ABSPATH' ) or die;

/**
 *
 * @todo: v1.*: http & https compatible
 * @todo: v2: Make it work with Wordpress subfolder instalations too
 *
 */

$host = "http://" . $_SERVER['HTTP_HOST'];
if (get_option('siteurl') != $host || get_option('home') != $host) {
    update_option('siteurl', $host);
    update_option('home', $host);
    header("Refresh:0");
}

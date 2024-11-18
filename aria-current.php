<?php

/**
 * Plugin Name: Add Aria Current Links
 * Plugin URI: https://github.com/Silver0034/aria-current
 * Version: 1.0.0
 * Description: Automatically add aria-current="page" to image blocks linking to the current page.
 * Author: Jacob Lodes
 * Author URI: https://jlodes.com/
 * Text Domain: jl-aria-current
 * Requires at least: 5.0.0
 * Requires PHP: 5.3.0
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) exit('No direct script access allowed');

// Add aria-current="page" to blocks linking to the current page.
function jl_add_aria_current_to_block($block_content)
{
    $url_no_slash = untrailingslashit(home_url(add_query_arg(array(), $GLOBALS['wp']->request)));
    $url_slash = trailingslashit($url_no_slash);

    $pattern = '/href="(?:' . preg_quote($url_no_slash, '/') . '|' . preg_quote($url_slash, '/') . ')"/';

    $block_content = preg_replace($pattern, '$0 aria-current="page"', $block_content);

    return $block_content;
}
add_filter('render_block', 'jl_add_aria_current_to_block');

// On admin page load, check for updates.
if (is_admin()) {
    require_once plugin_dir_path(__FILE__) . 'class-updater.php';
    JLAriaCurrent\Updater::get_instance();
}

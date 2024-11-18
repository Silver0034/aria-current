<?php

/**
 * Plugin Name: Add Aria Current Links
 * Plugin URI: https://github.com/Silver0034/aria-current
 * Version: 1.0.0
 * Description: Automatically add aria-current="page" to image blocks linking to the current page.
 * Author: Jacob Lodes
 * Author URI: https://jlodes.com/
 * Text Domain: jl-aria-current
 * Requires at least: 6.6.2
 * Requires PHP: 8.0
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) exit('No direct script access allowed');

// Add aria-current="page" to image blocks linking to the current page.
function
jl_add_aria_current_to_block($block_content)
{
    // If the block does not have an href attribute, return the block content as is.
    if (strpos($block_content, 'href=') === false) return $block_content;

    // Get the current page URL
    $url_no_slash = untrailingslashit(home_url(add_query_arg(array(), $GLOBALS['wp']->request)));
    $url_slash = trailingslashit($url_no_slash);

    // Stop if no link to the current page is found.
    if (
        strpos($block_content, "href=\"$url_slash\"") === false
        && strpos($block_content, "href=\"$url_no_slash\"") === false
    )  return $block_content;

    // Add aria-current="page" to the <a> tag in the block content.
    $block_content = str_replace(
        ["href=\"$url_slash\"", "href=\"$url_no_slash\""],
        ["href=\"$url_slash\" aria-current=\"page\"", "href=\"$url_no_slash\" aria-current=\"page\""],
        $block_content
    );

    return $block_content;
}
add_filter('render_block', 'jl_add_aria_current_to_block');

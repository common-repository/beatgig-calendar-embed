<?php

/**
 * Plugin Name: Beatgig Calendar Embed
 * Description: Embed your venue's BeatGig calendar and application button on your website.
 * Version: 0.2
 * Text Domain: beatgig
 * Author: Beatgig
 * Author URI: https://beatgig.com
 */

function generate_beatgig_embed_code($atts)
{
    $embedstring = "";
    $atts = array_merge(array(
        'embed' => 'venue-calendar',
        'venue-slug' => ''
    ), $atts);

    if (isset($atts['embed']) && $atts['embed'] === 'apply-button') {
        $embedstring = "<script async src=\"https://beatgig.com/embed/apply-button\"";
    } else {
        $embedstring = "<script async src=\"https://beatgig.com/iframe/venue-calendar\"";
    }

    foreach ($atts as $key => $value) {
        $embedstring .= " data-beatgig-" . $key . "=\"" . $value . "\"";
    }

    $embedstring .= "></script>";

    return $embedstring;
}

add_shortcode('beatgig', 'generate_beatgig_embed_code');

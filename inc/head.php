<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('mcsigma_google_fonts_preconnect')) {
    function mcsigma_google_fonts_preconnect()
    {
        ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <?php
    }
}

add_action('wp_head', 'mcsigma_google_fonts_preconnect', 5);
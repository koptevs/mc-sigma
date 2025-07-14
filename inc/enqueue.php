<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('mcsigma_scripts')) {
    /**
     * Load theme's JavaScript and CSS sources.
     */
    function mcsigma_scripts()
    {
        wp_register_style('mcsigma-google-font-ibm-plex-sans', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');
        wp_register_style('mcsigma-google-font-inter', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
        wp_register_style('main-css', get_theme_file_uri('/css/styles.css'), [], time() . 'all');
        wp_enqueue_style('mcsigma-google-font-ibm-plex-sans');
        wp_enqueue_style('mcsigma-google-font-inter');
        wp_enqueue_style('main-css');
        //
        wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), [], time(), true);
        wp_enqueue_script('alpine-js', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', [], '1.0', true);
        // wp_enqueue_style(
        //     'google-font-roboto',
        //     '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'
        // );
        // wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        //
        //
        // wp_enqueue_style('extra-css', get_theme_file_uri('/build/index.css'), [], time() . 'all');
        // wp_localize_script('main-js', 'siteData', [
        //     'root_url' => get_site_url()
        // ]);
    }
}


add_action('wp_enqueue_scripts', 'mcsigma_scripts');
<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Variables

// includes directory.
$inc_dir = 'inc';

// Array of files to include.
$includes = array(
    '/enqueue.php',
    '/head.php'
);

// Includes

// Include files.
foreach ($includes as $file) {
    require_once get_theme_file_path($inc_dir . $file);
}

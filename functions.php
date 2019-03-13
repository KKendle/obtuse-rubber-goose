<?php

function disableCache() {
    $is_cacheDisabled = true;

    if($is_cacheDisabled) {
        return microtime();
    }
    else {
        return "1.0";
    }
}

function add_theme_scripts() {
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), null, disableCache());
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

?>
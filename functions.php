<?php

/**
 * Load Stylesheets and Scripts in
 *
 * @return string
 */
function loadStyleScript()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('themeStyle', get_template_directory_uri() . '/css/themeStyle.css');

    wp_enqueue_script('jqueryNew', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array('jquery'), 3.5, true);
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_script('bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), 4.5, true);

    wp_enqueue_style('FullPageSliderCSS', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.css');
    wp_enqueue_script('fullPageSlider', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.js', array('jquery'), 2.7, true);
    
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array('jquery'), 1.1, true);
}

add_action('init', 'loadStyleScript');


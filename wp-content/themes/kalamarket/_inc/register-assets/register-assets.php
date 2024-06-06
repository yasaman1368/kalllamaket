<?php
add_action('wp_enqueue_scripts', 'kalamarket_wp_enqueue_scripts');

/**
 * Fires when scripts and styles are enqueued.
 *
 */
function kalamarket_wp_enqueue_scripts(): void
{
    //font:
    wp_enqueue_style('font-awesome', get_template_directory_uri() . "/assets/css/vendor/font-awesome.min.css");
    wp_enqueue_style('materialdesignicons', get_template_directory_uri() . "/assets/css/vendor/materialdesignicons.css");
    //plugin
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/assets/css/vendor/bootstrap.css");
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . "/assets/css/vendor/owl.carousel.min.css");
    wp_enqueue_style('nice-select', get_template_directory_uri() . "/assets/css/vendor/nice-select.css");
    wp_enqueue_style('jqZoom', get_template_directory_uri() . "/assets/css/vendor/jquery.jqZoom.css");
    wp_enqueue_style('sweetalert2', get_template_directory_uri() . "/assets/css/vendor/sweetalert2.min.css");
    //in archive
    wp_enqueue_style('noUISlider', get_template_directory_uri() . "/assets/css/vendor/noUISlider.min.css");
    // main css:

    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . "/assets/css/responsive.css");


    //js:
    // file js:
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.2.1.min.js', ['jquery'], null, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/vendor/bootstrap.js', ['jquery'], null, true);
    // plugin js:
    wp_enqueue_script('owl.carousel-js', get_template_directory_uri() . '/assets/js/vendor/owl.carousel.min.js', ['jquery'], null, true);
    wp_enqueue_script('jquery.countdown-js', get_template_directory_uri() . '/assets/js/vendor/jquery.countdown.js', ['jquery'], null, true);
    wp_enqueue_script('jquery.nice-select-js', get_template_directory_uri() . '/assets/js/vendor/jquery.nice-select.min.js', ['jquery'], null, true);
    wp_enqueue_script('jquery.jqZoom-js', get_template_directory_uri() . '/assets/js/vendor/jquery.jqZoom.js', ['jquery'], null, true);
    wp_enqueue_script('sweetalert2.all', get_template_directory_uri() . '/assets/js/vendor/sweetalert2.all.min.js', ['jquery'], null, true);
    //in archive


    wp_enqueue_script('nouislider', get_template_directory_uri() . '/assets/js/vendor/nouislider.min.js', ['jquery'], null, true);
    wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() . '/assets/js/vendor/theia-sticky-sidebar.min.js', ['jquery'], null, true);
    wp_enqueue_script('wNumb', get_template_directory_uri() . '/assets/js/vendor/wNumb.js', ['jquery'], null, true);

    // main js:
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true);
}

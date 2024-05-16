<?php
function filter_wp_title($title)
{

    $site_description = get_bloginfo('description');
    $filtered_title = $title . get_bloginfo('name');
    $filtered_title .= (!empty($site_description) && (is_home() || is_front_page())) ? ' | ' . $site_description : '';
    return $filtered_title;
}

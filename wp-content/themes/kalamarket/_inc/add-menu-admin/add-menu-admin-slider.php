<?php
add_action('admin_menu', 'kmk_setting_theme_admin_menu');

/**
 * Fires before the administration menu loads in the admin.
 *
 * @param string $context Empty context.
 */
function kmk_setting_theme_admin_menu(string $context): void
{
    add_menu_page('تنظیمات قالب کالا', 'قالب کالا مارکت', 'manage_options', 'kmk_theme_menu_setting', 'kmk_render_html_setting_callback', '', 1);
    add_submenu_page('kmk_theme_menu_setting',
        'تنظیمات اسلایدر',
        'تنظیمات اسلایدر',
        'manage_options',
        'kmk_slider_submenu',
        'kmk_render_slider_html',
        1);

add_submenu_page('kmk_theme_menu_setting',
    'تنظیمات عکس ها',
    'تنظیمات عکس ها',
    'manage_options',
    'kmk_images_submenu',
    'kmk_render_images_html',
    2);
};


include_once get_template_directory().'/_inc/add-menu-admin/_admin-menu-slider.php';





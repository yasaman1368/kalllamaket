<?php include_once '_inc/register-assets/register-assets.php'; ?>
<?php include_once '_inc/utilities/utilities.php'; ?>
<?php include_once '_inc/add-menu-admin/add-menu-admin-slider.php'; ?>
<?php
// woocommerce setup
add_action('after_setup_theme', 'kmkt_theme_setup');
function kmkt_theme_setup()
{
    add_theme_support('woocommerce');
}

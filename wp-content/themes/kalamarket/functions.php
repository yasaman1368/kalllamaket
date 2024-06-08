<?php include_once '_inc/register-assets/register-assets.php'; ?>
<?php include_once '_inc/utilities/utilities.php'; ?>
<?php include_once '_inc/add-menu-admin/add-menu-admin-slider.php'; ?>
<?php
// remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
//remove_action('woocommerce_before_main_content', 'WC_Structured_Data::generate_website_data()');
//remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);


// woocommerce setup
add_action('after_setup_theme', 'kmkt_theme_setup');
function kmkt_theme_setup()
{
    add_theme_support('woocommerce');
}
//post per page in archive product 
add_filter('pre_get_posts', 'modify_movie_query');

function modify_movie_query($wp_query)
{
    if ($wp_query->query_vars['post_type'] != 'product') return;
    $wp_query->query_vars['posts_per_page'] = 1;
}

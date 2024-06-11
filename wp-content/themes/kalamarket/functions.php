<?php include_once '_inc/register-assets/register-assets.php'; ?>
<?php include_once '_inc/utilities/utilities.php'; ?>
<?php include_once '_inc/add-menu-admin/add-menu-admin-slider.php'; ?>
<?php include_once '_inc/meta-box/meta-box.php'; ?>
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
// add_filter('pre_get_posts', 'modify_movie_query');

// function modify_movie_query($wp_query)
// {
//     if ($wp_query->query_vars['post_type'] != 'product') return;
//     $wp_query->query_vars['posts_per_page'] = 1;
// }
?>
<!-- <div class="summary entry-summary"> -->
<?php
/**
 * Hook: woocommerce_single_product_summary.
 *
 * @hooked woocommerce_single_product_summary - 5
 * @hooked woocommerce_template_single_rating - 10
 * @hooked woocommerce_template_single_price - 10
 * @hooked woocommerce_template_single_excerpt - 20
 * @hooked woocommerce_template_single_add_to_cart - 30
 * @hooked woocommerce_template_single_meta - 40
 * @hooked woocommerce_template_single_sharing - 50
 * @hooked WC_Structured_Data::generate_product_data() - 60
 */
// do_action('woocommerce_single_product_summary');
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart')
?>
<!-- </div> -->
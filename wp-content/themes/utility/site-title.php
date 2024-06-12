<?php
function filter_wp_title($title)
{

    $site_description = get_bloginfo('description');
    $filtered_title = $title . get_bloginfo('name');
    $filtered_title .= (!empty($site_description) && (is_home() || is_front_page())) ? ' | ' . $site_description : '';
    return $filtered_title;
}
//  woocommerce get and   show products attributes

global $product;
// if (get_post_type($post) === 'product' && !is_a($product, 'WC_Product')) {
//     $product = wc_get_product(get_the_id()); // Get the WC_Product Object
// }

// $product_attributes = $product->get_attributes(); // Get the product attributes

// // Output
// $manufacturer_id = $product_attributes['pa_manufacturer']['options']['0']; // returns the ID of the term
// $manufacturer_name = get_term($manufacturer_id)->name; // gets the term name of the term from the ID
// echo '<p class="manufacturer">' . $manufacturer_name . '</p>'; // display the actual term name

if (get_post_type($post) === 'product' && !is_a($product, 'WC_Product')) {
    $product = wc_get_product(get_the_id()); // Get the WC_Product Object
}

$product_attributes = $product->get_attributes(); // Get the product attributes

// Raw output
echo '<pre>';
print_r($product_attributes);
echo '</pre>';

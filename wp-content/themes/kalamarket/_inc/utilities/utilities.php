<?php
function kmkt_the_cat_thumbnail($cat_iD)
{
    $thumnail_term_meta_id = get_term_meta($cat_iD, 'thumbnail_id', true);
    return wp_get_attachment_url($thumnail_term_meta_id);
}
function kmkt_the_attachment_image($image_id)
{

    return wp_get_attachment_url($image_id);
}
// function kmkt_discount_price($regular_price = '', $sale_price = '')
// {
//     $discont =  intval((($regular_price - $sale_price) / $regular_price) * 100);
//     echo '<pre>';
//     var_dump($discont);
//     echo '</pre>';
//     echo '</br>';
//     return ceil($discont);
// }
function kmkt_discount_price($regular_price, $sale_price)
{
    $regular_price = intval($regular_price);
    $sale_price = intval($sale_price);
    return ceil((($regular_price - $sale_price) / $regular_price) * 100);
}

<?php
function kmkt_the_cat_thumbnail($cat_iD)
{
    $thumnail_term_meta_id = get_term_meta($cat_iD, 'thumbnail_id', true);
    return wp_get_attachment_url($thumnail_term_meta_id);
}

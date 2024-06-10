<?php
add_action('add_meta_boxes','kmkt_brand_meta_box');
function kmkt_brand_meta_box()
{
    add_meta_box('kmkt_brand_product','برند محصول','kmkt_render_brand_meta_box_html','','normal','high');

}
function kmkt_render_brand_meta_box_html()
{
    ?>
    <label for="p-bran">نام برند
        <input type="text" name="p-brand" id="p-brand">
    </label>
<?php
}
add_action('save_post','save_brand_meta_box');
function save_brand_meta_box()
{
    if(!empty($_POST['p-name'])){
        
    }
}
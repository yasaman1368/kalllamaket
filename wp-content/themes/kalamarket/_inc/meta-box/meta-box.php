<?php
global $post;
add_action('add_meta_boxes','kmkt_brand_meta_box');
function kmkt_brand_meta_box()
{
    add_meta_box('kmkt_brand_product','برند محصول','kmkt_render_brand_meta_box_html','','normal','high');

}
function kmkt_render_brand_meta_box_html()
{
    global$post;
wp_nonce_field('kmkt_p_brand_nonce','kmkt_p_brand_nonces');
    ?>
    <label for="p-bran">نام برند
        <input type="text" name="p-brand" id="p-brand" value="<?php echo get_post_meta($post->ID,'_p_brand',true)?>">
    </label>

<?php
}
add_action('save_post','save_brand_meta_box');
function save_brand_meta_box()
{
    global $post_id;
    $kmkt_p_brand_nonces=$_POST['kmkt_p_brand_nonces'];
    if(!wp_verify_nonce($kmkt_p_brand_nonces,'kmkt_p_brand_nonce'))return;

    if (
        defined('DOING_AUTOSAVE') && DOING_AUTOSAVE
    ) {

        return $post_id;
    }
    if (!current_user_can('edit_post', $post_id)) {

        return $post_id;
    };

    global $post;
    if(!empty($_POST['p-brand'])){
        $p_brand=sanitize_text_field($_POST['p-brand']);
update_post_meta($post->ID,'_p_brand',$p_brand,);
    }
}
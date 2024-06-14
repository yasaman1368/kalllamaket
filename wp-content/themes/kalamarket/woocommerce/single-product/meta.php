<?php

/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if (!defined('ABSPATH')) {
	exit;
}

global $product;
?>
<div class="product_meta product-config-wrapper">
	<div class="product-directory">
		<ul>
			<?php do_action('woocommerce_product_meta_start'); ?>

			<?php if (wc_product_sku_enabled() && !empty($product->get_sku()) && ($product->get_sku() || $product->is_type('variable'))) : ?>

				<span class="sku_wrapper"><?php esc_html_e('SKU:', 'woocommerce'); ?> <span class="sku"><?php echo ($sku = $product->get_sku()) ? $sku : esc_html__('N/A', 'woocommerce'); ?></span></span>

			<?php endif; ?>

			<?php echo wc_get_product_category_list($product->get_id(), ', ', '<li><span class="posted_in"><span><i class=""fa fa-archive"></i></span>' . _n('Category:', 'Categories:', count($product->get_category_ids()), 'woocommerce') . ' ', '</span></li>'); ?>

			<?php echo wc_get_product_tag_list($product->get_id(), ', ', '<li><span class="tagged_as"><i class="fa fa-tags"></i></span>' . _n('Tag:', 'Tags:', count($product->get_tag_ids()), 'woocommerce') . ' ', '</li>'); ?>

			<?php if (!empty(get_post_meta($product->get_id(), '_p_brand', true))) : ?>
				<li>
					<span class="p-brand">
						برند:
					</span>

					<a href="#" class="product-link product-tag-title"><?php echo get_post_meta($product->get_id(), '_p_brand', true) ?></a>
				</li>
			<?php endif ?>
			<?php do_action('woocommerce_product_meta_end'); ?>
		</ul>
	</div>
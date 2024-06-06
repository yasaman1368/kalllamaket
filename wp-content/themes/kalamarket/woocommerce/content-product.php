<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>

<div class="col-lg-3 col-md-3 col-xs-12 order-1 d-block mb-3">
	<section class="product-box product product-type-simple">
		<div class="thumb">
			<a href="<?php echo get_the_permalink($product->get_id()); ?>" class="d-block">
				<div class="promotion-badge">فروش ویژه</div>
				<div class="product-rate">
					<i class="fa fa-star active"></i>
					<i class="fa fa-star active"></i>
					<i class="fa fa-star active"></i>
					<i class="fa fa-star active"></i>
					<i class="fa fa-star"></i>
				</div>
				<div class="discount-d">
					<?php if ($product->is_on_sale()) : ?>
						<span><?php echo kmkt_discount_price($product->regular_price, $product->sale_price); ?></span>
					<?php endif ?>
				</div>
				<?php echo get_the_post_thumbnail($product->get_id(), '', ['class' => 'img-fluid']) ?>
			</a>
		</div>
		<div class="title">
			<a href="<?php echo get_the_permalink($product->get_id()); ?>"><?php echo $product->name ?></a>
		</div>
		<div class="price">

			<span class="amount"><?php echo !empty($product->regular_price) ? $product->regular_price . '<span>تومان</span>' : '<span style="color:red;">برای استعلام قیمت با پشتیبانی تماس بگیرید</span>' ?>

			</span>
		</div>
	</section>
</div>
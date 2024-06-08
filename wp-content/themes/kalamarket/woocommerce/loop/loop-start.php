<?php

/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
<div class="col-lg-9 col-md-9 col-xs-12 pl">
	<div class="shop-archive-content mt-3 d-block">
		<div class="archive-header">
			<h2 class="archive-header-title"><?php woocommerce_page_title()
												?></h2>
			<div class="sort-tabs mt-0 d-inline-block pr">
				<h4>مرتب‌سازی بر اساس :</h4>
			</div>
			<div class="catalog-wc">
				<?php
				do_action('woocommerce_before_shop_loop');
				?>

			</div>
		</div>
		<div class="product-items">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="Most-visited" role="tabpanel" aria-labelledby="Most-visited-tab">
					<div class="row">
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
			<h2 class="archive-header-title"><?php;
												?></h2>
			<div class="sort-tabs mt-0 d-inline-block pr">
				<h4>مرتب‌سازی بر اساس :</h4>
			</div>
			<div class="nav-sort-tabs-res">
				<ul class="nav sort-tabs-options" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="Most-visited-tab" data-toggle="tab" href="#Most-visited" role="tab" aria-controls="Most-visited" aria-selected="true">پربازدیدترین</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="Bestselling-tab" data-toggle="tab" href="#Bestselling" role="tab" aria-controls="Bestselling" aria-selected="false">پرفروش‌ترین‌</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="Most-Popular-tab" data-toggle="tab" href="#Most-Popular" role="tab" aria-controls="Most-Popular" aria-selected="false">محبوب‌ترین</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="newest-tab" data-toggle="tab" href="#newest" role="tab" aria-controls="newest" aria-selected="false">جدیدترین</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="cheapest-tab" data-toggle="tab" href="#cheapest" role="tab" aria-controls="cheapest" aria-selected="false">ارزان‌ترین</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="most-expensive-tab" data-toggle="tab" href="#most-expensive" role="tab" aria-controls="most-expensive" aria-selected="false">گران‌ترین</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="product-items">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="Most-visited" role="tabpanel" aria-labelledby="Most-visited-tab">
					<div class="row">
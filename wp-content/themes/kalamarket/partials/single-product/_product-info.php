<div class="col-lg-7 col-xs-12 pl mt-5 d-block">
    <section class="product-info">
        <div class="product-headline">
            <?php

            use Automattic\WooCommerce\StoreApi\Routes\V1\AI\Product;

            the_title('<h1 class="product_title entry-title product-title">', '</h1>');
            ?>

            <div class="product-guaranteed text-success">
                12
                <span>فروش موفق</span>
            </div>
        </div>
        <div class="product-attributes">
            <div class="product-config">
                <span class="product-title-en">Samsung Galaxy Note 10 Dual SIM 256GB Mobile
                    Phone</span>
                <div class="product-rate">
                    <?php wc_get_template('single-product/rating.php') ?>
                </div>
            </div>

        </div>
        <div class="product-config-wrapper">
            <div class="product-directory">
                <ul>
                    <li>
                        <?php
                        global $product;
                        $terms = get_the_terms($product->ID, 'product_cat');
                        if (!empty($terms)) :
                        ?>
                            <span>
                                <i class="fa fa-archive"></i> دسته:
                            </span>
                        <?php
                        endif;
                        $terms = get_the_terms($product->ID, 'product_cat');
                        if (is_array($terms) && !is_wp_error($terms)) {
                            $i = count($terms);
                            $x = 0;
                            $cama = ',';
                            foreach ($terms as $term) {
                                $x++;
                                if ($x == $i) {
                                    $cama = '';
                                };
                                $term_link = get_term_link($term, 'product_cat');
                                if (is_wp_error($term_link)) continue;
                                echo ' <a href="' . $term_link . '" class="product-link product-cat-title">' . $term->name . '</a>' . $cama;
                            }
                        }

                        ?>




                    </li>
                    <li>
                        <?php
                        $terms = get_the_terms($product->ID, 'product_tag');
                        if (!empty($terms)) :
                        ?>
                            <span>
                                <i class="fa fa-tags"></i> برچسب:
                            </span>
                        <?php
                        endif;
                        if (is_array($terms) && !is_wp_error($terms)) {
                            $i = count($terms);
                            $x = 0;
                            $cama = ',';
                            foreach ($terms as $term) {
                                $x++;
                                if ($x == $i) {
                                    $cama = '';
                                };

                                $term_link = get_term_link($term, 'product_tag');
                                if (is_wp_error($term_link)) continue;
                                echo ' <a href="' . $term_link . '" class="product-link product-tag-title">' . $term->name . '</a>' . $cama . '';
                            }
                        }
                        ?>


                    </li>
                    <li>
                        <span>
                            برند:
                        </span>

                        <a href="#" class="product-link product-tag-title"><?php echo get_post_meta(get_the_ID(), '_p_brand', true) ?></a>
                    </li>
                </ul>
            </div>
            <div class="col=lg-6 col-md-6 col-xs-12 pr">
                <div class="product-variants">
                    <span>رنگ بندی: </span>
                    <ul class="js-product-variants">
                        <li class="ui-variant">
                            <label for="#" class="ui-variant-color">
                                <span class="ui-variant-shape" style="background-color: #56abef"></span>
                                <input type="radio" value="4" name="color" id="variant" class="js-variant-selector" checked="">
                                <span class="ui-variant-check"></span>
                            </label>
                        </li>
                        <li class="ui-variant">
                            <label for="#" class="ui-variant-color">
                                <span class="ui-variant-shape" style="background-color: #a97eca"></span>
                                <input type="radio" value="4" name="color" id="variant" class="js-variant-selector">
                                <span class="ui-variant-check"></span>
                            </label>
                        </li>
                        <li class="ui-variant">
                            <label for="#" class="ui-variant-color">
                                <span class="ui-variant-shape" style="background-color: #4e4c4c"></span>
                                <input type="radio" value="4" name="color" id="variant" class="js-variant-selector">
                                <span class="ui-variant-check"></span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="product-params pt-3">
                    <ul data-title="ویژگی‌های محصول">
                        <li>
                            <span>سیستم عامل: </span>
                            <span>Android</span>
                        </li>
                        <li>
                            <span>شبکه های ارتباطی: </span>
                            <span>2G، 3G، 4G</span>
                        </li>
                        <li>
                            <span>مقدار RAM: </span>
                            <span> 8 گیگابایت</span>
                        </li>
                        <li>
                            <span>ویژگی‌های خاص: </span>
                            <span> مقاوم در برابر آب
                                دارای بدنه مقاوم
                                فبلت
                                مجهز به حس‌گر اثرانگشت
                                مناسب عکاسی سلفی
                                مناسب بازی
                                دارای قلم
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="product-price-survey-question">
                    آیا قیمت مناسب‌تری سراغ دارید؟
                    <div class="answers">
                        <a href="#" class="product-price-survery-answer price-yes btn btn-secondary">بلی</a>
                        <a href="#" class="product-price-survery-answer price-no btn btn-secondary">خیر</a>
                    </div>
                </div>
            </div>
            <div class="col=lg-6 col-md-6 col-xs-12 pr">
                <div class="product-seller-info">
                    <div class="seller-info-changable">
                        <div class="product-seller-row vendor">
                            <span class="title"> فروشنده:</span>
                            <a href="#" class="product-name">دیجی اسمارت</a>
                        </div>
                        <div class="product-seller-row guarantee">
                            <span class="title"> گارانتی:</span>
                            <a href="#" class="product-name">۱۸ ماهه دیجی اسمارت</a>
                        </div>
                        <div class="product-seller-row price">
                            <span class="title"> قیمت:</span>
                            <a href="#" class="product-name">

                                <?php global $product; ?>
                                <span class="<?php echo esc_attr(apply_filters('woocommerce_product_price_class', 'price amount'));
                                                ?> "><?php
                                                        //  echo $product->get_sale_price();
                                                        if ($product->is_type('variable')) { ?>
                                        <del class="regular-price">
                                            <span class="amount"><?php
                                                                    echo !empty($product->get_variation_regular_price('max')) ? $product->get_variation_regular_price() : ''
                                                                    ?></span></del>
                                        <span class="amount">__
                                            <?php
                                                            echo !empty($product->get_variation_sale_price('min')) ? $product->get_variation_sale_price('min') : ''
                                            ?>
                                        </span>

                                    <?php
                                                        } else {

                                    ?>
                                        <del class="regular-price">
                                            <span class="amount"><?php echo !empty($product->regular_price) ? $product->regular_price . '<span>تومان</span>' : '' ?>
                                        </del>
                                        <span class="amount">__<?php echo !empty($product->sale_price) ? $product->sale_price . '<span>تومان</span>' : '<span style="color:red;">برای استعلام قیمت با پشتیبانی تماس بگیرید</span>' ?>

                                        <?php } ?>

                                        <span>تومان</span>
                                        </span>

                            </a>
                        </div>

                        <form class="cart" action="http://tahlanji.ir/product/%d8%af%d9%88%d8%b1%d8%a8%db%8c%d9%86-%d8%b3%d8%a7%d9%85%d8%b3%d9%88%d9%86%da%af/" method="post" enctype="multipart/form-data">
                            <div class="product-seller-row guarantee">
                                <span class="title mt-3"> تعداد:</span>
                                <div class="quantity pl">
                                    <input type="number" id="quantity_66674be41d1cb" class="input-text qty text" name="quantity" value="1" aria-label="Product quantity" size="4" min="1" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                    <div class="quantity-nav">
                                        <div class="quantity-button quantity-up">+</div>
                                        <div class="quantity-button quantity-down">-</div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="add-to-cart" value="22" class="single_add_to_cart_button button alt p-add-to-card-btn">افزودن به سبد خرید</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
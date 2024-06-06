<div class="col-lg-9 col-md-9 col-xs-12 pr order-1 d-block">
    <div class="slider-widget-products">
        <div class="widget widget-product card">
            <header class="card-header">
                <?php
                $name_slider_1 = get_option('_name_slider_1');
                ?>
                <span class="title-one"><?php echo isset($name_slider_1) ? $name_slider_1 : 'نام دسته بندی محصول خود را تنظیم کنید.' ?></span>


                <h3 class="card-title"></h3>
            </header>
            <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                        <?php $args = [
                            'limit' => 5,
                            'category' => 'camera',
                            'orderby' => 'date'
                        ];
                        $products = wc_get_products($args);
                        ?>
                        <?php $i = 0;
                        foreach ($products as $product) : $i++;
                        ?>
                            <div class="<?php echo $i < 5 ? 'owl-item active' : 'owl-item' ?>" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="<?php the_permalink($product->get_id()) ?>" class="d-block hover-img-link" data-toggle="modal" data-target="#exampleModal">
                                        <?php echo get_the_post_thumbnail($product->get_id(), '', ['class' => 'img-fluid']) ?>

                                        <span class="icon-view">
                                            <strong><i class="fa fa-eye"></i></strong>
                                        </span>
                                    </a>
                                    <h2 class="post-title">
                                        <a href="<?php the_permalink($product->get_id()) ?>">
                                            <?php echo $product->name ?> </a>
                                    </h2>
                                    <div class="price">
                                        <?php if ($product->is_on_sale()) : ?>
                                            <del><span><?php echo $product->regular_price ?><span>تومان</span></span></del>
                                            <ins><span><?php echo $product->sale_price ?><span>تومان</span></span></ins>
                                        <?php else : ?>
                                            <ins><span><?php echo $product->sale_price ?><span>تومان</span></span></ins>
                                        <?php endif ?>
                                    </div>
                                    <div class="actions">
                                        <ul>
                                            <li class="action-item like">
                                                <button class="btn btn-light add-product-wishes" type="submit">
                                                    <i class="fa fa-heart-o"></i>
                                                </button>
                                            </li>
                                            <li class="action-item compare">
                                                <button class="btn btn-light btn-compare" type="submit">
                                                    <i class="fa fa-random"></i>
                                                </button>
                                            </li>
                                            <li class="action-item add-to-cart">
                                                <button class="btn btn-light btn-add-to-cart" type="submit">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-lg-6 pr">
                            <div class="thum-img">
                                <div class="widget widget-product card mb-0">
                                    <div class="product-carousel-more owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage" style="transform: translate3d(1652px, 0px, 0px); transition: all 0.25s ease 0s; width: 2065px;">
                                                <div class="owl-item" style="width: 403px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#" class="d-block hover-img-link" data-toggle="modal" data-target="#exampleModal">
                                                            <div class="zoom-box">
                                                                <img src="<?php echo  get_template_directory_uri() ?>/assets/images/slider-product/computer-appel.jpg" width="200" height="150" />
                                                                <div class="discount-m">
                                                                    <span>10%</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 403px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#" class="d-block hover-img-link" data-toggle="modal" data-target="#exampleModal">
                                                            <div class="zoom-box">
                                                                <img src="<?php echo  get_template_directory_uri() ?>/assets/images/slider-product/computer-appel.jpg" width="200" height="150" />
                                                                <div class="discount-m">
                                                                    <span>10%</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 403px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#" class="d-block hover-img-link" data-toggle="modal" data-target="#exampleModal">
                                                            <div class="zoom-box">
                                                                <img src="<?php echo  get_template_directory_uri() ?>/assets/images/slider-product/computer-appel.jpg" width="200" height="150" />
                                                                <div class="discount-m">
                                                                    <span>10%</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 403px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#" class="d-block hover-img-link" data-toggle="modal" data-target="#exampleModal">
                                                            <div class="zoom-box">
                                                                <img src="<?php echo  get_template_directory_uri() ?>/assets/images/slider-product/computer-appel.jpg" width="200" height="150" />
                                                                <div class="discount-m">
                                                                    <span>10%</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 403px; margin-left: 10px;">
                                                    <div class="item">
                                                        <a href="#" class="d-block hover-img-link" data-toggle="modal" data-target="#exampleModal">
                                                            <div class="zoom-box">
                                                                <img src="<?php echo  get_template_directory_uri() ?>/assets/images/slider-product/computer-appel.jpg" width="200" height="150" />
                                                                <div class="discount-m">
                                                                    <span>10%</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pr">
                            <div class="product-box-modal-title">
                                <h2 class="post-title">
                                    <a href="#">
                                        کامپیوتر همه کاره 27 اینچی اپل مدل iMac CTO - A 2019 با صفحه نمایش
                                        رتینا 5K
                                    </a>
                                </h2>
                            </div>
                            <div class="small-gutters align-items-stretch mb-4">
                                <div class="col-lg-12 pr-0 pl-0 pr">
                                    <div class="product-box-modal_price mt-12 mt-auto">
                                        <div class="price">
                                            <del><span>۳,۵۰۰,۰۰۰<span>تومان</span></span></del>
                                            <ins><span>۲,۰۰۰,۰۰۰<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="small-gutters">
                                    <div class="col-lg-12 mb-8 pr-0 pl-0 pr mt-3">
                                        <div class="product-box_action">
                                            <button class="btn btn-gradient-primary add-to-cart" type="submit">افزودن به سبد</button>
                                            <a href="#" class="btn btn-outline-dark btn-block">مشاهده
                                                جزئیات</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
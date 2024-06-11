<div class="col-lg-5 col-xs-12 pr d-block" style="padding: 0;">
    <section class="product-gallery">
        <div class="gallery">
            <div class="gallery-item">
                <div>
                    <ul class="gallery-actions">
                        <li>
                            <a href="#" class="btn-option add-product-wishes">
                                <i class="mdi mdi-heart-outline"></i>
                                <span>محبوب</span>
                            </a>
                        </li>
                        <li class="option-social">
                            <a href="#" class="btn-option btn-option-social" data-toggle="modal" data-target="#option-social">
                                <i class="mdi mdi-share"></i>
                                <span>اشتراک</span>
                            </a>
                            <!-- Modal-option-social -->
                            <div class="modal fade" id="option-social" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">اشتراک گذاری
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="title">با استفاده از روش‌های زیر
                                                می‌توانید این صفحه را با دوستان خود به
                                                اشتراک بگذارید.</div>
                                            <form action="#" class="email-sharing">
                                                <h5 class="share-title">ارسال از طریق ایمیل
                                                </h5>
                                                <div class="input-group-sharing">
                                                    <input type="email" class="share-email-address form-control" id="share-email">
                                                    <button class="btn-send-email btn btn-primary" type="submit">ارسال ایمیل</button>
                                                </div>
                                            </form>
                                            <div class="share-options">
                                                <div class="share-social-buttons text-center">
                                                    <a href="#" class="share-social share-social-twitter">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                    <a href="#" class="share-social share-social-facebook">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                    <a href="#" class="share-social share-social-whatsapp">
                                                        <i class="mdi mdi-whatsapp"></i>
                                                    </a>
                                                    <a href="#" class="share-social share-social-email-outline">
                                                        <i class="mdi mdi-email-outline"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="form-share-col">
                                                <input class="ui-url-field" type="url" value="https://www.digikala.com/product/dkp-1672478" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="option-alarm">
                            <a href="#" class="btn-option btn-option-alarm" data-toggle="modal" data-target="#btn-option-alarm">
                                <i class="mdi mdi-bell-outline"></i>
                                <span>اطلاع‌رسانی</span>
                            </a>
                            <!-- Modal-option-alarm -->
                            <div class="modal fade" id="btn-option-alarm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">به من اطلاع بده
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-notification-title">از طریق:
                                            </div>
                                            <div class="form-auth-row">
                                                <label for="#" class="ui-checkbox mt-1">
                                                    <input type="checkbox" value="1" name="login" id="remember">
                                                    <span class="ui-checkbox-check"></span>
                                                </label>
                                                <label for="remember" class="remember-me mr-0">ایمیل به
                                                    info@digismart.com</label>
                                            </div>
                                            <div class="form-auth-row">
                                                <label for="#" class="ui-checkbox mt-1">
                                                    <input type="checkbox" value="1" name="login" id="remember">
                                                    <span class="ui-checkbox-check"></span>
                                                </label>
                                                <label for="remember" class="remember-me mr-0">پیامک به
                                                    *******0991</label>
                                            </div>
                                            <div class="form-auth-row">
                                                <label for="#" class="ui-checkbox mt-1">
                                                    <input type="checkbox" value="1" name="login" id="remember">
                                                    <span class="ui-checkbox-check"></span>
                                                </label>
                                                <label for="remember" class="remember-me mr-0">سیستم پیام شخصی
                                                    دیجی اسمارت</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary ml-2">ثبت</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">بازگشت</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="Three-dimensional">
                            <a href="#" class="btn-option btn-Three-dimensional" data-toggle="modal" data-target="#more-product">
                                <i class="mdi mdi-more"></i>
                                <span>نمایش بیشتر</span>
                            </a>
                            <div class="modal fade" id="more-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered more-product" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div id="custom-events">

                                                <?php
                                                global $product;

                                                $images =  $product->get_gallery_image_ids();

                                                if (is_array($images) && !empty($images)) :
                                                    foreach ($images as $image) :

                                                ?>

                                                        <a href="<?php echo kmkt_the_attachment_image($image) ?>">
                                                            <img src="<?php echo kmkt_the_attachment_image($image) ?>">
                                                        </a>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="Three-dimensional">
                            <a href="product-comparison.html" class="btn-option btn-compare">
                                <i class="mdi mdi-compare"></i>
                                <span>مقایسه</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-img">
                    <a href="#">
                        <?php global $product;

                        ?>
                        <div class="zoomWrapper" style="height: 411px; width: 411px;"><img class="zoom-img" id="img-product-zoom" src="<?php echo get_the_post_thumbnail_url($product->get_id()); ?>" data-zoom-image="<?php echo get_the_post_thumbnail_url($product->get_id()); ?>" width="411" style="position: absolute;"></div>
                    </a>
                    <div id="gallery_01f" style="width:420px;float:right;"><a href="#">
                        </a>
                        <ul class="gallery-items owl-carousel owl-theme owl-rtl owl-loaded owl-drag" id="gallery-slider">





                            <?php $i = 0;

                            $images = $product->get_gallery_image_ids();
                            if (is_array($images) && !empty($images)) :
                            ?>
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(111px, 0px, 0px); transition: all 0s ease 0s; width: 554px;">
                                        <?php
                                        foreach ($images as $image) :
                                        ?>


                                            <div class=" owl-item<?php echo $i = 0 ? '' : ' active' ?>" style="width: 100.727px; margin-left: 10px;">
                                                <li class="item">
                                                    <a href="#" class="elevatezoom-gallery <?php echo $i = 0 ? '' : ' active' ?>" data-update="" data-image="<?php echo wp_get_attachment_url($image) ?>" data-zoom-image="<?php echo wp_get_attachment_url($image) ?>">
                                                        <img src="<?php echo wp_get_attachment_url($image) ?>" width="100"></a>
                                                </li>
                                            </div>
                                        <?php $i++;
                                        endforeach ?>

                                    </div>
                                </div>

                                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-right"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="fa fa-angle-left"></i></button></div>
                                <div class="owl-dots disabled"></div>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
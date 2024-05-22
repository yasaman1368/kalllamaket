<nav class="header-main-nav">
    <div class="d-block">
        <div class="align-items-center">
            <ul class="menu-ul mega-menu-level-one">
                <?php $args = [
                    'taxonomy' => 'product_cat',
                    'orderby' => 'id',
                    'order' => 'ASC',
                    'parent' => 0,
                    'hide_empty'      => false,
                    'exclude' => '15'
                ] ?>
                <?php $main_array_cats = get_categories($args) ?>
                <?php if ($main_array_cats) : ?>
                    <?php foreach ($main_array_cats as $main_array_cat) : ?>
                        <li id="nav-menu-item" class="menu-item nav-overlay">
                            <a href="<?php echo get_category_link($main_array_cat->cat_ID) ?>" class="current-link-menu"><span><img src="<?php echo kmkt_the_cat_thumbnail($main_array_cat->cat_ID) ?>" class="cat-png-icon" alt="">
                                </span>
                                <?php echo $main_array_cat->name ?> </a>
                            <ul class="sub-menu is-mega-menu mega-menu-level-two">
                                <!-- submenu query -->
                                <?php $args = [
                                    'taxonomy' => 'product_cat',
                                    'orderby' => 'id',
                                    'order' => 'ASC',
                                    'hide_empty' => false,
                                    'parent' => $main_array_cat->cat_ID,
                                ];
                                $sub_array_cats = get_categories($args);

                                if ($sub_array_cats) :
                                    foreach ($sub_array_cats as $sub_array_cat) :
                                ?>

                                        <li class="menu-mega-item menu-item-type-mega-menu">
                                            <a href="<?php echo get_category_link($sub_array_cat->cat_ID) ?>" class="mega-menu-link">
                                                <?php echo $sub_array_cat->name ?>
                                            </a>
                                            <ul class="sub-menu mega-menu-level-three">
                                                <?php $args = [
                                                    'taxonomy' => 'product_cat',
                                                    'hide_empty' => false,
                                                    'parent' => $sub_array_cat->cat_ID,
                                                    'orderby' => 'id',
                                                    'order' => 'ASC'

                                                ];
                                                $super_sub_cats = get_categories($args);
                                                if ($super_sub_cats) :
                                                    foreach ($super_sub_cats as $super_sub_cat) :
                                                ?>
                                                        <li class="menu-mega-item-three">
                                                            <a href="<?php echo get_category_link($super_sub_cat->cat_ID) ?>">
                                                                <?php echo $super_sub_cat->name ?> </a>
                                                        </li>
                                                    <?php endforeach ?>
                                                <?php else : ?>
                                                    <div class="alert alert-warning">سوپر ساب منو خود را وارد نمایید</div>
                                                <?php endif ?>
                                                <!-- <li class="menu-mega-item-three">
                                                    <a href="#">
                                                        سامسونگ
                                                    </a>
                                                </li>
                                                <li class="menu-mega-item-three">
                                                    <a href="#">
                                                        نوکیا
                                                    </a>
                                                </li>
                                                <li class="menu-mega-item-three">
                                                    <a href="#">
                                                        ایسوس
                                                    </a>
                                                </li>
                                                <li class="menu-mega-item-three">
                                                    <a href="#">
                                                        هواوی
                                                    </a>
                                                </li>
                                                <li class="menu-mega-item-three">
                                                    <a href="#">
                                                        الجی
                                                    </a>
                                                </li>
                                                <li class="menu-mega-item-three">
                                                    <a href="#">
                                                        اچ تی سی
                                                    </a>
                                                </li>
                                                <li class="menu-mega-item-three">
                                                    <a href="#">
                                                        سونی
                                                    </a>
                                                </li> -->
                                            </ul>
                                        </li>
                                    <?php endforeach ?>
                                <?php else : ?>
                                    <div class="alert alert-warning">زیر دسته خود را مشخص کنید.</div>
                                <?php endif  ?>
                                <!-- <li class="menu-mega-item menu-item-type-mega-menu">
                                    <a href="#" class="mega-menu-link">
                                        تبلت و کتابخوان
                                    </a>
                                    <ul class="sub-menu mega-menu-level-three">
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                اپل
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                سامسونگ
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                نوکیا
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                ایسوس
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                ایسر
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                الجی
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                اچ تی سی
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-mega-item menu-item-type-mega-menu">
                                    <a href="#" class="mega-menu-link">
                                        کامپیوتر و تجهیزات جانبی
                                    </a>
                                    <ul class="sub-menu mega-menu-level-three">
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                هارد دیسک
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                ماوس
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                کیبورد
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                نمایشگر
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                پردازنده
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                مادربرد
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                کارت گرافیک
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-mega-item menu-item-type-mega-menu">
                                    <a href="#" class="mega-menu-link">
                                        دوربین
                                    </a>
                                    <ul class="sub-menu mega-menu-level-three">
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                دوربین عکاسی
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                دوربین فیلم برداری
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                تلسکوپ
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                میکروسکوپ و ذره بین
                                            </a>
                                        </li>
                                        <li class="menu-mega-item-three">
                                            <a href="#">
                                                لوازم جانبی عکاسی و فیلم برداری
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="bg-image">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/menu-main/digital.png" alt="">
                                </li>
                            </ul>
                        </li>

                    <?php endforeach ?>
                <?php else : ?>
                    <div class="alert alert-warning">دسته بندی محصولات خود را وارد کنید!</div>
                <?php endif ?>
                <!-- <li id="nav-menu-item" class="menu-item nav-overlay" data-id="190">
                    <a href="#" class="current-link-menu">
                        آرایشی و بهداشتی
                    </a>
                    <ul class="sub-menu is-mega-menu mega-menu-level-two">
                        <li class="menu-mega-item menu-item-type-mega-menu">
                            <a href="#" class="mega-menu-link">
                                لوازم آرایشی
                            </a>
                            <ul class="sub-menu mega-menu-level-three">
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        آرایش چشم و ابرو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        آرایش لب
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        آرایش صورت
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        تجهیزات جانبی آرایش
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        سنگ پا و زیبایی ناخن
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        مواد آرایش مو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        کرم و مراقبت پوست
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        شامپو و مراقبت مو
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu">
                            <a href="#" class="mega-menu-link">
                                لوازم شخصی برقی
                            </a>
                            <ul class="sub-menu mega-menu-level-three">
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ماشین اصلاح صورت
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ماشین اصلاح سر
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        سشوار
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        اصلاح بدن آقایان
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        اصلاح موی گوش، بینی و ابرو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        برس پاک سازی
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        اتو مو و حالت دهنده
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu">
                            <a href="#" class="mega-menu-link">
                                لوازم بهداشتی
                            </a>
                            <ul class="sub-menu mega-menu-level-three">
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        کرم و مراقبت پوست
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        شامپو و مراقبت مو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        بهداشت دهان و دندان
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        بهداشت و مراقبت بدن
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ضد تعریق
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu">
                            <a href="#" class="mega-menu-link">
                                ابزار سلامت و طبی
                            </a>
                            <ul class="sub-menu mega-menu-level-three">
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        مچ بند و ساعت هوشمند
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ترازو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        کالای خواب و استراحت طبی
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        تست قند خون
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        تب سنج
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        فشارسنج
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ابزار مراقبت پا
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        نمایشگر ضربان قلب
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="bg-image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/menu-main/cosmetic.png" alt="">
                        </li>
                    </ul>
                </li>
                <li id="nav-menu-item" class="menu-item">
                    <a href="#" class="current-link-menu">
                        ابزار و اداری
                    </a>
                </li>
                <li id="nav-menu-item" class="menu-item">
                    <a href="#" class="current-link-menu">
                        مد و پوشاک
                    </a>
                </li>
                <li id="nav-menu-item" class="menu-item nav-overlay">
                    <a href="#" class="current-link-menu">
                        خانه و آشپزخانه
                    </a>
                    <ul class="sub-menu is-mega-menu mega-menu-level-two">
                        <li class="menu-mega-item menu-item-type-mega-menu">
                            <a href="#" class="mega-menu-link">
                                لوازم آرایشی
                            </a>
                            <ul class="sub-menu mega-menu-level-three">
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        آرایش چشم و ابرو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        آرایش لب
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        آرایش صورت
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        تجهیزات جانبی آرایش
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        سنگ پا و زیبایی ناخن
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        مواد آرایش مو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        کرم و مراقبت پوست
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        شامپو و مراقبت مو
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu">
                            <a href="#" class="mega-menu-link">
                                لوازم شخصی برقی
                            </a>
                            <ul class="sub-menu mega-menu-level-three">
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ماشین اصلاح صورت
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ماشین اصلاح سر
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        سشوار
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        اصلاح بدن آقایان
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        اصلاح موی گوش، بینی و ابرو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        برس پاک سازی
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        اتو مو و حالت دهنده
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu">
                            <a href="#" class="mega-menu-link">
                                لوازم بهداشتی
                            </a>
                            <ul class="sub-menu mega-menu-level-three">
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        کرم و مراقبت پوست
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        شامپو و مراقبت مو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        بهداشت دهان و دندان
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        بهداشت و مراقبت بدن
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ضد تعریق
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu">
                            <a href="#" class="mega-menu-link">
                                ابزار سلامت و طبی
                            </a>
                            <ul class="sub-menu mega-menu-level-three">
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        مچ بند و ساعت هوشمند
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ترازو
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        کالای خواب و استراحت طبی
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        تست قند خون
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        تب سنج
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        فشارسنج
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        ابزار مراقبت پا
                                    </a>
                                </li>
                                <li class="menu-mega-item-three">
                                    <a href="#">
                                        نمایشگر ضربان قلب
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="bg-image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/menu-main/kitchen.png" alt="">
                        </li>
                    </ul>
                </li>
                <li id="nav-menu-item" class="menu-item nav-overlay">
                    <a href="#" class="current-link-menu">
                        لوازم تحریر و هنر
                    </a>
                    <ul class="sub-menu is-mega-menu-small">
                        <li class="menu-mega-item menu-item-type-mega-menu item-small">
                            <a href="#" class="mega-menu-link">
                                کتاب و مجله
                            </a>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu item-small">
                            <a href="#" class="mega-menu-link">
                                کتاب صوتی
                            </a>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu item-small">
                            <a href="#" class="mega-menu-link">
                                محتوای آموزشی
                            </a>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu item-small">
                            <a href="#" class="mega-menu-link">
                                لوازم تحریر
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <ul class="sub-menu is-mega-menu-small-three">
                                <li class="menu-mega-item menu-item-type-mega-menu item-small-three">
                                    <a href="#">
                                        چراغ مطالعه
                                    </a>
                                </li>
                                <li class="menu-mega-item menu-item-type-mega-menu item-small-three">
                                    <a href="#">
                                        نوشت افزار
                                    </a>
                                </li>
                                <li class="menu-mega-item menu-item-type-mega-menu item-small-three">
                                    <a href="#">
                                        دفتر و کاغذ
                                    </a>
                                </li>
                                <li class="menu-mega-item menu-item-type-mega-menu item-small-three">
                                    <a href="#">
                                        میز تحریر
                                    </a>
                                </li>
                                <li class="menu-mega-item menu-item-type-mega-menu item-small-three">
                                    <a href="#">
                                        البوم عکس
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-mega-item menu-item-type-mega-menu item-small">
                            <a href="#" class="mega-menu-link">
                                نرم افزار
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="nav-menu-item" class="menu-item">
                    <a href="#" class="current-link-menu">
                        کودک و نوزاد
                    </a>
                </li> -->
                <!-- header cart basket -->
                <li class="divider-space-card d-block">
                    <?php get_template_part('partials/nav/header-cart-basket')
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
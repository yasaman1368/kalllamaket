<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>

<body>
    <!-- header-------------------------------->
    <header class="header-main">
        <div class="container-main">
            <div class="d-block">
                <section class="h-main-row">
                    <!-- header search -->
                    <?php get_template_part('partials/header/header-search') ?>
                    <!-- header account -->
                    <?php get_template_part('partials/header/header-account') ?>
                </section>
                <!-- main nav -->
                <?php get_template_part('partials/nav/main-nav')
                ?>
                <!--    responsive-megamenu-mobile----------------->
                <nav class="sidebar">
                    <?php get_template_part('partials/nav/responsive-megamenu-mobile') ?>
                </nav>
                <div class="nav-btn nav-slider">
                    <span class="linee1"></span>
                    <span class="linee2"></span>
                    <span class="linee3"></span>
                </div>
                <div class="overlay"></div>
                <!-- bottom-menu-joomy -->
                <?php get_template_part('partials/nav/bottom-menu-joomy') ?>
                <!--    responsive-megamenu-mobile----------------->
            </div>
        </div>
    </header>
    <!-- Modal -->
    <?php get_template_part('partials/nav/modal-search') ?>
    <div class="nav-categories-overlay"></div>
    <div class="overlay-search-box"></div>
    <!-- header-------------------------------->
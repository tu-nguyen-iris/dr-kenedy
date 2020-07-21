<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title()?></title>
    <link  rel="stylesheet" href="<?php echo THEME_URL?>/dist/theme.css">
    <link rel="stylesheet" href="<?php echo THEME_URL?>/dist/vendor.css">
    <link rel="stylesheet" href="<?php echo THEME_URL?>/dist/vendors.min.css">
    <?php wp_head()?>
</head>
<body <?php body_class()?>>
<?php wp_body_open()?>
<header>
    <div class="header_top container">
            <a class="header_top__logo" href="/">
                <img alt="logo" src="<?php echo THEME_URL?>/src/images/logo.svg" />
            </a>
        <button class="humbuger-button d-lg-none"></button>
            <div class="header_top__right d-none d-lg-flex">
                <a class="header_top__right__address" href="http://maps.google.com/?q=200 The Great Road, Suite 243, Bedford, MA 01730" target="_blank">200 The Great Road, Suite 243, Bedford, MA 01730</a>
                <a class="header_top__right__phone" href="tel:781-275-0200">781-275-0200</a>
                <a href="/contact"><button class="button">Request an appoinment</button></a>
            </div>
    </div>

    <nav>
        <div class="container">
            <?php
            wp_nav_menu(array(
                'depth' => 2,
                'menu' => "",
                'menu_class' => "nav__list",
                'menu_id' => "",
                'container' => "div",
                'container_class' => "",
                'container_id' => "",
                'fallback_cb' => false,
                'theme_location' => "primary",
                'walker' => new wp_bootstrap_navwalker()
            ));
            ?>
        </div>
    </nav>

</header>

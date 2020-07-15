<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title()?></title>
    <link href="<?php echo THEME_URL?>/dist/theme.css">
    <link href="<?php echo THEME_URL?>/dist/vendor.css">
    <?php wp_head()?>
</head>
<body <?php body_class()?>>
<?php wp_body_open()?>
<header>
    <div class="header_top">
        <div class="container">
            <a class="header_top__logo" href="index.html">
                <img alt="logo" src="./assets/img/logo.svg" />
            </a>
            <div class="header_top__right d-none d-lg-flex">
                <a class="header__address" href="http://maps.google.com/?q=200 The Great Road, Suite 243, Bedford, MA 01730" target="_blank">200 The Great Road, Suite 243, Bedford, MA 01730</a>
                <a class="header__phone" href="tel:781-275-0200">781-275-0200</a>
                <button class="button">Request an appoinment</button>
            </div>
            <button class="humbuger-button button d-block d-lg-none"></button>
        </div>
    </div>

    <div class="nav">
        <div class="container">
            <ul class="nav__list">
                <li class="nav__item"><a href="index.html">Home</a></li>
                <li class="nav__item nav__item--active"><a href="about.html">About</a></li>
                <li class="nav__item"><a href="family.html">Family</a></li>
                <li class="nav__item"><a href="#!">General</a></li>
                <li class="nav__item"><a href="#!">Cosmetic</a></li>
                <li class="nav__item"><a href="#!">Replacement</a></li>
                <li class="nav__item"><a href="#!">New Patients</a></li>
                <li class="nav__item"><a href="#!">Contact Us</a></li>
            </ul>
        </div>
    </div>





</header>

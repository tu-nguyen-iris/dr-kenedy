<?php
define("THEME_URL", get_stylesheet_directory_uri());
function register_navwalker(){
    require_once get_template_directory() . '/wp-walker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
function theme_setup()
{
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'primary' => 'Primary',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');
function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'primary') {
        $classes[] = 'nav__item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
function drkenedyAddBodyClass($classes)
{
    global $post;
    $suffix = '-ph';
    if (is_home()) {
        $classes[] = 'home' . $suffix;
    }
    if (is_page()) {
        if (in_array($post->post_name, array('dang-nhap', 'dang-ky'))) {
            $classes[] = 'account' . $suffix;
        }
        if ($post->post_name === 'shop') {
            $classes[] = 'product' . $suffix;
        } else {
            $classes[] = $post->post_name . $suffix;
        }
    }
    if (is_singular('product')) {
        $classes[] = 'product' . $suffix;
    }
    return $classes;
}
add_filter('body_class', 'drkenedyAddBodyClass');


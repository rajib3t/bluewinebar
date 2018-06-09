<?php

/*
 * Add All theme js and css 
 */

class Theme_asset {

    function __construct() {
        add_action('wp_enqueue_scripts', array(&$this, 'add_css_function_callback'));
        add_action('wp_enqueue_scripts', array(&$this, 'add_js_function_callback'));
    }

    public function add_css_function_callback() {
        wp_enqueue_style('Bootstrap_min', CSS . 'bootstrap.min.css', false, '');
        wp_enqueue_style('font-awesome-min', CSS . 'font-awesome.min.css', false, '');
        wp_enqueue_style('animate-min', CSS . 'animate.min.css', false, '');
        wp_enqueue_style('slimmenu-min', CSS . 'slimmenu.min.css', false, '');
        wp_enqueue_style('slick', CSS . 'slick/slick.css', false, '');
        wp_enqueue_style('slick-theme', CSS . 'slick/slick-theme.css', false, '');
        wp_enqueue_style('style', CSS . 'style.css', false, '');
        wp_enqueue_style('responsive', CSS . 'responsive.css', false, '');
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,500,700', FALSE);
    }

}

$theme_asset = new Theme_asset();

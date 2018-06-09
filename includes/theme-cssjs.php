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

    public function add_js_function_callback() {
        if (!is_admin()) {
            wp_deregister_script('jquery');
        }
        wp_enqueue_script('jquery', JS . 'jquery-3.2.1.min.js', false, '3.2.1', true);
        wp_enqueue_script('popper-min', JS . 'popper.min.js', array('jquery'), FALSE, true);
        wp_enqueue_script('bootstrap-min', JS . 'bootstrap.min.js', '4.0.0-beta.2', FALSE, true);
        wp_enqueue_script('slimmenu-min', JS . 'jquery.slimmenu.min.js', array('jquery'), FALSE, true);
        wp_enqueue_script('wow-min', JS . 'wow.min.js', array('jquery'), FALSE, true);
        wp_enqueue_script('count', JS . 'count.js', array('jquery'), FALSE, true);
        wp_enqueue_script('count', JS . 'count.js', array('jquery'), FALSE, true);
        wp_enqueue_script('count', CSS . 'slick/slick.min.js', array('jquery'), FALSE, true);
        wp_enqueue_script('custom', JS . 'custom.js', array('jquery'), FALSE, true);
    }

}

$theme_asset = new Theme_asset();

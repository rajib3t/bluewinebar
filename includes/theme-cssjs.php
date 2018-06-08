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
        wp_enqueue_style('Bootstrap_min', CSS . 'bootstrap.min.css', false, '');
    }

}


$theme_asset = new Theme_asset();
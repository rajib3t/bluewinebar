<?php
/*
 * The function file 
 * all theme function 
 * 
 */
define('THEME_DIR_PATH', get_template_directory().'/' );
define('THEME_URI', get_template_directory_uri().'/');
define('THEME_INC_DIR', THEME_DIR_PATH.'includes/');
define('JS', THEME_URI.'js/');
define('CSS', THEME_URI.'css/');

require_once THEME_INC_DIR.'theme-function.php';

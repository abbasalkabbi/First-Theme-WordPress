<?php 
/***
 * function support features 
 * add by abbas
 */
add_theme_support('post-thumbnails');
/***
 * function style css import 
 * add by abbas
 */
function style(){
    wp_enqueue_style('main-css',get_template_directory_uri().'/css/main.css');
}
/***
 * function script js import 
 * add by abbas
 */
function script(){
    // this is add main script   
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js' ,array(),1,true);
}
/***
 * function create menu 
 * add by abbas
 */
function custome_menu(){
    register_nav_menu('menu-top' ,__('navbar top '));
}
// run function styles
add_action('wp_enqueue_scripts','style'); 
// run function scripts
add_action('wp_enqueue_scripts','script'); 
// rub function custome_menu 
add_action('init','custome_menu');
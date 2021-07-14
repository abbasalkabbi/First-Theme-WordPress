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
    wp_enqueue_style('comment-css',get_template_directory_uri().'/css/comment.css');
    wp_enqueue_style('author-css',get_template_directory_uri().'/css/author.css');
    wp_enqueue_style('moblie-css',get_template_directory_uri().'/css/moblie.css');
    
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

/**filter */
// this filter in  excerpt return just 15 word
function extend_excerpt_length($length){
    if(is_author()){
        return 55;
    }else{
        return 25;
    } 
}
// this function replace more in excerpt 
function extend_excerpt_more($more){
    return '...';
}
add_filter('excerpt_length','extend_excerpt_length'); // run function extend_excerpt_length
add_filter('excerpt_more','extend_excerpt_more'); // run functionextend_excerpt_more

// run function styles
add_action('wp_enqueue_scripts','style'); 
// run function scripts
add_action('wp_enqueue_scripts','script'); 
// rub function custome_menu 
add_action('init','custome_menu');
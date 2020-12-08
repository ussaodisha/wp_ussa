<?php 

function load_stylesheets(){

    // wp_register_style('style',get_template_directory_uri().'./assets/css/style.css' ,array(), 1 ,'all');
    // wp_enqueue_style('style');

    wp_register_style('main',get_template_directory_uri().'./assets/css/main.css' ,array(), 1 ,'all');
    wp_enqueue_style('main');

    wp_register_style('include',get_template_directory_uri().'./assets/css2/includes.css' ,array(), 1 ,'all');
    wp_enqueue_style('include');

    wp_register_style('home',get_template_directory_uri().'./assets/css2/home.css' ,array(), 1 ,'all');
    wp_enqueue_style('home');

    wp_register_style('about',get_template_directory_uri().'./assets/css2/about.css' ,array(), 1 ,'all');
    wp_enqueue_style('about');

    wp_register_style('event',get_template_directory_uri().'./assets/css2/event.css' ,array(), 1 ,'all');
    wp_enqueue_style('event');

    wp_register_style('gallery',get_template_directory_uri().'./assets/css2/gallery.css' ,array(), 1 ,'all');
    wp_enqueue_style('gallery');

    wp_register_style('contact',get_template_directory_uri().'./assets/css2/contact.css' ,array(), 1 ,'all');
    wp_enqueue_style('contact');


}

add_action('wp_enqueue_scripts','load_stylesheets');

// -------load javascript
function addjs(){

    wp_register_script('jquery', get_template_directory_uri().'assets/js/jquery.js', array() , 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('show-more', get_template_directory_uri().'assets/js/home-show-more.js', array() , 1, 1, 1);
    wp_enqueue_script('show-more');

    wp_register_script('light box', get_template_directory_uri().'assets/js/light box.js', array() , 1, 1, 1);
    wp_enqueue_script('light box');

    wp_register_script('scroll-to-top', get_template_directory_uri().'assets/js/scroll-to-top.js', array() , 1, 1, 1);
    wp_enqueue_script('scroll-to-top');

    wp_register_script('aos', get_template_directory_uri().'assets/js/aos.js', array() , 1, 1, 1);
    wp_enqueue_script('aos');

    wp_register_script('main', get_template_directory_uri().'assets/js/main.js', array() , 1, 1, 1);
    wp_enqueue_script('main');
}


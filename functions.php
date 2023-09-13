<?php
function seven_living_files(){
    wp_enqueue_style('google-font', '//fonts.googleapis.com');
    wp_enqueue_style('gstatic', '//fonts.gstatic.com');
    wp_enqueue_style('font-style', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;1,200&display=swap');
    wp_enqueue_style('seven_living_main_styles', get_theme_file_uri('/css/style-index.css'));

}

add_action('wp_enqueue_scripts', 'seven_living_files');
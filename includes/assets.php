<?php

function my_assets(){
    wp_enqueue_style('myAssets', get_template_directory_uri() . './css/style.css', microtime());
    wp_enqueue_style('fa', 'https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js');
    wp_enqueue_script('my_script', get_template_directory_uri() . '/js/themeToggle.js', array(), microtime(), true);
}
add_action('wp_enqueue_scripts', 'my_assets');
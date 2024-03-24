<?php 

function theme_scripts()
{
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
    wp_enqueue_style( 'usablepaper-stylesheet', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
    wp_enqueue_script( 'usablepaper-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery' ), filemtime(get_stylesheet_directory() . '/assets/js/script.js') ,true);
    // wp_enqueue_script( 'threejs-script', 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js');
    wp_enqueue_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js');
    wp_enqueue_style( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css');
}


?>
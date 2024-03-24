<?php
require 'functions/script.php';
require 'functions/menu.php';

add_action('wp_enqueue_scripts', 'theme_scripts');

add_theme_support('post-thumbnails');

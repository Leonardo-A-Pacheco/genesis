<?php 

#link css

wp_enqueue_style('style',get_stylesheet_uri());

# Habilitar menu do template
function createMenu(){
    register_nav_menu('menuSite', __('Menu do Site'));
}

add_action('init', 'createMenu');

#habilitar logomarca functions.php
add_theme_support('custom-logo', array(
    'height'      => 200,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description')
));


?>
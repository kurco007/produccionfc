<?php
//definir tamaños de imagenes 
function themeK_setUp()
{
    add_theme_support('post-thumbnails');
    //Titulo SEO
    add_theme_support('title-tag');
    add_image_size('cuadrado', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
}
add_action('after_setup_theme', 'themeK_setUp');

wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
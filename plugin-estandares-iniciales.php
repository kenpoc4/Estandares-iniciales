<?php
// Plugin name: Estandares iniciales
// Descripction: Reinicia todas la configuraciones establecidas nativamente en CSS y coloca un estandar como base en la libreria "Normalize".
// Version: 2.0.0
// Author: Kenny Poncio
// Author URI: https://github.com/kenpoc4

if(!defined('ABSPATH'))die();

function kmir_estandares_plugin(){
    $css_url    =   plugin_dir_url( __FILE__ );

    wp_enqueue_style('normalize'    , $css_url . '/assets/css/normalize.css'   , array(), '8.0.1');
    wp_enqueue_style('kmir_style'      , $css_url . '/assets/css/kmir_style.css'      , array(), '1.0.0');

}
add_action( 'wp_enqueue_scripts', 'kmir_estandares_plugin' );

function kmir_conf_img(){
    // habilitar imagen destacada
    add_theme_support('post-thumbnails');

    // Titulos SEO
    add_theme_support('title-tag');

    // Agragando tamaño de images
    add_image_size( 'thumbnail', '150', '150', true);
    add_image_size( 'caja-blog', '625', '310', true);
    add_image_size( 'mediano', '700', '400', true);
    add_image_size( 'poster', '325', '650', true);
    add_image_size( 'poster-2', '600', '600', true);
}
add_action( 'after_setup_theme', 'kmir_conf_img');

// Habilitando archivos SVG para todos los usuarios
function dmc_add_svg_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'dmc_add_svg_mime_types');

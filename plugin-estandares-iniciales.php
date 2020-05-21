<?php
// Plugin name: Estandares iniciales
// Descripction: Reinicia todas la configuraciones establecidas nativamente en CSS y coloca un estandar como base en la libreria "Normalize".
// Version: 1.0.0
// Author: Kenny Poncio
// Author URI: https://github.com/kenpoc4

if(!defined('ABSPATH'))die();

function k_estandares_plugin(){
    $css_url    =   plugin_dir_url( __FILE__ );

    wp_enqueue_style('normalize'    , $css_url . '/assets/css/normalize.css'   , array(), '8.0.1');
    wp_enqueue_style('k_style'      , $css_url . '/assets/css/k_style.css'      , array(), '1.0.0');

}
add_action( 'wp_enqueue_scripts', 'k_estandares_plugin' );
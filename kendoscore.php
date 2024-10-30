<?php
/*
Plugin Name: Kendo Score
Plugin URI: http://www.geekpage.jp/web/kendoscore/
Description: Wordpress plugin for using Kendo Score font.
Author: akimichi ogawa
Version: 1.0.0
Author URI: http://www.geekpage.jp/
*/

function kendoscore_add_style() {
    wp_register_style( 'kendoscore',  plugin_dir_url( __FILE__ ) . 'assets/kendoscore.css' );
    wp_enqueue_style( 'kendoscore' );
}
add_action('wp_enqueue_scripts', 'kendoscore_add_style');

function kendoscore_shortcode($atts) {
  $atts = shortcode_atts(array(
             'score' => '&#x30e1;'), $atts, 'kendoscore');

  return '<span class="kendoscore">' . $atts['score'] . '</span>';
}
add_shortcode('kendoscore', 'kendoscore_shortcode');
?>

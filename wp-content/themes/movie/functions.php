<?php
require_once('lib/php/template.php');


function get_db_content($sql) {
   global $wpdb;
   $data = $wpdb->get_results($sql);
   return $data;
}

function print_a($value) {
   echo '<pre>';
   print_r($value);
   echo '<pre>';
}




function webst8_setup() {
   //ここに関数の中身を記述します。
   add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
}
add_action( 'after_setup_theme', 'webst8_setup' );
//after_setup_themeアクションフック※に登録します。


// 不要なスクリプト削除
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
function remove_dns_prefetch( $hints, $relation_type ) {
	if ( 'dns-prefetch' === $relation_type ) {
		return array_diff( wp_dependencies_unique_hosts(), $hints );
	}
	return $hints;
}

// 不要なスクリプト削除
function responsive_mailform_dequeue_style() {
   wp_dequeue_script( 'jquery.autoKana.js' );
   wp_dequeue_script( 'ajaxzip3.js' );
   wp_dequeue_script( 'jquery.datetimepicker.js' );
   wp_dequeue_script( 'responsive-mailform.js' );
   remove_action('wp_head', 'feed_links', 2);
   remove_action('wp_head', 'feed_links_extra', 3);
   remove_action('wp_head', 'rsd_link');
   remove_action('wp_head', 'wlwmanifest_link');
   remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
   remove_action('wp_head', 'rel_canonical');
   remove_action('wp_head', 'wp_generator');
   remove_action('wp_head', 'wp_shortlink_wp_head');
   remove_action('wp_head', 'print_emoji_detection_script', 7);
   remove_action('wp_print_styles', 'print_emoji_styles');
   remove_action('wp_head', 'rest_output_link_wp_head');
   remove_action('wp_head','wp_oembed_add_discovery_links');
   remove_action('wp_head','wp_oembed_add_host_js');
   wp_dequeue_style('wp-block-library');
}
add_action( 'wp_enqueue_scripts', 'responsive_mailform_dequeue_style' );

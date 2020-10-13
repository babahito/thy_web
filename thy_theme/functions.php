<?php

//概要（抜粋）の文字数
function my_length($length) {
	return 50;
}
add_filter('excerpt_mblength','my_length');

//概要（抜粋）の省略記号
function my_more($more) {
	return '…';
}
add_filter('excerpt_more', 'my_more');


// アイキャッチ画像
add_theme_support('post-thumbnails');

// カスタムメニュー（ナビゲーション）
register_nav_menu('sitenav','サイトナビゲーション');

// トグルボタン用
function navbtn_scripts(){
    wp_enqueue_script('navbtn-script',get_template_directory_uri().'/navbtn.js',array('jquery'));
}
add_action('wp_enqueue_scripts','navbtn_scripts','navbtn_scripts');
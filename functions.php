<?php
//各ページよりCSSとJSを読み込む
add_action('wp_enqueue_scripts','chalon_enqueue');

function chalon_enqueue(){
    //全ページ共通のCSSの読み込み（google fonts、icon font、reset.css）

}///////CSS・JSの読み込みここまで//////////////
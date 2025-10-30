<?php
//各ページよりCSSとJSを読み込む
add_action('wp_enqueue_scripts','chalon_enqueue');

function chalon_enqueue(){
    //全ページ共通のCSSの読み込み（google fonts、icon font、reset.css、common.css）
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@400;700&display=swap'
    );
    wp_enqueue_style(
        'google-icon',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0'
    );
    wp_enqueue_style(
        'chalon-reset',
        get_template_directory_uri().'/css/common/reset.css',
        [],
        filemtime(get_theme_file_path('/css/common/reset.css'))
    );
    wp_enqueue_style(
        'chalon-common',
        get_template_directory_uri().'/css/common/common.css',
        [],
        filemtime(get_theme_file_path('/css/common/common.css'))
    );

    //全ページ共通のjsの読み込み（jquery、common.js）
    wp_enqueue_script('jquery');

}///////CSS・JSの読み込みここまで//////////////
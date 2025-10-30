<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>洋菓子店CHALON</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- slickのCSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page/top.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="header_inner">
            <h1 class="logo">
                <a href="./">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="洋菓子店CHALON">
                </a>
            </h1>
            <div class="hum_menu">
                <span class="hum_menu_line"></span>
                <span class="hum_menu_text">MENU</span>
            </div>
            <nav>
                <ul>
                    <li><a href="about/">当店について</a></li>
                    <li><a href="menu/">メニュー</a></li>
                    <li><a href="lesson/">お菓子教室</a></li>
                    <li><a href="access/">アクセス</a></li>
                </ul>
            </nav>
        </div>
    </header>
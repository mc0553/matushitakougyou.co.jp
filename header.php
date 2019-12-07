<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_get_document_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pagination.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/rightbar.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/staff.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsib.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <!-- Navigation -->
        <nav id="navi" class="navi" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <?php wp_nav_menu(
              array (
                //カスタムメニュー名
                'theme_location' => 'header-navi',
                //コンテナを表示しない
                'container' => false,
                //カスタムメニューを設定しない際に固定ページでメニューを作成しない
                'fallback_cb' => false,
                //出力されるulに対してidやclassを表示しない
                'items_wrap' => '<ul>%3$s</ul>',
              )
            ); ?>
        </nav>
        <!-- Navigation -->

        <nav>
            <div class="nav-right">
                <p>お問い合わせ・お見積もりはお気軽にお寄せ下さい</p>
                <p>営業時間　9時～18時(日・祝日除く)</p>
                <a href="TEL: 099-244-2897" target="_blank" class="email">
                    <p>電話番号　099-244-2897</p>
                </a>
                <a href="mailto: tomureida@jade.plala.or.jp" target="_blank" class="email">
                    <p class="mail">メールでのお問い合わせは365日 click→</p>
                </a>
            </div>
        </nav>

        <nav>
            <div class="nav-sns">

            </div>
        </nav>

        <!-- ハンバーガーメニュー -->
        <div class="white">
            <div class="hamburger">
                <span class="icon"></span>
            </div>
        </div>

    </header>

    <!-- パンくずリスト -->
    <?php custom_breadcrumb(); ?>




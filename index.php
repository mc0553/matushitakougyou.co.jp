<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>

    <section class="main-img">
        <div class="main-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt="">
            <h1 class="split">株式会社 松下工業</h1>
        </div>

        <?php echo do_shortcode('[metaslider id="22"]'); ?>

        <div class="main-text">
            <h2>信頼できる技術がある</h2>
            <h2>鹿児島の左官屋</h2>
            <h2>確かな腕でお応えします</h2>
        </div>
    </section>

    <section class="case">
        <div class="container">
            <div class="case-left">
                <h2 class="sekou-h">施工事例</h2>
                <h4 class="text-link-sekou">画像クリックでリンクへジャンプ</h4>
                <!-- カテゴリーsekouページを読み込む -->
                <?php get_template_part('sekouIndex'); ?>

            </div>
            <div class="rightbar">
                <!-- sideber.phpを読み込む -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>


    <h2>私たちのこだわり</h2>

    <section class="skills">
        <div class="skill-set">
            <div>
                <h3>塗り壁へのこだわり</h3>
                <p>環境にやさしい素材を使用します</p>
            </div>
            <div>
                <h3>技術へのこだわり</h3>
                <p>技術に妥協を許さない仕上げ</p>
            </div>
            <div>
                <h3>お客様へのこだわり</h3>
                <p>コストパフォーマンスを最大限に発揮します</p>
            </div>
        </div>
        <div class="img-box">
            <div class="scrimg src1"></div>
            <div class="scrimg src2"></div>
            <div class="scrimg src3"></div>
            <div class="scrimg src4"></div>
            <div class="scrimg src5"></div>
        </div>
    </section>



    <!-- 固定ページの編集で対応 -->
    <h2>求人情報</h2>
    <section class="recruit">

        <?php
        $recruitelist = get_posts(array(
            'posts_per_page' => 20, //取得記事件数
            'orderby' => 'date', // 日付でソート
            'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
            'category_name' => 'recruite', // 表示したいカテゴリーのスラッグを指定
        ));
        foreach ($recruitelist as $post) :
            setup_postdata($post);
            ?>

            <div class="recruite-div">
                <div class="recruite-post">
                    <div class="recruite-card">
                        <p class="recruite-content">
                            <?php the_title(); ?>
                        </p>
                        <?php if (has_post_thumbnail()) : ?>
                            <!-- サムネイルが設定されている場合 -->
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </a>
                        <?php else : ?>
                            <!-- サムネイルが設定されていない場合 -->
                            <img src="http://placehold.jp/300x300.png?text=画像がありません" alt="">
                        <?php endif; ?>
                        <div class="recruite-text">
                            <p><?php the_time('Y/m/d'); ?>　更新情報</p>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach;
        wp_reset_postdata();
        ?>

    </section>

    <!-- 完全に固定ページPHPで対応 -->
    <!-- 2件を出す方向で対応 -->
    <?php get_template_part('company'); ?>




</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
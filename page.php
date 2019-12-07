<?php get_header(); ?>

<div class="recruite-img">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/joinus.jpg" alt="">
</div>


<?php
    $paged = get_query_var('paged') ?: 1;

    $args  = array(
        'paged' => $paged, 
        'posts_per_page' => 10, // 表示する件数
        'orderby' => 'date', // 日付でソート
        'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
        'category_name' => 'recruite', // 表示したいカテゴリーのスラッグを指定
    
    );
    $the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>
    <div class="recruite-div">

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="recruite-post">    
            <div class="recruite-card">
                <p class="recruite-content">
                    <?php the_title(); ?>
                </p>
                <?php if(has_post_thumbnail()): ?>
                <!-- サムネイルが設定されている場合 -->
                  <a href="<?php echo get_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                  </a>
                <?php else: ?>
                <!-- サムネイルが設定されていない場合 -->
                    <img src="http://placehold.jp/300x300.png?text=画像がありません" alt="">
                <?php endif; ?>
                <div class="recruite-text">
                    <p><?php the_time('Y/m/d'); ?>　更新情報</p>
                       <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

    </div>
<?php endif; ?>

<!-- ページャーの表示 -->
<?php if ( function_exists( 'pagination' ) ) :
    pagination( $the_query->max_num_pages, $paged );
    endif; ?>

<?php get_footer(); ?>
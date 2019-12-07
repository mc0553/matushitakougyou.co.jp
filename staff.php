<?php
/*
Template Name:スタッフ紹介
*/
?>

<h2>職人紹介</h2>

<div class="staff-div">

    <?php
    $stafflist = get_posts(array(
        'category_name' => 'staff', //特定のカテゴリースラッグを指定
        'posts_per_page' => 50 //取得記事件数
    ));
    foreach ($stafflist as $post) :
        setup_postdata($post);
        ?>

        <div class="staff-post">
            <div class="staff-card">
                <p class="staff-content">
                    <?php the_title(); ?>
                </p>
                <?php if (has_post_thumbnail()) : ?>
                    <!-- サムネイルが設定されている場合 -->
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <?php else : ?>
                    <!-- サムネイルが設定されていない場合 -->
                    <img src="http://placehold.jp/300x300.png?text=画像がありません" alt="">
                <?php endif; ?>
            </div>

            <div class="staff-text">
                <?php the_content(); ?>
            </div>

        </div>

    <?php endforeach;
    wp_reset_postdata();
    ?>

</div>


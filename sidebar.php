
<p class="infotext">最新のお知らせ</p>

<dl>
  <?php
     $newslist = get_posts( array(
      'category_name' => 'info', //特定のカテゴリースラッグを指定
      'posts_per_page' => 20 //取得記事件数
    ));
      foreach( $newslist as $post ):
      setup_postdata( $post );
  ?>

  <div class="infoCategory">
      <a href="<?php the_permalink(); ?>"> 
      <dt> <?php the_time('Y年n月j日'); ?></dt>
      <dd><?php the_title(); ?> </dd>
      </a>
  </div>

  <?php
    endforeach;
    wp_reset_postdata();
  ?>
</dl>

<section class="sidebar">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
      <h2 class="widget_title">About</h2>
      ウィジェットが設定されていない場合、ここが表示されます。
  <?php endif; ?>
</section>



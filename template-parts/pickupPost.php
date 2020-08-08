
<?php

    $cat=get_the_category();
    $cat = $cat[0];
    $catid=$cat->cat_ID ;
    $post_id = 'category_'.$catid; /* category_4 のような値をゲットしたい */
    if(have_rows('recommend_post_list', $post_id )):
        while( have_rows('recommend_post_list', $post_id ) ): the_row();
            $pick_post_id[] = get_sub_field('recommend_post');
        endwhile; 
    elseif( have_rows('recommend_post_list','option') ):
        while( have_rows('recommend_post_list','option') ): the_row();
            $pick_post_id[] = get_sub_field('recommend_post');
        endwhile;
    else:
        $pick_post_id[] = 0;
    endif;

    // 総件数
    $max_post_num = 6;
    // 取得件数は必要な数のみリクエスト
    $post_args = array(
        'post__in' => $pick_post_id,
        'post__not_in' => array($post -> ID),
        'posts_per_page'=> $max_post_num,
        'post_type' => 'post',
    );

    $pick_posts = get_posts($post_args);
// 1件以上あれば
if( count($pick_posts) > 0 ): ?>

<h2>よく読まれている記事</h2>
    <ul class="p-relatePost">
        <?php
        foreach ($pick_posts as $post) : setup_postdata($post);
            $category = get_the_category();
            $shortTitle = mb_strimwidth(get_the_title(), 0, 64, "…", "UTF-8");
            ?>
            <li class="c-gridMenuItem c-gridMenuItem--three">
                <a href="<?php echo esc_url( get_permalink() ) ?>">
                <span class="c-gridMenuItem__img">
                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>" alt="">
                </span>
                <p class="c-gridMenuItem__title"><?php echo $shortTitle;?></p>
                </a><span class="c-gridMenuItem__cate"><?php echo $category[0]->cat_name; ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php else: ?>
    <!-- <p style="margin:0 6px;">関連記事はありませんでした</p> -->
    <?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php

    // 総件数
    $max_post_num = 6;
    // 現在の記事にタグが設定されている場合
    if ( has_tag() ) {
    // タグ関連の投稿を取得
    // $tags = wp_get_post_tags($post->ID);
    // $tag_ids = array();
    // foreach($tags as $tag):
    //     array_push( $tag_ids, $tag -> term_id);
    // endforeach ;
    // $tag_args = array(
    //     'post__not_in' => array($post -> ID),
    //     'posts_per_page'=> $max_post_num,
    //     'tag__in' => $tag_ids,
    //     'orderby' => 'rand',
    //     'post_type' => 'post',
    // );
    // $rel_posts = get_posts($tag_args);
    // 総件数よりタグ関連の投稿が少ない場合は、カテゴリ関連の投稿からも取得する
    // $rel_count = count($rel_posts);
    if ($max_post_num > $rel_count) {
        $categories = get_the_category($post->ID);
        $category_ID = array();
        foreach($categories as $category):
            array_push( $category_ID, $category -> cat_ID);
        endforeach ;
        // 取得件数は必要な数のみリクエスト
        $cat_args = array(
            'post__not_in' => array($post -> ID),
            'tag__not_in' => $tag_ids,
            'posts_per_page'=> ($max_post_num - $rel_count),
            'category__in' => $category_ID,
            'orderby' => 'rand',
            'post_type' => 'post',
        );
        $cat_posts = get_posts($cat_args);
        $rel_posts = array_merge($rel_posts, $cat_posts);
    }
    } else { // 現在の記事にタグが設定されていない場合

    // 総件数よりタグ関連の投稿が少ない場合は、カテゴリ関連の投稿からも取得する
    // タグ関連の投稿を取得
    // $tags = wp_get_post_tags($post->ID);
    // $tag_ids = array();
    // foreach($tags as $tag):
    //     array_push( $tag_ids, $tag -> term_id);
    // endforeach ;
    // $tag_args = array(
    //     'post__not_in' => array($post -> ID),
    //     'posts_per_page'=> $max_post_num,
    //     'tag__in' => $tag_ids,
    //     'orderby' => 'rand',
    //     'post_type' => 'post',
    // );
    // $rel_posts = get_posts($tag_args);
    // $rel_count = count($rel_posts);
    if ($max_post_num > $rel_count) {
        $categories = get_the_category($post->ID);
        $category_ID = array();
        foreach($categories as $category):
            array_push( $category_ID, $category -> cat_ID);
        endforeach ;
        // 取得件数は必要な数のみリクエスト
        $cat_args = array(
            'post__not_in' => array($post -> ID),
            'posts_per_page'=> ($max_post_num - $rel_count),
            'category__in' => $category_ID,
            'orderby' => 'rand',
            'post_type' => 'post',
        );
        $cat_posts = get_posts($cat_args);
        $rel_posts = $cat_posts;
    }
    }

    ?>
    <?php
    // 1件以上あれば
    if( count($rel_posts) > 0 ): ?>
    
    <h2>関連記事</h2>
        <ul class="p-relatePost">
            <?php
            foreach ($rel_posts as $post) : setup_postdata($post);
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

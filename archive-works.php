<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Glut
 */

 get_header();

 $args = array(
 		'post_type' => 'works',
		'paged' => $paged,
 		'posts_per_page' => get_option('posts_per_page'), //表示する件数
	);
	
		
	if(is_category()):
		$categories = get_the_category();
		$args += array('cat' => $categories[0]->term_id);
    // $archive_title = single_cat_title('', false).'の記事';
    // $archive_description = category_description();
	elseif(is_tag()):
		$tag_id = get_query_var('tag_id');
		$args += array('tag_id' => $tag_id);
    // $archive_title = single_cat_title('', false).'の記事';
    // $archive_description = tag_description();
  elseif(is_year()):
    // $archive_title = get_the_time("Y年").'の記事';
  elseif(is_month()):
    // $archive_title = get_the_time("Y年m月").'の記事';
  elseif(is_day()):
    // $archive_title = get_the_time("Y年m月d日").'の記事';
  elseif(is_author()):
    // $author_id = get_query_var('author');
    // $author_name = get_the_author_meta( 'display_name', $author_id );
    // $archive_title = $author_name.'が投稿した記事一覧';
  endif;

 ?>
 <div id="content" class="site-content" style="background-color:#fff;">


 	<main id="main">
 		<div id="p-works">
 			<ul class="p-worksList">
				<?php
				
        $wp_query = new WP_Query($args);

				// ループ
 				if ( $wp_query->have_posts() ) {
 				    while ( $wp_query->have_posts() ) {
								$wp_query->the_post();

 								$category = get_the_category();

 								$author = get_userdata($post->post_author);
 								$user_id      = $author->ID ;
 								$avatar_img  = scrapeImage( get_wp_user_avatar( $user_id ) );


 				        // 処理を記述
 								?>
 								<li class="p-worksList__item">
								 <a href="<?php the_permalink( $post ); ?>">
									<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="">
									<h3><?php the_title(); ?></h3>
								</a>

 								</li>
 								<?php
 				    }
 				}

 				?>
 			</ul>

 					<?php
 					if (function_exists("pagination")) {
 			        pagination($my_query->max_num_pages);
 			    };
 					?>
 			<?php
 				// 投稿データのリセット
 				wp_reset_query();
 			?>
 		</div>
 	</main>


 </div><!-- #content -->

 <?php
 get_footer();

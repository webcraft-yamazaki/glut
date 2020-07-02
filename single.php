<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Glut
 */

get_header();
$author = get_userdata($post->post_author);
$user_id      = $author->ID ;
$avatar_img  = scrapeImage( get_wp_user_avatar( $user_id ) );
?>

<div id="content" class="site-content">

	<div class="container-md px-md-0 mb-2">
		<div class="row justify-content-md-center">
			<div class="col-md-7 pl-2">
			<?php breadcrumb(); ?>
		</div>
		</div>
	</div>

	<div class="container p-md-0 no-sidebar">

		<div id="primary" class="content-area row justify-content-md-center">
			<main id="main" class="site-main col-md-7 px-0">
				<article id="post-<?php the_ID(); ?>" <?php post_class('p-entryContent'); ?>>
					<?php if ( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>
							<?php if(get_the_post_thumbnail()): ?>
								<div class="p-entryContent__thumbnail" style="background-image:url(<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>)"></div>
							<?php endif; ?>
					<div class="p-entryContent__date">
						<time>
							公開日:<?php the_time('Y/m/d');?> 　/　 最終更新日:<?php the_modified_date('Y/m/d') ?>
						</time>
					</div>
					<h1 class="p-entryContent__title">
						<?php the_title(); ?>
					</h1>
					<div class="p-entryContent__category">
						<span><?php echo get_the_category()[0]->cat_name; ?></span> 
					</div>
					<div class="p-entryContent__author">
						<div class="p-entryContent__author__img" style="background-image: url(<?php echo $avatar_img; ?>);"></div>
						<div class="p-entryContent__author__name">記事を書いた人 : <?php echo $author->display_name;?></div>
						<div class="p-entryContent__author__tag"><?php the_author_meta('user_description',$user_id); ?></div>
					</div>
					
					<div class="entry-content">
						<?php
						the_content();
						?>
					</div><!-- .entry-content -->
					<?php the_tags( '<div class="p-entryTags"><span class="p-entryTags__item">#', '</span><span class="p-entryTags__item">', '</span></div>' ); ?>
					<?php endwhile;?>
				<?php endif; ?>

					<div class="p-socialButton">
						<h2>この記事を共有する</h3>
						<a class="btn btn-icon btn-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&amp;t=<?php echo urlencode(the_title("","",0)); ?>"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
						<a class="btn btn-icon btn-twitter" href="http://twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&amp;<?php echo urlencode(get_permalink()); ?>&amp;url=<?php echo urlencode(get_permalink()); ?>"><i class="fab fa-twitter"></i><span>Twitter</span></a>
						<a class="btn btn-icon btn-line" href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>"><i class="fab fa-line"></i><span>Line</span></a>
					</div>

				</article>
				<?php get_template_part( 'template-parts/relatedPost'); ?>
			</main>
		</div>

	</div>

</div><!-- #content -->

<?php
get_footer();

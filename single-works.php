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

		<article id="post-<?php the_ID(); ?>" <?php post_class('p-worksContent'); ?>>
			<?php if ( have_posts() ) : ?>
				<?php while( have_posts() ) : the_post(); ?>
					<?php if(get_the_post_thumbnail()): ?>
						<div class="p-worksContent__thumbnail" style="background-image:url(<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>)"></div>
					<?php endif; ?>
			<h1 class="p-worksContent__title">
				<?php the_title(); ?>
			</h1>
			
			<?php endwhile;?>
		<?php endif; ?>


		</article>

</div><!-- #content -->

<?php
get_footer();

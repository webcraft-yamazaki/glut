<?php

/**
 *
 *
 * @package Glut
 */

get_header();
?>



<div id="content" class="site-content pt-0">
	<div class="p-normalLayout container-fluid">
		<div class="container-md px-0">
			<h2 class="p-normalLayout__title">
				<?php the_title(); ?>
				<?php if (get_field('page_subtitle')) { ?>
					<span><?php the_field('page_subtitle'); ?></span>
				<?php } ?>
			</h2>
			<div class="p-normalLayout__breadcrumb">
				<?php breadcrumb(); ?>
			</div>
		</div>
	</div>
	<div class="container-md px-md-0 mb-2">
		<div class="row justify-content-md-center">
			<div id="primary" class="content-area">
				<main id="main" class="site-main px-0">
					<article id="post-<?php the_ID(); ?>" <?php post_class('p-entryContent'); ?>>
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<div class="page-content">
									<?php
									the_content();
									?>
								</div><!-- .entry-content -->
							<?php endwhile; ?>
						<?php endif; ?>
					</article>
				</main>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();

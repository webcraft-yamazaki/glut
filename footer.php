<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Glut
 */

?>

		<footer id="colophon" class="l-footer container-fluid">
			<p class="l-footer__logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">GLUT</a></p>
			<div class="l-footer__sns">
				<a class="c-snsLink" href="https://twitter.com/GLUT2020" target="_blank"><i class="fab fa-twitter"></i></a>
				<a class="c-snsLink" href="https://www.facebook.com/GLUT-106898417675902" target="_blank"><i class="fab fa-facebook-f"></i></a>
				<a class="c-snsLink" href="https://www.youtube.com/channel/UCzeAwdOT68iE9F2egq5HKkA" target="_blank"><i class="fab fa-youtube"></i></a>
				<a class="c-snsLink" href="https://www.instagram.com/glut_2020" target="_blank"><i class="fab fa-instagram-square"></i></a>
			</div>

			<p class="l-footer__copyright">&copy;GLUT</p>
		</footer>
		<div id="slideMenuOverlay"></div>
	</div><!-- #page -->
</div><!-- #slideMenuOut -->
<div id="slideMenuIn" class="p-drawerMenu">
  <div class="p-drawerMenu__logo">
    <div class="c-logo">
      <h2 class="my-3">GLUT</h2>
    </div>
  </div>
	<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'container'      => 'ul',
			'depth'          => 1,
		) );
	?>
</div>

<?php wp_footer(); ?>

<!-- Twitter universal website tag code -->
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','o3xwz');
twq('track','PageView');
</script>
<!-- End Twitter universal website tag code -->

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.1/TweenMax.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

</html>

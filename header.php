<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Glut
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="preload" as="style">
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

	
  <script data-ad-client="ca-pub-9578187613543560" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<?php wp_head(); ?>
	
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
</head>

<body <?php body_class('fo2'); ?>>
	<!-- <div class="cursor"></div>
	<div class="follower"></div> -->
	<div class="fade_group">
		<div></div>
	</div>
	<div class="fade_group2">
		<div></div>
	</div>
<div id="slideMenuOut" class="">
<div id="page" class="site">
	<header id="masthead" class="l-header container-fluid py-2">
		<div class="row justify-content-start justify-content-md-end align-items-center">
	    <div class="c-logo ml-3 mx-md-4">
	      <h1 class="align-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">GLUT</a></h1>
	    </div>
	    <div class="sp-none mx-md-4">
	      <a class="c-contactLink" href="<?php echo get_permalink( 18 ); ?>">
	        CONTACT
	      </a>
	    </div>
	    <div id="slideMenuButton" class="c-slideMenuButton mx-md-4">
	      <div class="c-slideMenuButton__wrap">
	        <span></span>
	        <span></span>
	      </div>
	    </div>
	</header><!-- #masthead -->

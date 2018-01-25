<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php echo str_replace(' | ', ' ', get_the_title()); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<script>
    	document.createElement( "picture" );
  	</script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.3/picturefill.min.js" async></script>

	</head>
	<body <?php body_class(); ?>>

		<div id="left" class="website-border"></div>
		<div id="right" class="website-border"></div>
		<div id="top" class="website-border"></div>
		<div id="bottom" class="website-border"></div>

	<header class="main-header">
		<nav class="main-header__nav">
			<ul class="main-header__nav__links">
				<li class="main-header__nav__links__link"><a href="<?php echo site_url(); ?>">Home</a></li>
				<li class="main-header__nav__links__link"><a href="<?php echo site_url(); ?>/projects">Projects</a></li>
				<li class="main-header__nav__links__link"><a href="<?php echo site_url(); ?>/about">About</a></li>
				<li class="main-header__nav__links__link"><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
			</ul>
		</nav>
		<div class="main-header__contact-details">
			<a href="" class="main-header__contact-details__item main-header__contact-details__item--phone-no">
				<i></i>
				<p>0207 345 789</p>
			</a>
			<a href="mailto:hello@ahoia.com?subject=Hello" class="main-header__contact-details__item main-header__contact-details__item--email-add">
				<p>hello@ahoia.com</p>
			</a>
		</div>

		<span class="main-header__links-angle-bg"></span>

		<div class="main-header__logos ahoia-logo">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="110px" height="73.7px" viewBox="0 0 110 73.7" style="enable-background:new 0 0 110 73.7;" xml:space="preserve">
				<style type="text/css">
					.st0{fill:#2d2d2d;}
				</style>
				<polygon fill="white" points="41,2 108,33 69.5,71.7 2,41 "/>
				<g><path class="st0 ahoia-logo__letter ahoia-logo__letter--afirst" d="M22.2,43.5l6.1-13.2c0.1-0.1,0.2-0.2,0.3-0.2h0.2c0.1,0,0.3,0.1,0.3,0.2l6.1,13.2c0.1,0.3,0,0.5-0.3,0.5h-2.2c-0.4,0-0.5-0.1-0.7-0.5l-0.7-1.5h-5.3l-0.7,1.6c-0.1,0.2-0.3,0.5-0.7,0.5h-2.2C22.3,44,22.1,43.7,22.2,43.5z M30.3,39.3L28.8,36h0l-1.5,3.2H30.3z"/></g>
				<g><path class="st0 ahoia-logo__letter ahoia-logo__letter--h ahoia-logo__letter--hide" d="M37.5,30.6c0-0.2,0.2-0.4,0.4-0.4h2.3c0.2,0,0.4,0.2,0.4,0.4v4.9h5.6v-4.9c0-0.2,0.2-0.4,0.4-0.4h2.3c0.2,0,0.4,0.2,0.4,0.4v13c0,0.2-0.2,0.4-0.4,0.4h-2.3c-0.2,0-0.4-0.2-0.4-0.4v-5.1h-5.6v5.1c0,0.2-0.2,0.4-0.4,0.4h-2.3c-0.2,0-0.4-0.2-0.4-0.4V30.6z"/></g>
				<g><path class="st0 ahoia-logo__letter ahoia-logo__letter--o ahoia-logo__letter--hide" d="M58.3,30.1c3.9,0,7,3.1,7,7.1c0,3.9-3.1,7-7,7c-3.9,0-7-3.1-7-7C51.2,33.2,54.3,30.1,58.3,30.1z M58.3,41c2.2,0,3.9-1.8,3.9-3.9c0-2.2-1.8-3.9-3.9-3.9c-2.1,0-3.9,1.8-3.9,3.9C54.4,39.3,56.1,41,58.3,41z"/></g>
				<g><path class="st0 ahoia-logo__letter ahoia-logo__letter--i ahoia-logo__letter--hide" d="M67.5,30.6c0-0.2,0.2-0.4,0.4-0.4h2.3c0.2,0,0.4,0.2,0.4,0.4v13c0,0.2-0.2,0.4-0.4,0.4h-2.3c-0.2,0-0.4-0.2-0.4-0.4V30.6z"/></g>
				<g><path class="st0 ahoia-logo__letter ahoia-logo__letter--alast" d="M72.6,43.5l6.1-13.2c0.1-0.1,0.2-0.2,0.3-0.2h0.2c0.1,0,0.3,0.1,0.3,0.2l6.1,13.2c0.1,0.3,0,0.5-0.3,0.5h-2.2c-0.4,0-0.5-0.1-0.7-0.5l-0.7-1.5h-5.3l-0.7,1.6c-0.1,0.2-0.3,0.5-0.7,0.5H73C72.7,44,72.5,43.7,72.6,43.5z M80.7,39.3L79.2,36h0l-1.5,3.2H80.7z"/></g>
			</svg>
		</div><!-- //main-header__logos ahoia-logo -->

	</header>

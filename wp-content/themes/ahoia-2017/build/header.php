<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php echo str_replace(' | ', ' ', get_the_title()); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/ahoia-favicon.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<script>
    	document.createElement( "picture" );
  	</script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.3/picturefill.min.js" async></script>

		<style>
			img["data-src"], img["data-srcset"]{
				display: block;
				min-height: 1px;
      }
      /* html,body,div,span,h1,h3,p,a,i,ul,li,footer,header,nav,section,i{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}footer,header,nav,section{display:block}body{line-height:1}ul{list-style:none}svg{width:100%;height:auto;display:block}a{color:black;text-decoration:none;outline:0}i,span{display:block}*{box-sizing:border-box}body{font-size:100%;-webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility;font-weight:normal}h1,h3,p{font-family:"brandon-grotesque",sans-serif;margin-top:0}h1{font-size:3.15em;font-weight:900;line-height:0.85em}h3{font-size:1.4em;line-height:1.266em;margin-top:-2px;font-weight:700;margin-bottom:.75em}p{font-family:"brandon-grotesque",sans-serif;font-size:.875em;line-height:1.875em;color:#565656}@media (min-width:700px) and (min-height:500px){h1{font-size:5em}h3{font-size:1.8em}}body,html{overflow-x:hidden}.bx-slider__controls__arrows .btn-tri__icon:before,.bx-slider__controls__arrows .btn-tri__icon:after{right:34px;top:21px}.bx-slider__controls__arrows.btn-tri{width:60px!important;height:60px!important}.bx-slider__controls__arrows.btn-tri:before,.bx-slider__controls__arrows.btn-tri:after{width:44px;height:44px}.bx-slider__controls__arrows.btn-tri:after{background:rgba(255,255,255,0.65);border:none}.bx-slider__controls__arrows--prev .btn-tri__icon:before,.bx-slider__controls__arrows--prev .btn-tri__icon:after{transform-origin:left center}.bx-slider__controls__arrows--prev .btn-tri__icon:before{top:21px}.bx-slider__controls__arrows--prev .btn-tri__icon:after{top:22px}.bx-slider__controls__arrows--next{top:70px}.main-header{position:fixed;top:0;right:0px;width:100%;height:20px;z-index:80}.main-header a{color:white}.main-header__logos{position:absolute;right:10px;top:10px;z-index:92;width:100px}.main-header__logos svg{width:100%;height:auto}.main-header__links-angle-bg{position:absolute;right:-50px;top:-460px;background:#2d2d2d;width:110%;height:600px;z-index:2;transform:rotate(24deg);transform-origin:100% 100% 0px}.main-header__nav{position:fixed;float:left;padding:100px 7% 0 7%;height:100%;width:100%;z-index:91;opacity:0;visibility:collapse;background:#2d2d2d}.main-header__nav__links__link{font-family:"brandon-grotesque",sans-serif;font-weight:bold;text-align:right;font-size:2.6em;padding-bottom:20px;text-transform:uppercase;opacity:0}.main-header__nav__links__link a{color:white}@media (min-width:700px) and (min-height:500px){#top,#bottom,#left,#right{background:#2d2d2d;position:fixed;z-index:10}#left,#right{top:0;bottom:0;width:20px}#left{left:0}#right{right:0}#top,#bottom{left:0;right:0;height:20px}#top{top:0}#bottom{bottom:0}.main-header__logos{right:26px;top:18px;width:115px}.main-header__nav{background:none;position:relative;width:30%}.main-header__nav__links__link{text-align:left}.main-header__links-angle-bg{top:-430px}}.full-page-slider__controls{position:fixed;z-index:20;right:20px;width:60px;bottom:180px}.full-page-slider__controls .bx-slider__controls__arrows--prev{opacity:1}.full-page-slider__controls .bx-slider__controls__arrows{transform-origin:center}.full-page-slider__controls .bx-slider__controls__arrows:after{background:white}.full-page-slider__controls .bx-slider__controls__arrows i{opacity:1;z-index:2}.full-page-slider__controls .bx-slider__controls__arrows i:before,.full-page-slider__controls .bx-slider__controls__arrows i:after{background:#2d2d2d!important}.full-page-slider__controls .bx-slider__controls__arrows--prev i{transform:rotate(90deg);top:31px;left:13px}.full-page-slider__controls .bx-slider__controls__arrows--next i{transform:rotate(90deg);top:31px;left:13px}.full-page-slider__controls a{display:block}.section__hello{background:#1e1e1e}.section__hello .home-slider__slide{position:absolute;text-align:center;top:50%;transform:translateY(-50%);height:auto}.section__hello .home-slider__slide .slider-info__text-con__title{font-size:6em}.section__hello .home-slider__slide h3{margin-top:10px;color:white}.section__hello__explore{position:absolute;bottom:54px;right:90px;color:white;font-size:16px}.slider-info{position:fixed;top:30%;width:100%;z-index:10}.slider-info:after{content:"";display:table;clear:both}.slider-info__shape{position:absolute;width:100%;opacity:0.85;fill:#1e1e1e;top:0;left:0}.slider-info__shape svg{width:100%;height:auto}.slider-info__text-con__item{position:relative;z-index:120;top:20px;left:30px;max-width:500px}.slider-info__text-con__item .container{position:absolute;opacity:0;transform:translate(0,20px);visibility:hidden}.slider-info__text-con__item .container:after{content:"";display:table;clear:both}.slider-info__text-con__title{top:0;color:white;text-transform:uppercase;font-size:4em}.slider-info__text-con__text{display:none;color:white;margin:10px 0 0 6px;font-weight:600;font-size:1.1em;line-height:1.4em}.home-slider__slide{width:101%;height:101%;background-size:cover}.image-objects{width:100%;height:100%;overflow:hidden;background:black}.image-objects__obj{position:absolute;width:101%;height:101%;background-size:cover!important;background-position:center center;bottom:0;left:0;top:0;right:0}.image-objects__obj:nth-child(1){z-index:1}.image-objects__obj:nth-child(2){z-index:2}.image-objects__obj:nth-child(3){z-index:3}@media (min-width:700px) and (min-height:500px){.section__hello .home-slider__slide .slider-info__text-con__title{font-size:12em}.section__hello__explore{bottom:65px;right:120px}.slider-info{margin-top:-250px;margin-left:-350px;width:700px;height:460px;left:50%;right:50%;top:50%}.slider-info__text-con__title{font-size:5em}.slider-info__text-con__text{display:block}.slider-info__text-con__item{top:100px;left:100px}.full-page-slider__controls{bottom:190px;right:50px}}.btn-tri{position:absolute;width:50px;height:50px;margin-top:20px;left:12px}.btn-tri:before,.btn-tri:after{content:"";position:absolute;top:0;left:0;width:34px;height:34px;z-index:1}.btn-tri:after{border:1px solid white;transform:rotate(45deg)}.btn-tri:before{background:white;left:1px;top:1px;transform:scale(0) rotate(45deg)}.btn-tri__icon{position:relative}.btn-tri__icon:after,.btn-tri__icon:before{content:"";position:absolute;width:11px;height:2px;right:26px;z-index:2;background:white;transform-origin:right center}.btn-tri__icon:before{top:17px;transform:rotate(45deg)}.btn-tri__icon:after{top:16px;transform:rotate(-45deg)}@keyframes loaderLogoLetters{0%{fill:white}100%{fill:#2d2d2d}}.page-loader{display:flex;align-items:center;justify-content:center;position:fixed;width:100%;height:100%;top:0;left:0;color:#282828;background:#2d2d2d;z-index:99999}.page-loader__logo-letters{fill:#2d2d2d;animation:loaderLogoLetters .8s 0s infinite}.page-loader__logo-letters:nth-child(1){animation-delay:0s}.page-loader__logo-letters:nth-child(2){animation-delay:.15s}.page-loader__logo-letters:nth-child(3){animation-delay:.30s}.page-loader__logo-letters:nth-child(4){animation-delay:.45s}.page-loader__logo-letters:nth-child(5){animation-delay:.60s}.page-loader__logo-shape{fill:currentColor}.page-loader .wrapper{width:600px;max-width:600px;padding:0 40px}.main-footer{background:#1e1e1e}.main-footer .wrapper{padding:60px 30px 100px 30px;max-width:1000px;margin:0 auto}.main-footer .wrapper:after{content:"";display:table;clear:both} */
		</style>

	</head>
  <body <?php body_class(); ?>>

    <!-- Page-loader -->
    <style>
      /* @keyframes loaderLogoLetters{0%{fill:#fff}100%{fill:#2d2d2d}}.page-loader{display:flex;align-items:center;justify-content:center;position:fixed;width:100%;height:100%;top:0;left:0;color:#282828;background:#2d2d2d;z-index:99999}.page-loader__logo-letters{fill:#2d2d2d;animation:loaderLogoLetters .8s 0s infinite}.page-loader__logo-letters:nth-child(1){animation-delay:0s}.page-loader__logo-letters:nth-child(2){animation-delay:.15s}.page-loader__logo-letters:nth-child(3){animation-delay:.3s}.page-loader__logo-letters:nth-child(4){animation-delay:.45s}.page-loader__logo-letters:nth-child(5){animation-delay:.6s}.page-loader__logo-shape{fill:currentColor}.page-loader .wrapper{width:600px;max-width:600px;padding:0 40px} */
    </style>

		<div id="left" class="website-border"></div>
		<div id="right" class="website-border"></div>
		<div id="top" class="website-border"></div>
    <div id="bottom" class="website-border"></div>
    
    <?php if(is_front_page()):?>
      <div class="page-loader">
        <div class="wrapper">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="110px" height="73.7px" viewBox="0 0 110 73.7" style="enable-background:new 0 0 110 73.7;" xml:space="preserve">
            <polygon class="page-loader__logo-shape" points="41,2 108,33 69.5,71.7 2,41 "/>
            <g class="page-loader__logo-lettters-con">
              <path class="page-loader__logo-letters" d="M22.2,43.5l6.1-13.2c0.1-0.1,0.2-0.2,0.3-0.2h0.2c0.1,0,0.3,0.1,0.3,0.2l6.1,13.2c0.1,0.3,0,0.5-0.3,0.5h-2.2c-0.4,0-0.5-0.1-0.7-0.5l-0.7-1.5h-5.3l-0.7,1.6c-0.1,0.2-0.3,0.5-0.7,0.5h-2.2C22.3,44,22.1,43.7,22.2,43.5z M30.3,39.3L28.8,36h0l-1.5,3.2H30.3z"/>
              <path class="page-loader__logo-letters" d="M37.5,30.6c0-0.2,0.2-0.4,0.4-0.4h2.3c0.2,0,0.4,0.2,0.4,0.4v4.9h5.6v-4.9c0-0.2,0.2-0.4,0.4-0.4h2.3c0.2,0,0.4,0.2,0.4,0.4v13c0,0.2-0.2,0.4-0.4,0.4h-2.3c-0.2,0-0.4-0.2-0.4-0.4v-5.1h-5.6v5.1c0,0.2-0.2,0.4-0.4,0.4h-2.3c-0.2,0-0.4-0.2-0.4-0.4V30.6z"/>
              <path class="page-loader__logo-letters" d="M58.3,30.1c3.9,0,7,3.1,7,7.1c0,3.9-3.1,7-7,7c-3.9,0-7-3.1-7-7C51.2,33.2,54.3,30.1,58.3,30.1z M58.3,41c2.2,0,3.9-1.8,3.9-3.9c0-2.2-1.8-3.9-3.9-3.9c-2.1,0-3.9,1.8-3.9,3.9C54.4,39.3,56.1,41,58.3,41z"/>
              <path class="page-loader__logo-letters" d="M67.5,30.6c0-0.2,0.2-0.4,0.4-0.4h2.3c0.2,0,0.4,0.2,0.4,0.4v13c0,0.2-0.2,0.4-0.4,0.4h-2.3c-0.2,0-0.4-0.2-0.4-0.4V30.6z"/>
              <path class="page-loader__logo-letters" d="M72.6,43.5l6.1-13.2c0.1-0.1,0.2-0.2,0.3-0.2h0.2c0.1,0,0.3,0.1,0.3,0.2l6.1,13.2c0.1,0.3,0,0.5-0.3,0.5h-2.2c-0.4,0-0.5-0.1-0.7-0.5l-0.7-1.5h-5.3l-0.7,1.6c-0.1,0.2-0.3,0.5-0.7,0.5H73C72.7,44,72.5,43.7,72.6,43.5z M80.7,39.3L79.2,36h0l-1.5,3.2H80.7z"/>
            </g>
          </svg>
        </div>
      </div>
    <?php endif;?>

    <header class="main-header">
      <nav class="main-header__nav">
        <ul class="main-header__nav__links">
          <li class="main-header__nav__links__link">
            <a href="<?php echo site_url(); ?>">
              <h4>G’day</h4>
              <p>our shop window</p>
            </a>
          </li>
          <li class="main-header__nav__links__link">
            <a href="<?php echo site_url(); ?>/projects">
              <h4>Projects</h4>
              <p>what we've made</p>
            </a>
          </li>
          <li class="main-header__nav__links__link">
            <a href="<?php echo site_url(); ?>/about">
              <h4>About</h4>
              <p>what we do</p>
            </a>
          </li>
          <li class="main-header__nav__links__link">
            <a href="<?php echo site_url(); ?>/contact">
              <h4>Contact</h4>
              <p>we're here for you</p>
            </a>
          </li>
        </ul>
      </nav>

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

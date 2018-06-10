<?php /* template name: Homepage */ get_header();?>

<?php
  $posts = get_field('homepage_gallery');
  $styleCounter = 1;
  $mainClass = 'body.fp-viewing';

  if( $posts ): ?>
    <style type="text/css">

      <?php foreach( $posts as $post):?>
      <?php setup_postdata($post); ?>
        <?php echo $mainClass;?>-<?php echo $styleCounter;?> .main-header a,
        <?php echo $mainClass;?>-<?php echo $styleCounter;?> .main-header p{
      		color:<?php the_field('border_color');?>;
      	}
        <?php echo $mainClass;?>-<?php echo $styleCounter;?> .slider-info__shape__con svg,
        <?php echo $mainClass;?>-<?php echo $styleCounter;?> .ahoia-logo__letter{
  				fill:<?php the_field('border_color');?>;
      	}
      <?php $styleCounter++;  endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </style>
  <?php endif; ?>

<main role="">
  <section>
    <div id="fullpage" class="full-page-slider">

      <div class="full-page-slider__controls">
        <a href="#0" id="home_slideUp" class="btn btn-tri bx-slider__controls__arrows bx-slider__controls__arrows--prev">
          <i class="btn-tri__icon"></i>
        </a>
        <a href="#0" id="home_slideDown" class="btn btn-tri bx-slider__controls__arrows bx-slider__controls__arrows--next">
          <i class="btn-tri__icon"></i>
        </a>
      </div>

      <div id="slider-info" class="full-page-slider__slider-info slider-info">
  			<div class="slider-info__text-con" id="slider-info__text-con">
                  
          <?php
            $posts = get_field('homepage_gallery');
            $slideCounter = 1;

            if( $posts ): ?>
              <?php foreach( $posts as $post):?>
                  <?php setup_postdata($post); ?>
                  <section id="item-<?php echo $slideCounter;?>" class="slider-info__text-con__item">
                    <a href="<?php echo the_permalink();?>" class="container">
                      <h1 class="slider-info__text-con__title"><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h1>
                      <p class="slider-info__text-con__text"><?php the_excerpt();?></p>
                    </a>
          				</section>
              <?php $slideCounter++; endforeach; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>

  				<div class="slider-info__shape">
  					<div class="slider-info__shape__con">
  						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="110px" height="73.7px" viewBox="0 0 110 73.7" style="enable-background:new 0 0 110 73.7;" xml:space="preserve"><polygon points="41,2 108,33 69.5,71.7 2,41 "/></svg>
  					</div>
  				</div>
  			</div>
      </div><!--  //full-page-slider__slider-info -->
      
      <div class="section section__hello" data-slider="0">
        <span class="section__hello__color-overlay"></span>
        <span class="section__hello__image cover" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/homepage-hero.jpg)"></span>
        <div class="home-slider__slide">
          <h1 class="slider-info__text-con__title wow fadeInUp">G’DAY.</h1>
          <h3 class="wow fadeInUp" data-wow-delay=".3s">Amplifying Brands since 2012</h3>
        </div>
        <p class="section__hello__explore">Explore Ahoia</p>
      </div>

      <?php
        $posts = get_field('homepage_gallery');
        $imageCounter = 0;
        $slideCounter = 1;

        if( $posts ): ?>
          <?php foreach( $posts as $post):?>
              <?php setup_postdata($post); ?>
              <div class="section" data-slider="<?php echo $slideCounter;?>" >
              	<div class="home-slider__slide">
              		<div class="image-objects">
                    <?php if( wp_is_mobile() ){ ?>  
                      <?php  
                        $m_image = get_field('p-mobile-hero-image');  
                      ?>
                      <img src="<?php echo $m_image['sizes']['m_full-screen']; ?>" alt="<?php echo $m_image['alt']; ?>">  
                    <?php }else{ ?>
                      <?php if( have_rows('p-hero-images') ): while( have_rows('p-hero-images') ): the_row(); $imageCounter++ ?>
                        <div class="image-objects__obj image-objects__obj--<?php echo $imageCounter;?> parallax"  data-speed-y="<?php echo the_sub_field('p-hero-yspeed');?>" data-speed-x="<?php echo the_sub_field('p-hero-xspeed');?>">
                          <?php  
                            $d_image = get_sub_field('p-hero-images_image');
                          ?>
                          <picture>
                            <source media="(min-width: 700px)" srcset="<?php echo $d_image['sizes']['d_large']?>" />
                            <?php if( $m_image ){ ?>
                              <img alt="<?php $m_image['alt'];?>" src="<?php echo $m_image?>">
                            <?php }else{ ?>
                              <img class="" alt="<?php $d_image['alt'];?>" src="<?php echo $d_image['sizes']['d_large']?>">
                            <?php } ?>
                          </picture>
                        </div>
                      <?php endwhile; endif;?>
                    <?php } ?>
                  </div><!-- //image-objects -->
                  <div class="home-slider__slide__category"><span></span><p>Work.</p></div>
                </div>
              </div>
          <?php $slideCounter++; endforeach; ?>
          <?php wp_reset_postdata();?>
        <?php endif; ?>

      <footer class="section fp-auto-height main-footer main-footer--homepage">
        <div class="wrapper">
          <div class="main-footer__logo">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              width="110px" height="73.7px" viewBox="0 0 110 73.7" style="enable-background:new 0 0 110 73.7;" xml:space="preserve">
              <style type="text/css">
                .st0{fill:#2d2d2d;}
              </style>
              <polygon fill="white" points="41,2 108,33 69.5,71.7 2,41 "/>
              <g><path class="st0" d="M22.2,43.5l6.1-13.2c0.1-0.1,0.2-0.2,0.3-0.2h0.2c0.1,0,0.3,0.1,0.3,0.2l6.1,13.2c0.1,0.3,0,0.5-0.3,0.5h-2.2c-0.4,0-0.5-0.1-0.7-0.5l-0.7-1.5h-5.3l-0.7,1.6c-0.1,0.2-0.3,0.5-0.7,0.5h-2.2C22.3,44,22.1,43.7,22.2,43.5z M30.3,39.3L28.8,36h0l-1.5,3.2H30.3z"/></g>
              <g><path class="st0" d="M37.5,30.6c0-0.2,0.2-0.4,0.4-0.4h2.3c0.2,0,0.4,0.2,0.4,0.4v4.9h5.6v-4.9c0-0.2,0.2-0.4,0.4-0.4h2.3c0.2,0,0.4,0.2,0.4,0.4v13c0,0.2-0.2,0.4-0.4,0.4h-2.3c-0.2,0-0.4-0.2-0.4-0.4v-5.1h-5.6v5.1c0,0.2-0.2,0.4-0.4,0.4h-2.3c-0.2,0-0.4-0.2-0.4-0.4V30.6z"/></g>
              <g><path class="st0" d="M58.3,30.1c3.9,0,7,3.1,7,7.1c0,3.9-3.1,7-7,7c-3.9,0-7-3.1-7-7C51.2,33.2,54.3,30.1,58.3,30.1z M58.3,41c2.2,0,3.9-1.8,3.9-3.9c0-2.2-1.8-3.9-3.9-3.9c-2.1,0-3.9,1.8-3.9,3.9C54.4,39.3,56.1,41,58.3,41z"/></g>
              <g><path class="st0" d="M67.5,30.6c0-0.2,0.2-0.4,0.4-0.4h2.3c0.2,0,0.4,0.2,0.4,0.4v13c0,0.2-0.2,0.4-0.4,0.4h-2.3c-0.2,0-0.4-0.2-0.4-0.4V30.6z"/></g>
              <g><path class="st0" d="M72.6,43.5l6.1-13.2c0.1-0.1,0.2-0.2,0.3-0.2h0.2c0.1,0,0.3,0.1,0.3,0.2l6.1,13.2c0.1,0.3,0,0.5-0.3,0.5h-2.2c-0.4,0-0.5-0.1-0.7-0.5l-0.7-1.5h-5.3l-0.7,1.6c-0.1,0.2-0.3,0.5-0.7,0.5H73C72.7,44,72.5,43.7,72.6,43.5z M80.7,39.3L79.2,36h0l-1.5,3.2H80.7z"/></g>
            </svg>
            <h3>Creative Digital Studio</h3>
          </div>

          <div class="main-footer__r-content">
            <ul class="main-footer__links">
              <li class="main-footer__links__link">
                <a href="<?php echo site_url();?>">Home</a>
              </li>
              <li class="main-footer__links__link">
                <a href="<?php echo site_url();?>/about">About</a>
              </li>
              <li class="main-footer__links__link">
                <a href="<?php echo site_url();?>/projects">Projects</a>
              </li>
              <li class="main-footer__links__link">
                <a href="<?php echo site_url();?>/contact">Contact</a>
              </li>
            </ul>
            <p class="copyright">©Ahoia 2018</p>
          </div>

          
        </div>
      </footer>

  </section>

</main>

<?php get_footer(); ?>

<script type="text/javascript">
  (function($){

    //-------  Homepage triangle animation
		var sliderTextContainer = $('.slider-info__text-con'),
				sectionActive = $(".section.active"),
				sectionActiveAttr = sectionActive.data('slider'),
				shapeActive = $('.slider-info__text-con__item--active'),
				shapeActiveTitle = shapeActive.find(".slider-info__text-con__title"),
				shape = $('.slider-info__shape'),
				hometl = new TimelineLite({paused:true}),
				homeHidetl = new TimelineLite({paused:true});


    $('#fullpage').fullpage({
      fixedElements: '#slider-info, .full-page-slider__controls',

      afterLoad: function(anchorLink, index){

        var enteringSection = $(this),
          sliderInfoCon = $('.slider-info__text-con'),
          sectionAttr = enteringSection.data('slider'),
          sectionShape = $('body.fp-viewing-'+sectionAttr);
          shapeId = $('#item-'+sectionAttr);
          shapeId.addClass("slider-info__text-con__item--active");

        hometl
          .to($('.slider-info__text-con__item--active .container'), 0.3, {autoAlpha:1, y:0, ease: Power4.easeOut, })
          .fromTo(shape, 0.6, {transformOrigin:'50% 50%', backfaceVisibility:'hidden',}, { transformOrigin:'50% 50%', backfaceVisibility:'hidden', ease:Circ.easeInOut}, '-=0.5');

        hometl.play();
      },

      onLeave: function(index, nextIndex, direction){
        var leavingSection = $(this),
          sliderInfoCon = $('.slider-info__text-con').find('.slider-info__text-con__item--active');

        homeHidetl
          .to($('.slider-info__text-con__item--active .container'), 0.3, {autoAlpha:0, y:50, ease: Power4.easeOut})
          .fromTo(shape, 0.6, {rotationX:0, transformOrigin:'50% 50%', backfaceVisibility:'hidden', transformStyle:'preserve-3d', rotationX:0, ease:Circ.easeInOut}, {rotationX:360, transformStyle:'preserve-3d',backfaceVisibility:'hidden', transformOrigin:'50% 50%', ease:Circ.easeInOut}, '-=0.2');

        homeHidetl.play();

        sliderInfoCon.removeClass("slider-info__text-con__item--active");
      }
    });

  })(jQuery);
</script>

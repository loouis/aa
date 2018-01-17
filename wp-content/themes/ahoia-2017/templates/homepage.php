<?php /* template name: Homepage */ get_header();?>

<?php
  $posts = get_field('homepage_gallery');
  $styleCounter = 0;
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
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    </style>
  <?php endif; ?>

<main role="">
  <section>
    <div id="fullpage" class="full-page-slider">

      <div class="full-page-slider__controls">
        <span href="#" id="home_slideUp" class="btn btn-tri bx-slider__controls__arrows bx-slider__controls__arrows--prev">
          <i class="btn-tri__icon"></i>
        </span>
        <span href="#" id="home_slideDown" class="btn btn-tri bx-slider__controls__arrows bx-slider__controls__arrows--next">
          <i class="btn-tri__icon"></i>
        </span>
      </div>

      <div id="slider-info" class="full-page-slider__slider-info slider-info">
  			<div class="slider-info__text-con" id="slider-info__text-con">

          <?php
            $posts = get_field('homepage_gallery');
            $slideCounter = 0;

            if( $posts ): ?>
              <?php foreach( $posts as $post):?>
                  <?php setup_postdata($post); ?>
                  <section id="item-<?php echo $slideCounter;?>" class="slider-info__text-con__item parallax" data-speed-y="40" data-speed-x="40">
                    <a href="<?php echo the_permalink();?>" class="container">
                      <h1 class="slider-info__text-con__title"><?php the_title();?></h1>
                      <p class="slider-info__text-con__text"><?php the_excerpt();?></p>
                      <span class="btn btn-tri">
                        <i class="btn-tri__icon"></i>
                      <span>
                    </a>
          				</section>
              <?php $slideCounter++; endforeach; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>

  				<div class="slider-info__shape">
  					<div class="slider-info__shape__con" data-speed-y="30" data-speed-x="30">
  						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="110px" height="73.7px" viewBox="0 0 110 73.7" style="enable-background:new 0 0 110 73.7;" xml:space="preserve"><polygon points="41,2 108,33 69.5,71.7 2,41 "/></svg>
  					</div>
  				</div>
  			</div>
  		</div><!--  //full-page-slider__slider-info -->

      <?php
        $posts = get_field('homepage_gallery');
        $imageCounter = 0;
        $slideCounter = 0;

        if( $posts ): ?>
          <?php foreach( $posts as $post):?>
              <?php setup_postdata($post); ?>
              <div class="section" data-slider="<?php echo $slideCounter;?>">
              	<div class="home-slider__slide">
              		<div class="image-objects">
                  	<?php if( have_rows('p-hero-images') ): while( have_rows('p-hero-images') ): the_row(); $imageCounter++ ?>
                  		<div class="image-objects__obj image-objects__obj--<?php echo $imageCounter;?> parallax" style="background-image: url('<?php echo the_sub_field('p-hero-images_image');?>');?>" data-speed-y="<?php echo the_sub_field('p-hero-yspeed');?>" data-speed-x="<?php echo the_sub_field('p-hero-xspeed');?>"></div>
                  	<?php endwhile; endif;?>
              		</div><!-- //image-objects -->
              	</div>
              </div>
          <?php $slideCounter++; endforeach; ?>
          <?php wp_reset_postdata();?>
        <?php endif; ?>

  </section>

</main>

<?php get_footer(); ?>

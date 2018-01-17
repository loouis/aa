<?php
/*
Template Name: portfolio
Template Post Type: portfolio
*/

get_header();
?>

<style type="text/css">
  body, html{
		background:<?php the_field('border_color');?>;
	}
  .main-header__nav a, .main-header__contact-details a, .main-header__contact-details p{
    color:<?php the_field('portfolio_intro_bg_color');?>;
  }
  .full-hero__shape,
  .work-single-info,
  .shape-reveal--1,
  .bx-slider__controls .btn-tri__icon:after,
  .bx-slider__controls .btn-tri__icon:before{
    background:<?php the_field('portfolio_intro_bg_color');?>;
  }
  .ahoia-logo svg polygon{
    fill:<?php the_field('border_color');?>;
  }
</style>


<?php while ( have_posts() ) : the_post(); ?>

  <main role="">
    <section class="work-single-hero full-hero">

      <?php if( wp_is_mobile() ){ ?>
        <div class="work-single-hero__img" <?php if ( $thumbnail_id = get_post_thumbnail_id() ) {if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'm_full-screen' ) )printf( ' style="background-image: url(%s);"', $image_src[0] );}?>></div>
      <?php }else{ ?>
        <div class="work-single-hero__img" <?php if ( $thumbnail_id = get_post_thumbnail_id() ) {if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'm_full-screen' ) )printf( ' style="background-image: url(%s);"', $image_src[0] );}?>></div>
      <?php } ?>

			<article class="full-hero__desc">
				<h1 class="full-hero__desc__title largest"><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h1>
        <a href="#" id="scroll-down" class="btn btn-tri">
          <i class="btn-tri__icon"></i>
        </a>
			</article>

			<span class="full-hero__shape"></span>
		</section>

		<section class="work-single-info">

			<div class="work-single-info__wrapper">

				<h3 class="work-single-info__intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sapiente veniam sed, ex explicabo ad cupiditate itaque assumenda illum voluptate.</h3>

				<div class="work-single-info__wrapper__text-con">
          <article class="work-single-info__large-desc">
						<p class="work-single-info__large-desc__text"><strong>How… </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis perferendis maxime nisi vero velit sed mollitia tempora eaque delectus est quis sapiente, hic laborum vitae inventore quae possimus repudiandae itaque? Perspiciatis perferendis maxime nisi vero velit sed mollitia tempora eaque delectus est quis sapiente, hic laborum vitae inventore quae possimus repudiandae itaque?</p>
					</article>
					<article class="work-single-info__small-desc">
						<p class="work-single-info__small-desc__text"><strong>why? </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis perferendis maxime nisi vero velit sed mollitia tempora eaque delectus est quis sapiente, hic laborum vitae inventore quae possimus repudiandae itaque?</p>
					</article>
				</div><!-- //work-single-info__wrapper__text-con -->

			</div>

      <div class="work-single-info__details">
        <ul>
          <li class="work-single-info__details__wrap">
            <h4>Project</h4>
            <p>Website Experience</p>
          </li>
          <li class="work-single-info__details__wrap">
            <h4>Deliverables</h4>
            <p>Concept, Design, UX Design, Development</p>
          </li>
          <li class="work-single-info__details__wrap">
            <h4>Other info</h4>
            <p>Time frame</p>
          </li>
          <li class="work-single-info__details__wrap">
            <a href="#"><p>Website address</p></a>
          </li>
        </ul>
      </div>
		</section>

		<!-- <section class="work-single-hero full-hero full-hero--3" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/levis-hero.jpg');">

      <div class="shape-reveal wow slideInUp" data-wow-duration="5s">
				<div class="shape-reveal--1"></div>
			</div>

			<div class="wrapper">

			</div>
		</section> -->

    <section>
      <?php

// check if the flexible content field has rows of data
if( have_rows('flex_port_content') ):

 	// loop through the rows of data
    while ( have_rows('flex_port_content') ) : the_row();

		// check current row layout
        if( get_row_layout() == 'slider' ):

        	// check if the nested repeater field has rows of data
        	if( have_rows('slider_images') ):?>

            <div class="bx-slider-container">

              <div class="bx-slider__controls">
                <span href="#" class="btn btn-tri bx-slider__controls__arrows bx-slider__controls__arrows--prev">
                  <i class="btn-tri__icon"></i>
                </span>
                <span href="#" class="btn btn-tri bx-slider__controls__arrows bx-slider__controls__arrows--next">
                  <i class="btn-tri__icon"></i>
                </span>
              </div>

  			 	     <div id="bx-slider">

                <?php while ( have_rows('slider_images') ) : the_row();

        					$image = get_sub_field('slider_images_img');?>

                  <img src="<?php echo $image;?>" alt="">

        				<?php endwhile;?>

              </div><!-- bxlsider -->

            </div><!-- bxlsider- container -->

			<?php endif;

        elseif( get_row_layout() == 'images' ): ?>


         <img src="<?php echo the_sub_field('flex_port_content_img');?>" alt="">

    <?php endif ;endwhile; else : endif; ?>


    </section>
  </main>

<?php endwhile; ?>

<?php get_footer();?>

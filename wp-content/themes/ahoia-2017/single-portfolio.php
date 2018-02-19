<?php
/*
Template Name: portfolio
Template Post Type: portfolio
*/

get_header();
?>

<style type="text/css">
  .page-loader__logo-shape{
    fill:<?php the_field('border_color');?> !important;
  }
  body, html{
		background-color:<?php the_field('border_color');?>;
	}
  .main-header__nav a, .main-header__contact-details a, .main-header__contact-details p{
    color:<?php the_field('portfolio_intro_bg_color');?>;
  }
  .full-hero__shape,
  .work-single-info,
  .bx-slider__controls .btn-tri__icon:after,
  .bx-slider__controls .btn-tri__icon:before{
    background:<?php the_field('portfolio_intro_bg_color');?>;
  }
  path.ahoia-logo__letter {
    fill:<?php the_field('border_color');?>;
  }
</style>


<?php while ( have_posts() ) : the_post(); ?>

  <main role="">

    <a href="javascript:history.go(-1)" class="work-single-back-btn">
      <span></span>
    </a>

    <section class="work-single-hero full-hero">

      <?php if( wp_is_mobile() ){ ?>
        <div class="work-single-hero__img wow imgScaleIn">
          <img src="<?php echo get_field('p-mobile-hero-image')['url'];?>" alt="<?php get_field('p-mobile-hero-image')['alt']?>" class="of-cover">
        </div>
      <?php }else{ ?>
        <?php
          $post_url = get_post_thumbnail_id();
          $d_image = wp_get_attachment_image_src($post_url, 'd_large'); 
        ?>
        <div class="work-single-hero__img wow imgScaleIn">
          <img src="<?php echo $d_image[0]; ?>" class="of-cover" alt="">
        </div>
      <?php } ?>
			<article class="full-hero__desc">
				<h1 class="full-hero__desc__title largest wow slideInUp" data-wow-delay=".2s"><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h1>
        <a href="#" id="scroll-down" class="btn btn-tri wow fadeScaleIn" data-wow-delay="1.2s" data-wow-duration=".5s">
          <i class="btn-tri__icon"></i>
        </a>
			</article>
			<span class="full-hero__shape wow single-prj-angle-shape"></span>
		</section>
		<section class="work-single-info">
			<div class="work-single-info__wrapper">
				<h3 class="work-single-info__intro"><?php the_field('port-text_opening-para');?></h3>
        <a href="#0" class="work-single-info__read-more">
          <i></i>
          <p>Read more</p>
        </a>
				<div class="work-single-info__wrapper__text-con">
          <article class="work-single-info__large-desc">
						<p class="work-single-info__large-desc__text"><?php the_field('port-text_the-project');?></p>
					</article>
          <?php if(get_field('port-text_client-quote')): ?>
  					<article class="work-single-info__small-desc">
              <span>
                <i><p>“</p></i>
              </span>
  						<p class="work-single-info__small-desc__text"><?php the_field('port-text_client-quote');?></p>
  					</article>
          <?php endif; ?>
				</div><!-- //work-single-info__wrapper__text-con -->
			</div>
      <div class="work-single-info__details">
        <ul>
          <?php while( have_rows('port-b-info_repeater') ): the_row(); ?>
            <li class="work-single-info__details__wrap">
              <h4><?php the_sub_field('port-b-info_title');?></h4>
              <p><?php the_sub_field('port-b-info_text');?></p>
            </li>
          <?php endwhile;  ?>
          <?php if( get_field('port-b-info_link') ): ?>
            <li class="work-single-info__details__wrap">
              <a href="<?php echo the_field('port-b-info_link');?>"><p>Website address</p></a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
		</section>

    <section class="single-work__images">
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
                    $desktop_id = get_sub_field('slider_images_img');
                    $mobile_id = get_sub_field('slider_images_m_img');
                  ?>

                  <picture>
                    <source media="(min-width: 700px)" srcset="<?php echo $desktop_id['sizes']['d_large']?>" />
                    <?php if( get_sub_field('slider_images_m_img') ){ ?>
                      <img class="" alt="<?php $mobile_id['alt'];?>" src="<?php echo $mobile_id['sizes']['m_full-screen']?>">
                    <?php }else{ ?>
                      <img class="" alt="<?php $desktop_id['alt'];?>" src="<?php echo $desktop_id['sizes']['m_full-screen']?>">
                    <?php } ?>
                  </picture>

        				<?php endwhile;?>

              </div><!-- bxlsider -->

            </div><!-- bxlsider- container -->

			<?php endif;

        elseif( get_row_layout() == 'images' ): ?>

        <?php
          $desktop_ID = get_sub_field('flex_port_content_img');
          $mobile_ID = get_sub_field('flex_port_content_m_img');
        ?>

        <picture>
          <source media="(min-width: 700px)" data-srcset="<?php echo $desktop_ID['url'];?>" />
          <?php if( get_sub_field('flex_port_content_m_img') ){ ?>
            <img class="lazy" alt="<?php echo $mobile_ID['alt'] ?>" src="<?php echo $mobile_ID['url']?>">
          <?php }else{ ?>
            <img class="lazy" alt="<?php echo $desktop_ID['alt'] ?>" src="<?php echo $desktop_ID['sizes']['m_full-screen'];?>">
          <?php } ?>
        </picture>

    <?php endif ;endwhile; else : endif; ?>


    </section>
  </main>

<?php endwhile; ?>

<?php get_footer();?>

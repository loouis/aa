<?php /* Template Name: Projects Template  */ get_header();?>


<?php
  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => '-1',
  );
  $query = new WP_Query( $args );
?>

<main role="">

  <div class="container all-work full-page-slider">

    <?php while( $query->have_posts() ) : $query->the_post(); ?>

      <a href="<?php echo the_permalink(); ?>" class="all-work__item" style="background-color:#1C253A;">


        <div class="section" data-slider="<?php echo $slideCounter;?>">
        	<div class="home-slider__slide">
        		<div class="image-objects">
            	<?php if( have_rows('p-hero-images') ): while( have_rows('p-hero-images') ): the_row(); $imageCounter++ ?>
            		<div class="image-objects__obj image-objects__obj--<?php echo $imageCounter;?> parallax" style="background-image: url('<?php echo the_sub_field('p-hero-images_image');?>');?>" data-speed-y="<?php echo the_sub_field('p-hero-yspeed');?>" data-speed-x="<?php echo the_sub_field('p-hero-xspeed');?>"></div>
            	<?php endwhile; endif;?>
        		</div><!-- //image-objects -->
        	</div>
        </div>


        <!-- <figure class="all-work__item__img parallax" data-speed-y="24" data-speed-x="24" style="background-image:url('images/levis-hero.jpg');"></figure> -->

        <div class="all-work__item__text-con">
          <h3 class="all-work__item__text-con__title " data-speed-y="30" data-speed-x="30"><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h3>

          <div class="all-work__item__text-con__shape " data-speed-y="40" data-speed-x="40">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="110px" height="73.7px" viewBox="0 0 110 73.7" style="enable-background:new 0 0 110 73.7;" xml:space="preserve">
              <style type="text/css">
                .st0{fill:#006664;}
              </style>
              <polygon points="41,2 108,33 69.5,71.7 2,41 "/>
            </svg>
          </div><!-- //all-work__item__text-con__shape -->

        </div>

        <!-- <img src="images/all-work-image.jpg" alt="" class="all-work__item__img"> -->
      </a>

    <?php endwhile; ?>

  </div>

</main>




<?php get_footer(); ?>

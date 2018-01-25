<?php /* Template Name: Projects Template  */ get_header();?>

<?php
  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => '-1',
  );
  $query = new WP_Query( $args );
?>


<?php
  $styleCounter = 0;
  $mainClass = '.all-work__item';
  $counter = -1;
?>


<style type="text/css">

  <?php while( $query->have_posts() ) : $query->the_post(); ?>

      <?php echo $mainClass;?>--<?php echo $styleCounter;?> .all-work__item__text-con__shape svg{
				fill:<?php the_field('border_color');?>;
    	}
    <?php $styleCounter++; ?>

  <?php endwhile; wp_reset_postdata(); ?>
</style>




<main role="">

  <div class="container all-work full-page-slider">

    <?php while( $query->have_posts() ) : $query->the_post(); $counter++;?>

      <a href="<?php echo the_permalink(); ?>" class="all-work__item all-work__item--<?php echo $counter; ?>" style="background-color:#1C253A;">


        <div class="section" data-slider="<?php echo $slideCounter;?>">
      		<div class="image-objects">
          	<?php if( have_rows('p-hero-images') ): while( have_rows('p-hero-images') ): the_row(); $imageCounter++ ?>
          		<div class="image-objects__obj image-objects__obj--<?php echo $imageCounter;?>  parallax lazy" data-src="<?php echo the_sub_field('p-hero-images_image');?>" data-speed-y="<?php echo the_sub_field('p-hero-yspeed');?>" data-speed-x="<?php echo the_sub_field('p-hero-xspeed');?>"></div>
          	<?php endwhile; endif;?>
      		</div><!-- //image-objects -->
        </div>

        <div class="all-work__item__text-con">

          <h1 class="all-work__item__text-con__title"><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h1>

          <div class="all-work__item__text-con__shape">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="110px" height="73.7px" viewBox="0 0 110 73.7" style="enable-background:new 0 0 110 73.7;" xml:space="preserve">
              <style type="text/css">
                .st0{fill:#2d2d2d;}
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

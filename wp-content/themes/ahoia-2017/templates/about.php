<?php /* Template Name: About page */ get_header(); ?>

<?php
  $brisbaneCurrentTime = date_default_timezone_set('Australia/Brisbane');
  $heroImageId = get_post_thumbnail_id();
  $d_heroImage = wp_get_attachment_image_src($heroImageId, 'large');
  $m_heroImage = wp_get_attachment_image_src($heroImageId, 'm_full-screen');
?>

<main role="">
  <section>

    <div id="fullpageAbout" class="full-page-slider">

      <a href="#0" id="home_slideDown" class="full-page-slider__timeline-no">
        <span>
          <div class="container">
            <p class="full-page-slider__timeline-no__no">&nbsp;</p>
            <p class="full-page-slider__timeline-no__no">1.</p>
            <p class="full-page-slider__timeline-no__no">2.</p>
            <p class="full-page-slider__timeline-no__no">3.</p>
          </div>
        </span>
        <p class="full-page-slider__timeline-no__text">Our Services</p>
      </a>

    <?php if( wp_is_mobile() ){ ?>
      <div class="section full-page-slider__slide full-page-slider__slide--01 cover" <?php if ( $thumbnail_id = get_post_thumbnail_id() ) {if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'm_full-screen' ) )printf( ' style="background-image: url(%s);"', $image_src[0] );}?>>
    <?php }else{ ?>
      <div class="section full-page-slider__slide full-page-slider__slide--01 cover" <?php if ( $thumbnail_id = get_post_thumbnail_id() ) {if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'm_full-screen' ) )printf( ' style="background-image: url(%s);"', $image_src[0] );}?>>
    <?php } ?>
        <span class="number-timeline"></span>
        <div class="wrapper">
          <div class="full-page-slider__slide__ahoia-logo">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 viewBox="0 0 238 157.8" enable-background="new 0 0 238 157.8" xml:space="preserve">
              <g>
              	<g>
              		<polygon fill="#010101" points="87.5,1.9 1,88.4 150.9,156.5 236.2,70.8 		"/>
              	</g>
              </g>
              <g>
            	<path fill="#FFFFFF" d="M139.1,55.4h-4.4c-0.4,0-0.7,0.3-0.7,0.7v24c0,0.4,0.3,0.7,0.7,0.7h4.4c0.4,0,0.7-0.3,0.7-0.7v-24
            		C139.8,55.7,139.5,55.4,139.1,55.4z"/>
            	<path fill="#FFFFFF" d="M117,55c-7.3,0-13,5.8-13,13.1c0,7.3,5.8,13,13,13c7.3,0,13.1-5.8,13.1-13C130,60.9,124.2,55,117,55z
            		 M117,75.3c-4,0-7.2-3.3-7.2-7.2c0-4,3.3-7.3,7.2-7.3c4,0,7.3,3.3,7.3,7.3C124.2,72.1,121,75.3,117,75.3z"/>
            	<path fill="#FFFFFF" d="M99.5,55.4h-4.3c-0.4,0-0.7,0.3-0.7,0.7v9.2H84.1v-9.2c0-0.4-0.3-0.7-0.7-0.7h-4.3c-0.4,0-0.7,0.3-0.7,0.7
            		v24c0,0.4,0.3,0.7,0.7,0.7h4.3c0.4,0,0.7-0.3,0.7-0.7v-9.6h10.4v9.6c0,0.4,0.3,0.7,0.7,0.7h4.3c0.4,0,0.7-0.3,0.7-0.7v-24
            		C100.2,55.7,99.9,55.4,99.5,55.4z"/>
            	<path fill="#FFFFFF" d="M63,55.4c-0.1-0.2-0.4-0.4-0.6-0.4H62c-0.3,0-0.5,0.2-0.6,0.4L50.1,79.8c-0.2,0.5,0.1,0.9,0.6,0.9h4
            		c0.7,0,1.1-0.4,1.3-0.9l1.3-2.9h9.9l1.3,2.9c0.3,0.7,0.6,0.9,1.3,0.9h4c0.5,0,0.8-0.5,0.6-0.9L63,55.4z M59.5,72.1l2.7-6l0,0l2.8,6
            		H59.5z"/>
            	<path fill="#FFFFFF" d="M168,79.8l-11.4-24.4c-0.1-0.2-0.4-0.4-0.6-0.4h-0.4c-0.3,0-0.5,0.2-0.6,0.4l-11.4,24.4
            		c-0.2,0.5,0.1,0.9,0.6,0.9h4c0.7,0,1.1-0.4,1.3-0.9l1.3-2.9h9.9l1.3,2.9c0.3,0.7,0.6,0.9,1.3,0.9h4C167.9,80.8,168.2,80.3,168,79.8
            		z M153.1,72.1l2.7-6l0,0l2.8,6H153.1z"/>
            </g>
            <g>
            	<path fill="#FFFFFF" d="M53.7,88.4c1.1,0,1.9,0.4,2.7,1c0.1,0.1,0.1,0.2,0,0.3l-0.5,0.5c-0.1,0.1-0.2,0.1-0.3,0
            		c-0.5-0.5-1.2-0.7-1.9-0.7c-1.6,0-2.8,1.3-2.8,2.9s1.2,2.8,2.8,2.8c0.8,0,1.4-0.3,1.9-0.7c0.1-0.1,0.2-0.1,0.3,0l0.5,0.5
            		c0.1,0.1,0.1,0.2,0,0.3c-0.7,0.7-1.7,1.1-2.7,1.1c-2.2,0-4-1.8-4-4S51.5,88.4,53.7,88.4z"/>
            	<path fill="#FFFFFF" d="M57.6,92c0-0.1,0.1-0.2,0.2-0.2h0.3c0.1,0,0.2,0.1,0.2,0.2l0.1,0.4c0.1-0.1,0.5-0.6,1.3-0.6
            		c0.4,0,0.9,0.1,0.8,0.4l-0.3,0.5c-0.1,0.1-0.2,0.1-0.3,0.1s-0.2-0.1-0.4-0.1c-0.6,0-0.9,0.5-1,0.5V96c0,0.2-0.1,0.2-0.3,0.2h-0.5
            		c-0.1,0-0.2-0.1-0.2-0.2v-4H57.6z"/>
            	<path fill="#FFFFFF" d="M63.3,91.7c1.1,0,2,0.9,2,2c0,0.1,0,0.2,0,0.3c0,0.1-0.1,0.2-0.2,0.2h-3c0,0.6,0.6,1.2,1.3,1.2
            		c0.4,0,0.8-0.2,1-0.3c0.1-0.1,0.2-0.1,0.3,0l0.3,0.4c0.1,0.1,0.1,0.2,0,0.3c-0.3,0.3-0.9,0.6-1.6,0.6c-1.3,0-2.2-1-2.2-2.3
            		C61.1,92.8,62,91.7,63.3,91.7z M64.3,93.5c0-0.5-0.5-1-1-1c-0.6,0-1.1,0.4-1.1,1H64.3z"/>
            	<path fill="#FFFFFF" d="M68,93.4c0.5,0,0.9,0.1,0.9,0.1c0-0.7-0.1-1-0.7-1c-0.5,0-1,0.1-1.2,0.2c-0.1,0-0.2-0.1-0.2-0.2l-0.1-0.4
            		c0-0.1,0-0.2,0.1-0.3c0.1,0,0.7-0.3,1.5-0.3c1.4,0,1.5,0.9,1.5,2V96c0,0.1-0.1,0.2-0.2,0.2h-0.3c-0.1,0-0.1,0-0.2-0.2L69,95.8
            		c-0.2,0.2-0.7,0.6-1.4,0.6c-0.8,0-1.4-0.6-1.4-1.5C66.2,94,66.8,93.4,68,93.4z M67.8,95.5c0.4,0,0.9-0.3,1-0.5v-0.7
            		c-0.1,0-0.4-0.2-0.8-0.2c-0.5,0-0.9,0.3-0.9,0.7C67.2,95.2,67.4,95.5,67.8,95.5z"/>
            	<path fill="#FFFFFF" d="M71.6,92.7h-0.5c-0.1,0-0.2-0.1-0.2-0.2V92c0-0.1,0.1-0.2,0.2-0.2h0.5v-1.2c0-0.1,0.1-0.2,0.2-0.2h0.6
            		c0.1,0,0.2,0.1,0.2,0.2v1.2h1.1c0.1,0,0.2,0.1,0.2,0.2v0.5c0,0.1-0.1,0.2-0.2,0.2h-1.1v2.2c0,0.4,0.1,0.4,0.4,0.4
            		c0.2,0,0.5-0.1,0.7-0.2c0.1-0.1,0.2,0,0.3,0.1l0.2,0.5c0.1,0.1,0,0.2-0.1,0.3c-0.1,0.1-0.8,0.3-1.3,0.3c-0.9,0-1.1-0.5-1.1-1.3
            		L71.6,92.7L71.6,92.7z"/>
            	<path fill="#FFFFFF" d="M75.2,89.4c0-0.4,0.3-0.6,0.6-0.6c0.4,0,0.6,0.3,0.6,0.6c0,0.4-0.3,0.6-0.6,0.6S75.2,89.7,75.2,89.4z
            		 M75.3,92c0-0.1,0.1-0.2,0.2-0.2h0.6c0.1,0,0.2,0.1,0.2,0.2v4c0,0.1-0.1,0.2-0.2,0.2h-0.6c-0.1,0-0.2-0.1-0.2-0.2V92z"/>
            	<path fill="#FFFFFF" d="M77.4,92.1c-0.1-0.1,0-0.3,0.2-0.3h0.6c0.1,0,0.2,0.1,0.2,0.1l1.1,2.6l0,0l1.2-2.6c0.1-0.1,0.2-0.1,0.3-0.1
            		h0.5c0.2,0,0.2,0.1,0.2,0.3l-1.9,4.1c0,0.1-0.1,0.1-0.2,0.1h-0.1c-0.1,0-0.2-0.1-0.2-0.1L77.4,92.1z"/>
            	<path fill="#FFFFFF" d="M84.6,91.7c1.1,0,2,0.9,2,2c0,0.1,0,0.2,0,0.3c0,0.1-0.1,0.2-0.2,0.2h-3c0,0.6,0.6,1.2,1.3,1.2
            		c0.4,0,0.8-0.2,1-0.3c0.1-0.1,0.2-0.1,0.3,0l0.3,0.4c0.1,0.1,0.1,0.2,0,0.3c-0.3,0.3-0.9,0.6-1.6,0.6c-1.3,0-2.2-1-2.2-2.3
            		C82.4,92.8,83.2,91.7,84.6,91.7z M85.6,93.5c0-0.5-0.5-1-1-1c-0.6,0-1.1,0.4-1.1,1H85.6z"/>
            	<path fill="#FFFFFF" d="M90.7,88.7c0-0.1,0.1-0.2,0.2-0.2h2.5c2.1,0,3.9,1.7,3.9,3.8c0,2.1-1.7,3.9-3.9,3.9h-2.5
            		c-0.1,0-0.2-0.1-0.2-0.2V88.7z M93.3,95.2c1.6,0,2.8-1.2,2.8-2.8c0-1.6-1.2-2.8-2.8-2.8h-1.5v5.6C91.8,95.2,93.3,95.2,93.3,95.2z"
            		/>
            	<path fill="#FFFFFF" d="M98.4,89.4c0-0.4,0.3-0.6,0.6-0.6c0.4,0,0.6,0.3,0.6,0.6c0,0.4-0.3,0.6-0.6,0.6
            		C98.7,90,98.4,89.7,98.4,89.4z M98.6,92c0-0.1,0.1-0.2,0.2-0.2h0.6c0.1,0,0.2,0.1,0.2,0.2v4c0,0.1-0.1,0.2-0.2,0.2h-0.6
            		c-0.1,0-0.2-0.1-0.2-0.2V92z"/>
            	<path fill="#FFFFFF" d="M101.5,94.7c0,0-0.3-0.4-0.3-1.1c0-1,0.8-1.9,1.9-1.9h1.9c0.1,0,0.2,0.1,0.2,0.2v0.3c0,0.1,0,0.2-0.1,0.2
            		l-0.6,0.2c0,0,0.5,0.4,0.5,1.2c0,0.9-0.7,1.8-1.9,1.8c-0.6,0-0.9-0.2-1-0.2s-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h1.5
            		c1,0,1.7,0.5,1.7,1.5s-0.9,1.8-2.3,1.8c-1.6,0-2.2-0.8-2.2-1.5s0.5-1,0.6-1l0,0c-0.2-0.1-0.8-0.4-0.8-1.1
            		C100.8,95.1,101.5,94.7,101.5,94.7z M103.1,98.7c0.7,0,1.3-0.3,1.3-0.9c0-0.2-0.1-0.6-0.8-0.6c-0.3,0-0.6,0-1,0
            		c-0.1,0-0.6,0.2-0.6,0.7C102,98.4,102.4,98.7,103.1,98.7z M104,93.6c0-0.6-0.4-1-0.9-1c-0.6,0-1,0.4-1,1s0.4,1,1,1
            		C103.7,94.7,104,94.2,104,93.6z"/>
            	<path fill="#FFFFFF" d="M106.3,89.4c0-0.4,0.3-0.6,0.6-0.6c0.4,0,0.6,0.3,0.6,0.6c0,0.4-0.3,0.6-0.6,0.6
            		C106.6,90,106.3,89.7,106.3,89.4z M106.4,92c0-0.1,0.1-0.2,0.2-0.2h0.6c0.1,0,0.2,0.1,0.2,0.2v4c0,0.1-0.1,0.2-0.2,0.2h-0.6
            		c-0.1,0-0.2-0.1-0.2-0.2V92z"/>
            	<path fill="#FFFFFF" d="M109.4,92.7h-0.5c-0.1,0-0.2-0.1-0.2-0.2V92c0-0.1,0.1-0.2,0.2-0.2h0.5v-1.2c0-0.1,0.1-0.2,0.2-0.2h0.6
            		c0.1,0,0.2,0.1,0.2,0.2v1.2h1.1c0.1,0,0.2,0.1,0.2,0.2v0.5c0,0.1-0.1,0.2-0.2,0.2h-1.1v2.2c0,0.4,0.1,0.4,0.4,0.4
            		c0.2,0,0.5-0.1,0.7-0.2c0.1-0.1,0.2,0,0.3,0.1l0.2,0.5c0.1,0.1,0,0.2-0.1,0.3c-0.1,0.1-0.8,0.3-1.3,0.3c-0.9,0-1.1-0.5-1.1-1.3
            		L109.4,92.7L109.4,92.7z"/>
            	<path fill="#FFFFFF" d="M114.5,93.4c0.5,0,0.9,0.1,0.9,0.1c0-0.7-0.1-1-0.7-1c-0.5,0-1,0.1-1.2,0.2c-0.1,0-0.2-0.1-0.2-0.2
            		l-0.1-0.4c0-0.1,0-0.2,0.1-0.3c0.1,0,0.7-0.3,1.5-0.3c1.4,0,1.5,0.9,1.5,2V96c0,0.1-0.1,0.2-0.2,0.2h-0.3c-0.1,0-0.1,0-0.2-0.2
            		l-0.1-0.3c-0.2,0.2-0.7,0.6-1.4,0.6c-0.8,0-1.4-0.6-1.4-1.5C112.7,94,113.4,93.4,114.5,93.4z M114.3,95.5c0.4,0,0.9-0.3,1-0.5v-0.7
            		c-0.1,0-0.4-0.2-0.8-0.2c-0.5,0-0.9,0.3-0.9,0.7C113.7,95.2,113.9,95.5,114.3,95.5z"/>
            	<path fill="#FFFFFF" d="M117.9,88.7c0-0.1,0.1-0.2,0.2-0.2h0.6c0.1,0,0.2,0.1,0.2,0.2V96c0,0.1-0.1,0.2-0.2,0.2h-0.6
            		c-0.1,0-0.2-0.1-0.2-0.2V88.7z"/>
            	<path fill="#FFFFFF" d="M122.4,95.9l3.4-7.4c0-0.1,0.1-0.1,0.2-0.1h0.1c0.1,0,0.2,0.1,0.2,0.1l3.4,7.4c0.1,0.1,0,0.3-0.2,0.3h-0.7
            		c-0.1,0-0.2-0.1-0.3-0.2l-0.7-1.5h-3.6c-0.2,0.5-0.5,1-0.7,1.5c0,0.1-0.1,0.2-0.3,0.2h-0.7C122.4,96.2,122.3,96.1,122.4,95.9z
            		 M127.4,93.6l-1.4-3l0,0l-1.3,3H127.4z"/>
            	<path fill="#FFFFFF" d="M130.9,94.7c0,0-0.3-0.4-0.3-1.1c0-1,0.8-1.9,1.9-1.9h1.9c0.1,0,0.2,0.1,0.2,0.2v0.3c0,0.1,0,0.2-0.1,0.2
            		l-0.6,0.2c0,0,0.5,0.4,0.5,1.2c0,0.9-0.7,1.8-1.9,1.8c-0.6,0-0.9-0.2-1-0.2c-0.1,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h1.5
            		c1,0,1.7,0.5,1.7,1.5s-0.9,1.8-2.3,1.8c-1.6,0-2.2-0.8-2.2-1.5s0.5-1,0.6-1l0,0c-0.2-0.1-0.8-0.4-0.8-1.1
            		C130.1,95.1,130.9,94.7,130.9,94.7z M132.4,98.7c0.7,0,1.3-0.3,1.3-0.9c0-0.2-0.1-0.6-0.8-0.6c-0.3,0-0.6,0-1,0
            		c-0.1,0-0.6,0.2-0.6,0.7C131.3,98.4,131.7,98.7,132.4,98.7z M133.4,93.6c0-0.6-0.4-1-0.9-1c-0.6,0-1,0.4-1,1s0.4,1,1,1
            		C133,94.7,133.4,94.2,133.4,93.6z"/>
            	<path fill="#FFFFFF" d="M137.6,91.7c1.1,0,2,0.9,2,2c0,0.1,0,0.2,0,0.3c0,0.1-0.1,0.2-0.2,0.2h-3c0,0.6,0.5,1.2,1.3,1.2
            		c0.4,0,0.8-0.2,1-0.3c0.1-0.1,0.2-0.1,0.3,0l0.3,0.4c0.1,0.1,0.1,0.2,0,0.3c-0.3,0.3-0.9,0.6-1.6,0.6c-1.3,0-2.2-1-2.2-2.3
            		C135.4,92.8,136.3,91.7,137.6,91.7z M138.6,93.5c0-0.5-0.5-1-1-1c-0.6,0-1.1,0.4-1.1,1H138.6z"/>
            	<path fill="#FFFFFF" d="M140.9,92c0-0.1,0.1-0.2,0.2-0.2h0.3c0.1,0,0.2,0.1,0.2,0.1l0.1,0.4c0.1-0.1,0.7-0.6,1.5-0.6
            		c1.3,0,1.8,0.9,1.8,2.1V96c0,0.1-0.1,0.2-0.2,0.2h-0.6c-0.1,0-0.2-0.1-0.2-0.2v-2.3c0-0.7-0.3-1.1-0.9-1.1c-0.7,0-1.2,0.5-1.2,0.7
            		V96c0,0.1-0.1,0.2-0.3,0.2H141c-0.1,0-0.2-0.1-0.2-0.2L140.9,92L140.9,92z"/>
            	<path fill="#FFFFFF" d="M148.6,91.7c0.7,0,1.2,0.3,1.6,0.8c0.1,0.1,0.1,0.2,0,0.3l-0.4,0.3c-0.1,0.1-0.2,0-0.3,0
            		c-0.2-0.2-0.5-0.4-0.9-0.4c-0.7,0-1.3,0.6-1.3,1.4s0.5,1.4,1.3,1.4c0.6,0,0.8-0.3,1-0.5c0.1-0.1,0.2-0.1,0.3,0l0.3,0.2
            		c0.1,0.1,0.2,0.2,0.1,0.3c-0.4,0.6-0.9,0.9-1.7,0.9c-1.2,0-2.3-1-2.3-2.3C146.3,92.7,147.4,91.7,148.6,91.7z"/>
            	<path fill="#FFFFFF" d="M151,92.1c-0.1-0.1,0-0.3,0.2-0.3h0.7c0.1,0,0.2,0.1,0.2,0.1l1.4,2.9l0,0l1.3-2.9c0-0.1,0.1-0.1,0.2-0.1
            		h0.6c0.2,0,0.3,0.1,0.2,0.3l-3.4,7.3c0,0.1-0.1,0.1-0.2,0.1h-0.7c-0.2,0-0.3-0.1-0.2-0.3l1.5-3.2L151,92.1z"/>
            </g>
            </svg>

          </div>
          <div class="full-page-slider__slide__ahoia-text">
            <div class="full-page-slider__slide__ahoia-text__quote">
              <ul>
                <li><p><span>“</span> Couldn't ask for a better company <span>”</span></p></li>
              </ul>
            </div>
            <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
          </div>
        </div>
      </div>

      <div class="section full-page-slider__slide full-page-slider__slide full-page-slider__slide--02">
        <span class="number-timeline"></span>
        <div class="wrapper">
          <div class="full-page-slider__slide__text-con">
            <span class="mobile-timeline-no"><p>1</p></span>
            <span class="mask"><h1>Strategy.</h1></span>
            <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <div class="full-page-slider__slide__services">
            <ul>
              <li><p class="large">Business Consulting</p></li>
              <li><p class="large">Brand identity and Design</p></li>
              <li><p class="large">Research</p></li>
              <li><p class="large">Concepting & Prototyping</p></li>
              <li><p class="large">Usability Testing</p></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="section full-page-slider__slide full-page-slider__slide full-page-slider__slide--03">
        <span class="number-timeline"></span>
        <div class="wrapper">
          <div class="full-page-slider__slide__text-con">
            <span class="mobile-timeline-no"><p>2</p></span>
            <span class="mask"><h1>Product.</h1></span>
            <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <div class="full-page-slider__slide__services">
            <ul>
              <li><p class="large">Mobile Apps & Responsive Websites</p></li>
              <li><p class="large">2D & 3D Motion Design</p></li>
              <li><p class="large">Video</p></li>
              <li><p class="large">Creative Engineering</p></li>
              <li><p class="large">Design Systems</p></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="section full-page-slider__slide full-page-slider__slide full-page-slider__slide--04">
        <span class="number-timeline"></span>
        <div class="wrapper">
          <div class="full-page-slider__slide__text-con">
            <span class="mobile-timeline-no"><p>3</p></span>
            <span class="mask"><h1>Marketing.</h1></span>
            <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <div class="full-page-slider__slide__services">
            <ul>
              <li><p class="large">Social & Content Strategy</p></li>
              <li><p class="large">Social Campaigns</p></li>
              <li><p class="large">Search Optimisation</p></li>
              <li><p class="large">Digital Advertising</p></li>
              <li><p class="large">Analytics</p></li>
            </ul>
          </div>
        </div>
      </div>

      <section class="contact-page section">
        <div class="wrap">
          <section class="left-content">

            <div class="content">
              <h3 class="hey">G'day</h3>

              <div class="ahoia-time-place">

                <div class="ahoia-time-place__time">
                  <div class="ahoia-time-place__time__clock">
                    <p><?php $brisbaneCurrentTime; $dt = new DateTime();echo $dt->format('H:i');?></p>
                    <p class="am-pm"><?php  $brisbaneCurrentTime; $dt = new DateTime();echo $dt->format('A');?></p>
                  </div>

                  <?php
                    $currentTime = $dt->format('H:i');
                    $startTime = '09:00';
                    $endTime = '18:00';
                    $currentDay = date('D');
                    $closedDaySun = 'sun';
                    $closedDaySat = 'sat';

                    if( ($currentDay == $closedDaySun || $currentDay == $closedDaySat) ){
                      echo "<div class='ahoia-time-place__time__open-hrs'>
                              <i>
                                <svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                   viewBox='0 0 67.9 67.9' enable-background='new 0 0 67.9 67.9' xml:space='preserve'>
                                  <g>
                                    <path fill='#010101' d='M35.8,56.6c-2.7,0-5.3-0.4-7.9-1.3c-6.3-2.1-11.5-6.6-14.5-12.5c-6-12.1-1.5-26.6,10.3-33.1l2.1-1.1
                                      l-0.6,2.3c-1.5,5.5-0.9,11.2,1.6,16.3c2.8,5.5,7.5,9.6,13.3,11.5c5.8,1.9,12.1,1.5,17.6-1.3l0,0c0.2-0.1,0.5-0.3,0.7-0.4l2.1-1.1
                                      l-0.6,2.3C58,45,53.3,50.8,47,54C43.4,55.7,39.6,56.6,35.8,56.6z M22.7,12.7c-9.4,6.4-12.8,18.8-7.5,29.3
                                      c5.7,11.3,19.5,15.9,30.9,10.3c5.2-2.6,9.1-7,11.2-12.4c-5.6,2.4-11.9,2.7-17.8,0.7C33.2,38.5,28,34,25,28
                                      C22.6,23.3,21.9,17.9,22.7,12.7z'/>
                                  </g>
                                </svg>
                              </i>
                              <p>Closed</p>
                            </div>";
                    }elseif( ($startTime < $currentTime) && ($currentTime < $endTime) ){
                      echo "<div class='ahoia-time-place__time__open-hrs'>
                              <i>
                                <svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                   viewBox='0 0 67.9 67.9' enable-background='new 0 0 67.9 67.9' xml:space='preserve'>
                                <g>
                                  <path fill='#010101' d='M34,48.6c-8.1,0-14.7-6.6-14.7-14.7c0-8.1,6.6-14.7,14.7-14.7c8.1,0,14.7,6.6,14.7,14.7
                                    C48.6,42,42,48.6,34,48.6z M34,21.3c-7,0-12.7,5.7-12.7,12.7S27,46.6,34,46.6S46.6,40.9,46.6,34S40.9,21.3,34,21.3z'/>
                                  <path fill='#010101' d='M34,14c-0.6,0-1-0.4-1-1V7.5c0-0.6,0.4-1,1-1s1,0.4,1,1V13C35,13.5,34.5,14,34,14z'/>
                                  <path fill='#010101' d='M34,61.4c-0.6,0-1-0.4-1-1v-5.5c0-0.6,0.4-1,1-1s1,0.4,1,1v5.5C35,60.9,34.5,61.4,34,61.4z'/>
                                  <path fill='#010101' d='M60.4,35h-5.5c-0.6,0-1-0.4-1-1s0.4-1,1-1h5.5c0.6,0,1,0.4,1,1S60.9,35,60.4,35z'/>
                                  <path fill='#010101' d='M13,35H7.5c-0.6,0-1-0.4-1-1s0.4-1,1-1H13c0.6,0,1,0.4,1,1S13.5,35,13,35z'/>
                                  <path fill='#010101' d='M48.8,20.1c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l5.2-5.2c0.4-0.4,1-0.4,1.4,0s0.4,1,0,1.4l-5.2,5.2
                                    C49.3,20,49,20.1,48.8,20.1z'/>
                                  <path fill='#010101' d='M13.9,55c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l5.2-5.2c0.4-0.4,1-0.4,1.4,0s0.4,1,0,1.4l-5.2,5.2
                                    C14.4,54.9,14.2,55,13.9,55z'/>
                                  <path fill='#010101' d='M54,55c-0.3,0-0.5-0.1-0.7-0.3l-5.2-5.2c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l5.2,5.2c0.4,0.4,0.4,1,0,1.4
                                    C54.5,54.9,54.3,55,54,55z'/>
                                  <path fill='#010101' d='M19.1,20.1c-0.3,0-0.5-0.1-0.7-0.3l-5.2-5.2c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l5.2,5.2c0.4,0.4,0.4,1,0,1.4
                                    C19.6,20,19.4,20.1,19.1,20.1z'/>
                                </g>
                                </svg>
                              </i>
                              <p>Open</p>
                            </div>";
                    }else{
                      echo "<div class='ahoia-time-place__time__open-hrs'>
                              <i>
                                <svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                   viewBox='0 0 67.9 67.9' enable-background='new 0 0 67.9 67.9' xml:space='preserve'>
                                   <g>
                                     <path fill='#010101' d='M35.8,56.6c-2.7,0-5.3-0.4-7.9-1.3c-6.3-2.1-11.5-6.6-14.5-12.5c-6-12.1-1.5-26.6,10.3-33.1l2.1-1.1
                                      l-0.6,2.3c-1.5,5.5-0.9,11.2,1.6,16.3c2.8,5.5,7.5,9.6,13.3,11.5c5.8,1.9,12.1,1.5,17.6-1.3l0,0c0.2-0.1,0.5-0.3,0.7-0.4l2.1-1.1
                                      l-0.6,2.3C58,45,53.3,50.8,47,54C43.4,55.7,39.6,56.6,35.8,56.6z M22.7,12.7c-9.4,6.4-12.8,18.8-7.5,29.3
                                      c5.7,11.3,19.5,15.9,30.9,10.3c5.2-2.6,9.1-7,11.2-12.4c-5.6,2.4-11.9,2.7-17.8,0.7C33.2,38.5,28,34,25,28
                                      C22.6,23.3,21.9,17.9,22.7,12.7z'/>
                                    </g>
                                </svg>
                              </i>
                              <p>Closed</p>
                            </div>";
                    }
                  ?>
                </div>

                <p class="ahoia-time-place__location">Brisbane & Gold Coast</p>

              </div>

              <div class="ahoia-contact">
                <h1>Start your new project with us.</h1>

                <div class="ahoia-contact__details">
                  <div>
                    <h3>Become a Client.</h3>
                    <a href="tel:<?php the_field('ahoia_biz-no', 'option') ?>"><?php the_field('ahoia_biz-no', 'option') ?></a>
                    <a href="mailto:<?php the_field('ahoia_biz-email', 'option');?>"><?php the_field('ahoia_biz-email', 'option') ?></a>
                  </div>

                  <div>
                    <h3>Everything else.</h3>
                    <a href="tel:<?php the_field('ahoia_general-no', 'option') ?>"><?php the_field('ahoia_general-no', 'option') ?></a>
                    <a href="mailto:<?php the_field('ahoia_general-email', 'option') ?>"><?php the_field('ahoia_general-email', 'option') ?></a>
                  </div>
                </div>
              </div>
            </div><!-- //content -->

          </section>

          <section class="right-content">
            <?php if( wp_is_mobile() ){ ?>
            <?php }else{ ?>
              <div class="image cover" style="background-image:url('<?php echo the_field('ahoia_contact-img', 'option');?>')"></div>
            <?php } ?>
          </section>

        </div><!-- //wrap -->
      </section>

    </div>
  </section>
</main>

<?php get_footer(); ?>

<script type="text/javascript">
  (function($){
    $('#fullpageAbout').fullpage({
      loopBottom: false,
      responsiveWidth: 1000,
      fixedElements: '.full-page-slider__timeline-no',
    });
  })(jQuery);
</script>

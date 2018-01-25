<?php /* Template Name: Contact page */ get_header();?>

<?php
  $brisbaneCurrentTime = date_default_timezone_set('Australia/Brisbane');
  $heroImageId = get_post_thumbnail_id();
  $d_heroImage = wp_get_attachment_image_src($heroImageId, 'large');
  $m_heroImage = wp_get_attachment_image_src($heroImageId, 'm_full-screen');
?>

  <main role="">
    <section class="contact-page">
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
            <h1>We're here for you.</br>Say Hi.</h1>

            <div class="ahoia-contact__details">
              <div class="">
                <h3>Become a Client.</h3>
                <a href="tel:0487 5416 28">(07) 3844 7454</a>
                <a href="">business@ahoia.com</a>
              </div>

              <div class="">
                <h3>Everything else.</h3>
                <a href="tel:0487 5416 28">(04) 8754 1628</a>
                <a href="#">hello@ahoia.com</a>
              </div>


            </div>
          </div>


        </div><!-- //content -->

      </section>

      <section class="right-content">
        <?php if( wp_is_mobile() ){ ?>
          <div class="image cover" style="background-image:url('<?php echo $m_heroImage[0];?>')"></div>
        <?php }else{ ?>
          <div class="image cover" style="background-image:url('<?php echo $d_heroImage[0];?>')"></div>
        <?php } ?>
      </section>
    </section>
  </main>

<?php get_footer();?>

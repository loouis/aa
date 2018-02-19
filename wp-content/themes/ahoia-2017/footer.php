    <footer class="main-footer main-footer--homepage" role="contentinfo">
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
          <p class="copyright">&copy;Ahoia <?php echo date('Y'); ?></p>
        </div>
      </div>
    </footer>

  
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.6.0/lazyload.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TimelineLite.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenLite.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/CSSPlugin.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/ScrollToPlugin.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/scripts-min.js"></script>
    
    <script type="text/javascript">
			jQuery(window).load(function(){
				jQuery('.page-loader').delay(1000).fadeOut('slow', function(){
          $(this).remove();
        });
        setTimeout(wow, 1600);
      });
      
      var wow = function(){
        wow = new WOW({
          mobile: true,        // trigger animations on mobile devices (default is true)
        });
        wow.init();
      }
		</script> 


		<?php wp_footer(); ?>

		<!-- // Typekit fonts -->
		<script>
		  (function(d) {
		    var config = {
		      kitId: 'ihm8gzr',
		      scriptTimeout: 3000,
		      async: true
		    },
		    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		  })(document);
		</script>

		<!-- Google Analytics -->
		<!-- analytics -->
		<script src="https://cdn.jsdelivr.net/ga-lite/latest/ga-lite.min.js" async></script>
		<script>
			var galite = galite || {};
			galite.UA = 'UA-XXXXXX'; // Insert your tracking code here
		</script>

	</body>
</html>

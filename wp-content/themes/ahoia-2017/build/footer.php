		<footer class="footer" role="contentinfo">
			<p class="copyright">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
				<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
			</p>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TimelineLite.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenLite.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/CSSPlugin.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/easing/EasePack.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/ScrollToPlugin.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/assets/js/scripts-min.js"></script>

		<?php wp_footer(); ?>

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

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>

			</div><!-- End bodywrapper -->
		
			<footer id="footerwrapper">
				<p>All rights reserved <?php echo date("Y"); ?> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a> / Design by <a href="http://www.bandbreed.nl" target="_blank">Bandbreed</a></p>
			</footer>
		
			<?php wp_footer(); ?>
		
		</div><!-- sitewrapper -->
		
		<!-- Load jQuery and custom plugins/scripts -->
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
			<script>window.jQuery || document.write('<script src="<?php bloginfo("template_url");?>/scripts/libs/jquery-1.6.2.min.js"><\/script>')</script>
			<script src="<?php bloginfo("template_url");?>/scripts/script.js"></script>

		<!-- Facebook -->
			<div id="fb-root"></div>
			
		<!-- Google Analytics code -->
			<script>
				var _gaq=[['_setAccount','REPLACE_THIS'],['_trackPageview']];
				(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
				g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
				s.parentNode.insertBefore(g,s)}(document,'script'));
				typeof _gaq!="undefined"&&_gaq!==null&&$(document).ajaxSend(function(a,b,c){_gaq.push(["_trackPageview",c.url])})
			</script>

	</body>
</html>







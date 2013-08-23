<div class="span4">
	<aside>
	
		<div class="widget">
			<h2 class="sidebar">Related Posts</h2>
			<p class="sidebar"><?php bones_related_posts(); ?></p>
		</div>

		<?php if ( is_active_sidebar( 'single' ) ) : ?>
	
			<?php dynamic_sidebar( 'single' ); ?>
	
		<?php else : ?>
	
			<!-- This content shows up if there are no widgets defined in the backend. -->
	
		<?php endif; ?>		
		
		<div class="uptop-ad">
			<div class="ad-size"><a href="http://uptop-tees.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/uptop/uptop-300-250.jpg" /></a></div>
		</div>
		
		<div id="google-ads-1" class="google-ads">
 <script type="text/javascript">
 
	adUnit   = document.getElementById("google-ads-1");
	adWidth  = adUnit.offsetWidth;
	console.log("add size: "+adWidth);
 
	/* Replace this with your AdSense Publisher ID */
	google_ad_client = "ca-pub-3955437953066356";
 
	if ( adWidth >= 300 ) {
	  /* Medium Rectangle (300 x 250) */
	  google_ad_slot 	= "7569185153";
	  google_ad_width 	= 300;
	  google_ad_height 	= 250;
	} else if ( adWidth >= 250 ) {
	  /* Square (250 x 250) */
	  google_ad_slot	= "8906317555";
	  google_ad_width 	= 250;
	  google_ad_height 	= 250;
	} else if ( adWidth >= 200 ) {
	  /* Square (250 x 250) */
	  google_ad_slot	= "4336517158";
	  google_ad_width 	= 200;
	  google_ad_height 	= 200;
	} 
 </script>
 
 <script type="text/javascript"    
   src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
 </script>
</div>

	</aside>
</div><!-- /span3 -->
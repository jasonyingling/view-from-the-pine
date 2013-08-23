			<div class="footer">
			<div class="inner-footer">
			<div class="container">
				
				<footer>
					<div class="row-fluid">
				<div class="span4">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('left_footer')) : else : ?>
						<p><strong>Widget Ready</strong></p>
						<p>This left_footer is widget ready! Add one in the admin panel.</p>
					<?php endif; ?>
				</div><!-- /span4 -->
				<div class="span4">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('center_footer')) : else : ?>
						<p><strong>Widget Ready</strong></p>
						<p>This center_footer is widget ready! Add one in the admin panel.</p>
					<?php endif; ?>
				</div><!-- /span4 -->
				<div class="span4">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('right_footer')) : else : ?>
						<p><strong>Widget Ready</strong></p>
						<p>This right_footer is widget ready! Add one in the admin panel.</p>
					<?php endif; ?>
				</div><!-- /span4 -->
			</div><!-- /row-fluid -->
					<div class="row-fluid">
						<div class="span12 copyright">
							<p class="pull-right">&copy; <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a> 2012</p>
						</div>
					</div>
				</footer>
				
			</div><!-- /container -->
			</div><!-- /inner-footer -->
		</div><!-- /footer -->
		
		<!-- +1 button script. Place this tag after the last +1 button tag. -->
		<script type="text/javascript">
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
		
		<!-- tumblr button -->
		<script src="http://platform.tumblr.com/v1/share.js"></script>

		<!-- Le Javascript
		================================================= -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/behaviors.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
        
        
		<?php wp_footer(); ?>	
		<meta property="og:image" content="'.$image[0].'" />
	</body>
</html>
			
			

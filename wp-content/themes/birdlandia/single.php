<?php get_header(); ?>
	<div <?php post_class('banner'); ?>></div>
	<div class="content-wrap banner-overlap">
		<div class="container">
			
			<div class="row-fluid">
				<div class="span8 margin-twenty">
				<div class="post-area">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php setPostViews(get_the_ID()); ?>
					<!-- <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting"> -->
						<div <?php post_class('post-content'); ?>>
			                <div class="post-wrap">
			                	<div <?php post_class('category'); ?>><?php the_category(', '); ?></div><!-- /category -->
			                	<div class="comment-total"><a href="<?php comments_link(); ?>"><?php comments_number('', '1 comment', '% comments'); ?></a></div>
			                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			                    <div class="byline_contain byline-top"><p class="byline vcard"><?php _e("Posted", "bonestheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span><?php edit_post_link(' | Edit Post'); ?></p></div>
			                </div><!-- /post-wrap -->
			                	<?php if(has_post_thumbnail() && !(has_post_format( 'video' ))) :?>
			                	<div class="thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-thumb'); ?></a></div>
			                	<?php else :?>
			                	<?php endif;?>
			                <div class="post-wrap-lower">
			                    <div class="main-content"><?php the_content(); ?></div>
			
								<ul class="post-social-single">
									<li><div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div></li>
									<li class="twitter-btn"><a href="<?php the_permalink(); ?>" class="twitter-share-button">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
									<li><div class="g-plusone" data-size="medium" data-annotation="none"></div>
</li>
									<li><a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:81px; height:20px; background:url('http://platform.tumblr.com/v1/share_1.png') top left no-repeat transparent;">Share on Tumblr</a></li>
								</ul>
								
								<div class="author-box">
									<div class="author-image thumbnail"><?php echo get_avatar( get_the_author_meta('ID'), 100 ); ?></div>
									<div class="author-content">
										<h4><?php the_author_meta("first_name"); ?> <?php the_author_meta("last_name"); ?></h4>
										<div class="author-desc"><?php the_author_meta('description'); ?></div>
										<div class="author-twitter">
											<?php 
												$twitter = get_the_author_meta('twitter');
												//echo $twitter;
											?>
											<?php if ($twitter) :?>
											<a href="https://twitter.com/<?php the_author_meta('twitter'); ?>" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @<?php the_author_meta('twitter'); ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
											<?php endif; ?>
										</div>
										<div class="also-by">
											<?php echo get_related_author_posts(); ?>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								
								
								<footer class="article-footer">
			
									<div class="post-meta"><?php the_tags('<p class="tags"> #', ' #', '</p>'); ?></div>
			                	
										
								</footer> <!-- end article footer -->
								
								<div class="google-footer-ads">
									<script type="text/javascript"><!--
									google_ad_client = "ca-pub-3955437953066356";
									/* Post Footer */
									google_ad_slot = "7183101959";
									google_ad_width = 320;
									google_ad_height = 50;
									//-->
									</script>
									<script type="text/javascript"
									src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
									</script>
								</div>
								
								<div id="comments">
									<?php comments_template(); ?> 
								</div><!-- end comments -->
			                </div><!-- /post-wrap -->
						</div><!-- /post-content -->
					<!-- </article> -->
				</div><!-- /post-area -->
			</div><!-- /span8 -->
				
						<?php endwhile; ?>			
					
						<?php else : ?>
					
							<article id="post-not-found" class="hentry clearfix">
					    		<header class="article-header">
					    			<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					    		</header>
					    		<section class="entry-content">
					    			<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					    		</section>
					    		<footer class="article-footer">
					    		    <p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
					    		</footer>
							</article>
					
						<?php endif; ?>
						
				<?php get_sidebar('single'); ?>
				
				
			</div><!-- /row-fluid -->
			
		</div><!-- /container -->
	</div><!-- /content-wrap -->
		
	</div><!-- /main -->
	</div><!-- /wrap -->

<?php get_footer(); ?>
<?php get_header(); ?>
<div class="banner">
	<div class="container featured-posts-bar">
		<div class="row-fluid">
			<?php 
				$featured_query = new WP_Query('tag=featured&showposts=3');
				while ($featured_query->have_posts()) : $featured_query->the_post();
			?>
			
				<div class="span4">
					<div class="post-area featured-post">
					<div <?php post_class('post-content'); ?>>
	                		<div class="thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-thumb'); ?></a></div>
						<div class="post-wrap">
							<div <?php post_class('category'); ?>><?php the_category(', '); ?></div><!-- /category -->
	                	
							<h2 class="post-title">
								<a href="<?php the_permalink(); ?>">
									<?php if (get_field('short_title')) : ?>
										<?php the_field('short_title'); ?>
									<?php else : ?>
										<?php the_title(); ?>
									<?php endif; ?>
								</a>
							</h2>
						</div><!-- end post-wrap -->
					</div><!-- post-content -->
					</div><!-- post-area -->
				</div><!-- end span4 -->
			
			<?php endwhile; ?>

		</div><!-- end row-fluid -->
	</div><!-- end container -->

</div>
	<div class="content-wrap banner-overlap">
	<div class="container">
		
		<div class="row-fluid">
			
				<div class="span8">
	        		<div class="post-area">
					<?php 
						$paged = (get_query_var('paged')) ? get_query_var('paged') :1;
						query_posts('paged=' . $paged);
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	                	
	                	<div <?php post_class('post-content'); ?>>
	                	<div class="post-wrap">
	                		<div <?php post_class('category'); ?>><?php the_category(', '); ?></div><!-- /category -->
	                		<div class="comment-total"><a href="<?php comments_link(); ?>"><?php comments_number('', '1 comment', '% comments'); ?></a></div>
	                		<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				                    <div class="byline_contain byline-top"><p class="byline vcard"><?php _e("Posted", "bonestheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span><?php edit_post_link(' | Edit Post'); ?></p></div>
	                	</div><!-- end post-wrap -->
			                	<?php if(has_post_thumbnail() && !(has_post_format( 'video' ))) :?>
			                	<div class="thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-thumb'); ?></a></div>
			                	<?php else :?>
			                	<?php endif;?>
			                	<div class="post-wrap-lower">
				                    
				                    <div class="main-content"><?php the_content('[...]<div class="more-btn">More&gt;&gt;</div>'); ?></div>
				                    <ul class="post-social-single">
									<li><div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div></li>
									<li class="twitter-btn"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
									<li><div class="g-plusone" data-size="medium" data-annotation="none" data-href="<?php the_permalink(); ?>"></div>
</li>
									<li><a href='http://www.tumblr.com/share/link?url=<?php echo urlencode(get_permalink()) ?>' title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:81px; height:20px; background:url('http://platform.tumblr.com/v1/share_1.png') top left no-repeat transparent;">Share on Tumblr</a></li>
			
								</ul>
				                    <div class="post-meta">
				                    	<?php the_tags('<p class="tags"> #', ' #', '</p>'); ?>
				                    </div>
			                	</div><!-- end post-wrap -->
	                	</div><!-- /post-content -->
	                <?php endwhile; ?>
	                	</div><!-- /post-area -->
	                	<?php if (function_exists('page_navi')) { ?>
						            <?php page_navi(); ?>
						        <?php } else { ?>
						            <nav class="wp-prev-next">
						                <ul class="clearfix">
						        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
						        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
						                </ul>
						            </nav>
						        <?php } ?>
	                <?php else : ?>
	                	<p>No posts</p>
	                <?php endif; ?>    
	        		
				</div><!-- /span8 -->
				
				<?php get_sidebar(); ?>
                
			</div><!-- end row-fluid -->           

		</div><!-- /container -->
	</div><!-- /content-wrap -->
	</div><!-- /main -->
	</div><!-- /wrap -->

<?php get_footer(); ?>
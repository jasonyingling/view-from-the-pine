<?php
/*
Template Name: Custom Page Example
*/
?>

<?php get_header(); ?>
	<div <?php post_class('banner'); ?>></div>
	<div class="content-wrap banner-overlap">
		<div class="container">
			
			<div class="row-fluid">
				<div class="span12 margin-twenty">
				<div class="post-area">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
						<div <?php post_class('post-content'); ?>>
			                <div class="post-wrap">
			                	<!-- <div <?php post_class('category'); ?>><?php the_category(', '); ?></div> --><!-- /category -->
			                	<div class="comment-total"><a href="<?php comments_link(); ?> "><?php comments_number('', '1 comment', '% comments'); ?></a></div>
			                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			                    <div class="byline_contain byline-top"><p class="byline vcard"><?php _e("Posted", "bonestheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span></p></div>
			                </div><!-- /post-wrap -->
			                	<?php if(has_post_thumbnail()) :?>
			                	<div class="thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-thumb'); ?></a></div>
			                	<?php else :?>
			                	<?php endif;?>
			                <div class="post-wrap-lower">
			                    <div class="main-content"><?php the_content(); ?></div>
			
								<ul class="post-social-single">
									<li><div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div></li>
									<li><a href="<?php the_permalink(); ?>" class="twitter-share-button">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
								</ul>
								
								
								<footer class="article-footer">
			
									<div class="post-meta"><?php the_tags('<p class="tags"><span class="tags-title"><strong>Tags: </strong></span> ', ', ', '</p>'); ?></div>
			                	
										
								</footer> <!-- end article footer -->
								
								<div id="comments">
									<?php comments_template(); ?> 
								</div><!-- end comments -->
			                </div><!-- /post-wrap -->
						</div><!-- /post-content -->
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
				
			</div><!-- /row-fluid -->
			
		</div><!-- /container -->
		
	</div><!-- /main -->
	</div><!-- /wrap -->

<?php get_footer(); ?>
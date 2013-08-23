<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>
		
		<div class="container margin-top">
		
			<div class="row-fluid">
				<div class="span9">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				
					<h2 class="post-title"><?php the_title(); ?></h2>
					<div class="byline_contain byline-top"><p class="byline vcard"><?php _e("Posted", "bonestheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&amp;</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p></div><!-- /byline -->
					<p><?php the_content(); ?></p>
					
					<footer class="article-footer">
			
									<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
							
								</footer> <!-- end article footer -->
								
				</div><!-- /span9 -->
				
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
						
				<?php get_sidebar('sidebar-services'); ?>
				
				
			</div><!-- /row-fluid -->
			
		</div><!-- /container -->
		
	</div><!-- /main -->
	</div><!-- /wrap -->

<?php get_footer(); ?>
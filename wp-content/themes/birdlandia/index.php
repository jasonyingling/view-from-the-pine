<?php get_header(); ?>

	<div class="container">
		
		<div class="row-fluid">
			
				<div class="span8">
        		
				<?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') :1;
					query_posts('paged=' . $paged);
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
                	<div class="post-content">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="byline_contain byline-top"><p class="byline vcard"><?php _e("Posted", "bonestheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p></div>
                    <p><?php the_content(); ?></p>
                	</div><!-- /post-content -->
                <?php endwhile; ?>
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
                	<p>No posts.</p>
                <?php endif; ?>    

				</div><!-- end span8 -->
				
				<?php get_sidebar(); ?>
                
			</div><!-- end row-fluid -->           

		</div><!-- /container -->
		
	</div><!-- /main -->
	</div><!-- /wrap -->

<?php get_footer(); ?>
<!doctype html>  
<html lang="en">
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<?php
		if ( is_home() ) {
		    echo '<meta property="og:image" content="'.$image[0].'" />';
		} else {
		   global $wp_query;
			$thePostID = $wp_query->post->ID;
			if( has_post_thumbnail( $thePostID )){
			    $thumb_id = get_post_thumbnail_id( $thePostID );
			    $image = wp_get_attachment_image_src( $thumb_id );
			    echo '<meta property="og:image" content="'.$image[0].'" />';
			} 
		}
		?>
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="">
		<meta name="apple-mobile-web-app-title" content="The Pine">
		
		<!-- Le styles -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/icons/apple-touch-icon-57-precomposed.png">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>

	<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=254726797972562";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<div id="wrap">
	<div id="main">
		<header>
		
		<div class="masthead">
			<div class="container">
				<div class="row-fluid">
					<div class="span12 pos-rel">
						<div class="logo">
							<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/thepine-logo-retina.png" alt="View From The Pine"/></a>
						</div><!-- end logo -->
						<div class="description"><?php bloginfo('description'); ?> </div>
						<div class="clearfix"></div>
					</div><!-- end span12 -->
				</div><!-- end row-fluid-->
			</div><!-- end container -->
		</div><!-- end masthead -->
		
		<div class="navbar navbar-static-top navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="<?php echo home_url(); ?>">Menu</a>
					<div class="nav-collapse collapse">
						<?php $walker = new Main_menu; wp_nav_menu(array('menu' => 'Main Nav Menu', 'menu_class' => 'nav', 'walker' => $walker)); ?>
					</div><!-- end nav-collapse -->
				</div><!-- end container -->
			</div><!-- end navbar-inner -->
		</div><!-- end navbar -->
		
		<div class="social-bar">
			<div class="row-fluid">
				<div class="span12">
					<ul class="post-social">
						<li><div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div></li>
						<li><a href="<?php the_permalink(); ?>" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
					</ul>
				</div><!-- end span12 -->
			</div><!-- end row-fluid -->
		</div><!-- end social-bar -->
		
		</header>

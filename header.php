<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cremica</title>
	<!-- include css styles -->
	<link  type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css">

	<link  type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/custom.css">
	<!-- end -->

	<script  type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.2.min.js"></script>

</head>
<body>

<div id="content"><!-- preloader div -->

<!-- header start -->
<header class="head-animation">
	<div class="header-arrow <?php if(!is_home()) echo 'shadow'; ?>">
		<div class="container-fluid">
			<nav class="navbar navbar-default head-nav" role="navigation">
			   <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" 
			         data-target="#example-navbar-collapse">
			      <span class="sr-only">nav</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand logo" href="index.html"><img src="<?php echo  get_option('logo_image'); ?>" alt="cremicalogo"/> </a>
			   </div>
			   <div class="collapse navbar-collapse header" id="example-navbar-collapse">
			      <?php $menu_args = array(
				        'container'       => 'div',
				        'echo'            => true,
				        'fallback_cb'     => 'wp_page_menu',
				        'items_wrap'      => '<ul class="nav navbar-nav head-nav-ul sm">%3$s</ul>',
				        'depth'           => 0,
				        'theme_location' => 'header-menu'
				    );	?>
				    <?php wp_nav_menu( $menu_args ); ?>
			   </div>
			</nav>
		</div>	
	</div>	
</header>
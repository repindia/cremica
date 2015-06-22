<?php
/*
Template Name: About US Page
*/

get_header();?>



<!-- about us -->
	<section class="about-us">
		<div class="container">
			<div class="row">
		 		 <div class="col-xs-12 col-sm-12 col-md-12">
				  	<?php $menu_args = array(
				        'container'       => '',
				        'echo'            => true,
				        'fallback_cb'     => 'wp_page_menu',
				        'items_wrap'      => '<ul class="">%3$s</ul>',
				        'depth'           => 0,
				        'theme_location' => 'about-menu'
				    );	?>
				    <?php wp_nav_menu( $menu_args ); ?>
				</div>
		  	</div>
		</div>
		<div class="container">
			<div class="row about-arrow">
				<div class="about-container" id="tab1">
			 		 <div class="col-xs-12 col-sm-12 col-md-9">
			 		 	<?php
						$the_slug = 'company-profile';
						$args = array(
						  'name'        => $the_slug,
						  'post_type'   => 'article',
						  'post_status' => 'publish',
						  'numberposts' => 1
						);
						$company_profile = get_posts($args)[0];
						$content = apply_filters('the_content', $company_profile->post_content); ?>
					  	<h2><?php echo $company_profile->post_excerpt; ?> </h2>
					  	<p> 
					  		<?php echo $content;?>
						</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3"></div>
				</div>
				<div class="about-container" id="tab2">
			 		 <div class="col-xs-12 col-sm-12 col-md-9">
			 		 	<?php
						$the_slug = 'our-vision';
						$args = array(
						  'name'        => $the_slug,
						  'post_type'   => 'article',
						  'post_status' => 'publish',
						  'numberposts' => 1
						);
						$our_vision = get_posts($args)[0];
						$content = apply_filters('the_content', $our_vision->post_content); ?>

					  	<h2><?php echo $our_vision->post_excerpt; ?></h2>
					  	<p> 
					  		<?php echo $our_vision->post_content; ?>
						</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3"></div>
				</div>

				<div class="about-container" id="tab3">
			 		 <div class="col-xs-12 col-sm-12 col-md-9">
			 		 	<?php
						$the_slug = 'our-origin';
						$args = array(
						  'name'        => $the_slug,
						  'post_type'   => 'article',
						  'post_status' => 'publish',
						  'numberposts' => 1
						);
						$our_origin = get_posts($args)[0];
						$content = apply_filters('the_content', $our_origin->post_content); ?>

					  	<h2><?php echo $our_origin->post_excerpt; ?></h2>
					  	<p> 
					  		<?php echo $our_origin->post_content; ?>
						</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3"></div>
				</div>
				<div class="our-origin">
					<a href="javascript:void(0)" rel="tab1"><img src="<?php echo get_template_directory_uri(); ?>/images/about/Origin-arrow.png"/></a>
					<a href="javascript:void(0)" rel="tab1">Our Origin</a>
				</div>
				<div class="our-vision">
					<a href="javascript:void(0)" rel="tab3">Our Vision</a>
					<a href="javascript:void(0)" rel="tab3"><img src="<?php echo get_template_directory_uri(); ?>/images/about/vision-arrow.png"/></a>
				</div>
				
		  	</div>
		</div>
	</section>

<?php get_footer(); ?>
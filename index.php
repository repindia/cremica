<?php get_header();?>


<!-- slider start -->
	<section class="slider">
		<div class="container-fluid header-slider">
			<div id="da-slider" class="da-slider" style="background:url('<?php echo get_option('homepage_slider_bg_img'); ?>');">
				<?php 
				 	$args = array(
						  'post_type'   => 'homepage_slider',
						  'post_status' => 'publish',
						  'numberposts' => 5
						);
				 	$sliders = get_posts($args);
					
					foreach ($sliders as $slider) { ?>
						<div class="da-slide">
							<div class="slide-left">
								<h2><?php echo $slider->post_title;?></h2>
								<p><?php echo $slider->post_content;?></p>
								<?php $meta_values = get_post_custom( $slider->ID );?>
								<a href="<?php echo $meta_values['homepage_slider_link'][0]; ?>" class="da-link">Know More</a>
							</div>

							<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($slider->ID) ); ?>
							<div class="da-img"><img src="<?php echo $url;?>" alt="image01" /></div>
						</div>
				<?php } ?>
					
				

				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
		</div>	
	</section> 

<!-- welcome  start -->
	<section class="welcome">
		<div class="container">
			<div class="row">
			  <div class="col-xs-12 col-sm-12 col-md-12">
					<?php
						$the_slug = 'welcome-to-cremica';
						$args = array(
						  'name'        => $the_slug,
						  'post_type'   => 'article',
						  'post_status' => 'publish',
						  'numberposts' => 1
						);
						$welcome_post = get_posts($args)[0]; 
						$content = apply_filters('the_content', $welcome_post->post_content);
						?>
				  	<div class="welcome-heading">
				  		<h1><?php echo $welcome_post->post_title ?></h1>
				  	</div>
				  	<?php echo $content; ?>
			  </div>
		  </div>
		</div>
	</section>

<!-- Our Journey  start -->
	<section class="welcome">
			<div class="container">
				<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-12">
		  	<div class="welcome-heading">
		  		<h1><?php echo get_option('homepage_journey_title'); ?></h1>
		  	</div>
	  		<div class="journey-slider">

	  			<div class="journey-slide-left"> 
	  				<?php $args = array(
						  'post_type'   => 'journey',
						  'post_status' => 'publish',
						  'numberposts' => 10
						);

	  					$journeys = get_posts($args); 

	  					foreach ($journeys as $journey ) { ?>
			  				<div  id="j-<?php echo $journey->post_title;?>" class="tab_content"> <!-- tab 1 -->
				  				<div class="slide-box">
				  					<p>
				  						<b><?php echo $journey->post_title;?></b> <br>
				  						<?php echo $journey->post_content;?>
				  					</p>
				  				</div>
				  				<div class="slide-bg-wrapper">
				  					<?php $meta_values = get_post_custom( $journey->ID );?>
				  					<div class="slide-bg"><?php echo $meta_values['homepage_journey'][0]; ?></div>
				  					<div class="slide-bg-before"></div>
				  					<div class="slide-bg-after"></div>
				  					<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($journey->ID) ); ?>
				  					<img class="slide-box-img" src="<?php echo $url;?>" alt=""/>
				  				</div>
			  				</div>
						<?php } ?>
	  				
	  			</div> 

	  			<div class="journey-slide-right">
	  				<a href="javascript:void(0)" class="journey-top-arrow" ><img src="<?php echo get_template_directory_uri();?>/images/home/journey-top-arrow.png" alt=""></a>
	  				<a href="javascript:void(0)" class="journey-bottom-arrow" ><img src="<?php echo get_template_directory_uri();?>/images/home/journey-bottom-arrow.png" alt=""></a>
	  				<div class="tab-wrapper">
	  					<ul class="tabs">
	  					<?php $i = 1; ?>
	  					<?php foreach ($journeys as $journey ) { ?>
	  						<li><a rel="j-<?php echo $journey->post_title;?>" class="<?php if($i == 1) echo 'active';?>" href="javascript:void(0)"><?php echo $journey->post_title;?></a></li>
	  					<?php 
	  						$i++;
	  					} ?>
	  					</ul>
	  				</div>
	  			</div>

	  		</div>
		  </div>
		  </div>
		</div>
	</section>

<!-- Our Products start -->
	<section class="our-products">
		<div class="container">
			<div class="row">
		 		 <div class="col-xs-12 col-sm-12 col-md-12">
				  	<div class="welcome-heading">
				  		<h1>Our Products</h1>
				  	</div>
				  	<div class="product-container">
				  	
				  	<?php 
					$args = array(
						'category_name' => 'products',
						'numberposts' => 4
					);

				 	$products = get_posts($args);
			
					foreach ($products as $product) { ?>
					
					  <div class="col-sm-6 col-md-3">
					    <div class="thumbnail">
					    	<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($product->ID) ); ?>	
					      	<a href="<?php echo bloginfo('url');?>/category/products"><img src="<?php echo $url; ?>" alt="thousand"></a>
					    </div>
					     <div class="caption">
					        <h3><?php echo $product->post_title;?></h3>
					        <p><a href="<?php echo bloginfo('url');?>/category/products" class="btn btn-primary" role="button">Know More</a> </p>
					      </div>
					  </div>
					   <?php } ?>
					  
				 	</div> 	
				</div>
		  	</div>
		</div>
	</section>


<?php get_footer(); ?>



<h2><?php echo $myRollNo;?></h2>
<!-- Food Services container -->
	<section class="products-container recipes-fac-border">
		<div class="container ">
			<div class="row">
				<div class="welcome-heading">
					<?php
						$the_slug = 'food-services';
						$args = array(
						  'name'        => $the_slug,
						  'post_type'   => 'article',
						  'post_status' => 'publish',
						  'numberposts' => 1
						);
						$food_services = get_posts($args)[0]; 
						$content = apply_filters('the_content', $food_services->post_content);
					?>
				  		<h1>Food Services</h1>
				  	</div>
				<div class="col-xs-12 col-sm-12 col-md-12 food-services">
				  		<?php echo $content; ?>
						<div class="down-arrow">
							<a href="javascript:void(0);">
								<img src="<?php echo get_template_directory_uri(); ?>/images/food-services/fs-arrow.png" alt="">
							</a>
						</div>
						
				</div>
		  	</div>
		</div>
	</section>


<!-- Food Services Products container -->
	<section class="products-container recipes-fac-border">
		<div class="container-fluid food-services-cat">
			<div class="row">
			<?php foreach($categories as $category){ ?>
				<div class="col-xs-12 col-sm-12 col-md-4" style="background-image:url(<?php echo z_taxonomy_image_url($category->term_id); ?>);"><a href="<?php echo bloginfo('url');?>/category/food-services/<?php echo $category->slug;?>"><?php echo $category->name;?></a></div>
		  	<?php } ?>
		  	</div>
		</div>
	</section>

<!-- Our Clients container -->
	<section class="products-container recipes-fac-border">
		<div class="container food-services-cat">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="food-our-clients">
						<h1>Our Clients</h1>
						<?php 
							$args = array(
							  'post_type'   => 'client',
							  'post_status' => 'publish',
							);
					 		$clients = get_posts($args);
				 		?>
				 		<?php foreach ($clients as $client) { ?>
				 			<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($client->ID) ); ?>				 			
							<div class="col-xs-12 col-sm-12 col-md-2" style="background-image:url(<?php echo $url;?>);"></div>
						<?php } ?>
					</div>
				</div>
		  	</div>
		</div>
	</section>


<!-- Client Testimonials container -->
	<section class="products-container recipes-fac-border">
		<div class="container food-services-cat">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 food-testimonials ">
						<h1>Client Testimonials</h1>
						<div class="bs-example" data-example-id="carousel-with-captions">
						    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
						      <div class="carousel-inner" role="listbox">
						      <?php 
									$args = array(
									  'post_type'   => 'testimonial',
									  'post_status' => 'publish',
									);
							 		$testimonials = get_posts($args);
						 		$i = 0;
						 		foreach ($testimonials as $testimonial) { ?>
						        <div class="item <?php if($i == 0) echo 'active';?>">
						          <div class="carousel-caption">
						            <h3 id="first-slide-label">
						            	<?php echo $testimonial->post_content; ?>
									</h3>
						            <p><?php echo $testimonial->post_excerpt; ?></p>
						          </div>
						        </div>

						        <?php $i++; } ?>
						        
						      </div>
						      <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
						        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"> <img src="<?php echo get_template_directory_uri(); ?>/images/news/prev.png" alt=""> </span>
						        <span class="sr-only">Previous</span>
						      </a>
						      <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
						        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"> <img src="<?php echo get_template_directory_uri(); ?>/images/news/next.png" alt=""></span>
						        <span class="sr-only">Next</span>
						      </a>
						    </div>
						  </div>
				</div>
		  	</div>
		</div>
	</section>


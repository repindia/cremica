<?php
/*
Template Name: Contact Page
*/

get_header();?>

<!-- enquiry container -->
	<section class="about-us enquiry-container">
		<div class="container">
			<div class="row about-arrow">
				<div class="welcome-heading">
				  		<h1>Inquiry Form</h1>
				 </div>
				<div class="about-container" id="tab1">
			 		<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="products-enquiry">
							<form action="">
								<?php
						$the_slug = 'contact';
						$args = array(
						  'name'        => $the_slug,
						  'post_type'   => 'article',
						  'post_status' => 'publish',
						  'numberposts' => 1
						);
						$contact = get_posts($args)[0];
						$content = apply_filters('the_content', $contact->post_content); ?>


					  	
								<input type="text" name="name" placeholder="Name"/>
								<input type="text" name="email" placeholder="Email"/>
								<input type="text" name="number" placeholder="Number"/>
								<input type="text" name="location" placeholder="Location"/>
								<textarea name="" id="" cols="30" rows="10" placeholder="ENTER Product names and quantity here"></textarea>
								<input type="button" value="Submit" class="products-submit"/>
							</form>
						</div>					  		
					</div>
				</div>
				<div class="about-container" id="tab2">
			 		<div class="col-xs-12 col-sm-12 col-md-12 enquiry-address">
					  	<div class="products-enquiry">
					  		<h1 class="enquiry-career">CAREER</h1>
							<form action="">
								<input type="text" name="name" placeholder="Name"/>
								<input type="text" name="email" placeholder="Email"/>
								<input type="text" name="number" placeholder="Number"/>
								<input type="text" name="location" placeholder="Location"/>
								<div class="fileUpload"><span>Upload Resume</span><input type="file" class="upload" /></div>
								<input type="button" value="Submit" class="products-submit"/>
							</form>
						</div>	
					</div>
				</div>
				<div class="about-container" id="tab3">
			 		<div class="col-xs-12 col-sm-12 col-md-12 enquiry-location">
					  	<div class="products-enquiry">
							<div class="col-xs-12 col-sm-12 col-md-5 enquiry-address">
								<h1><?php echo get_option('contact_title')?></h1>
								<p>
									<?php $content = apply_filters('the_content', get_option('contact_content'));
										echo $content;
									?>
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-7 enquiry-map">
								<?php echo get_option('contact_map'); ?>
							</div>
						</div>	
					</div>
				</div>
				<div class="our-origin">
					<a href="javascript:void(0)" rel="tab1"><img src="images/about/Origin-arrow.png"/></a>
					<a href="javascript:void(0)" rel="tab2">Careers</a>
				</div>
				<div class="our-vision">
					<a href="javascript:void(0)" rel="tab3">Location</a>
					<a href="javascript:void(0)" rel="tab1"><img src="images/about/vision-arrow.png"/></a>
				</div>
				
		  	</div>
		</div>
	</section>

<?php get_footer(); ?>
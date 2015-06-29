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
				<div class="about-container active" id="tab1" data-title="Enquiry">
			 		<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="products-enquiry">
						<?php echo do_shortcode( '[contact-form-7 id="79" title="Enquiry Form"]' ); ?>
						</div>					  		
					</div>
				</div>
				<div class="about-container" id="tab2" data-title="Career">
			 		<div class="col-xs-12 col-sm-12 col-md-12 enquiry-address">
					  	<div class="products-enquiry career-align">
					  		<h1 class="enquiry-career"><?php echo get_option('career_title')?></h1>
							<?php echo do_shortcode( '[contact-form-7 id="78" title="Enquiry Form"]' ); ?>
						</div>	
					</div>
				</div>
				<div class="about-container" id="tab3" class="Location">
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
				<div class="our-origin prev-tab">
					<a href="javascript:void(0)" rel="tab1"><img src="<?php echo get_template_directory_uri(); ?>/images/about/Origin-arrow.png"/></a>
					<a href="javascript:void(0)" rel="tab2" class="prev-tab-title">Location</a>
				</div>
				<div class="our-vision next-tab">
					<a href="javascript:void(0)" rel="tab3" class="next-tab-title">Careers</a>
					<a href="javascript:void(0)" rel="tab1"><img src="<?php echo get_template_directory_uri(); ?>/images/about/vision-arrow.png"/></a>
				</div>
				
		  	</div>
		</div>
	</section>

<?php get_footer(); ?>
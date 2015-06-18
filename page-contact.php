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
						<?php echo do_shortcode( '[contact-form-7 id="79" title="ram"]' ); ?>
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
								<h1>Cremica Contact Details</h1>
								<p>	Cremica Food Industries Ltd.<br>
									202, Okhla Phase – 3
									New Delhi–110020<br>
									Ph. No. : <a href="tel:+91-11-40575152">+91-11-40575152 </a><br>
									Customer care : <a href="tel:1800-20-82254">1800-20-82254</a><br>
									<a href="mailto:customercare@cremica.com">customercare@cremica.com</a>
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-7 enquiry-map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3504.690405019641!2d77.27309275952638!3d28.54902397290627!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3ef911ffbed%3A0xf42c5219ec45d215!2sCremica+Food+Industries+Ltd.!5e0!3m2!1sen!2sin!4v1419326557079" width="100%" height="460" frameborder="0" style="border:0;"></iframe>
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
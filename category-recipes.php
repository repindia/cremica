<?php get_header(); ?>

<!-- slider start -->
	<section class="slider rs-slide">
		<div class="container-fluid header-slider">
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<div class="slide-left">
						<h2>Breakfast Recipes</h2>
						<p>Start your mornings with fesh <br> and healthy recipes that will keep <br> you running for the day</p>
						<a href="#" class="da-link">Know More</a>
					</div>
					<div class="da-img"><img src="images/recipes/slide1.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<div class="slide-left">
						<h2>Breakfast Recipes2</h2>
						<p>Start your mornings with fesh <br> and healthy recipes that will keep <br> you running for the day</p>
						<a href="#" class="da-link">Know More</a>
					</div>
					<div class="da-img"><img src="images/recipes/slide2.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<div class="slide-left">
						<h2>Breakfast Recipes3</h2>
						<p>Start your mornings with fesh <br> and healthy recipes that will keep <br> you running for the day</p>
						<a href="#" class="da-link">Know More</a>
					</div>
					<div class="da-img"><img src="images/recipes/slide3.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<div class="slide-left">
						<h2>Breakfast Recipes4</h2>
						<p>Start your mornings with fesh <br> and healthy recipes that will keep <br> you running for the day</p>
						<a href="#" class="da-link">Know More</a>
					</div>
					<div class="da-img"><img src="images/recipes/slide4.png" alt="image01" /></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
		</div>	
	</section> 

<!-- Recipes Category start -->
	<section class="recipes-container our-products">
		<div class="container-fluid">
			<div class="row">
		 		 <div class="col-xs-12 col-sm-12 col-md-12 recipes-bg">
					<div class="product-container recipes-cat">
						<?php 
				  		// Get Current Category ID
						$current_cat = get_query_var('cat'); 
						// Get Current Category
						$current_category = get_category( $current_cat );
						// Get Children Categories of Current Categories
						$args = array('child_of' => $current_cat , 'hide_empty' => 0);
						$categories = get_categories( $args );

						if(is_subcategory()){
							$parent_cat = $current_category->parent; 
							$parent_category = get_category( $parent_cat );
					    	$args = array('child_of' => $parent_cat , 'hide_empty' => 0);
					    	$categoryImageName = $parent_category->slug;
							$categories = get_categories( $args );
						}
				  	?>
				  	<?php foreach ($categories as $category) { ?>
				  	
					  <div class="col-sm-6 col-md-2 <?php if( $category->slug == $current_category->slug){ echo 'active"';}?> ">
					    <div class="thumbnail">
					      <a href="<?php echo bloginfo('url');?>/category/recipes/<?php echo $category->slug;?>"><img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" alt="thousand"></a>
					    </div>
					     <div class="caption">
					        <p><a href="<?php echo bloginfo('url');?>/category/recipes/<?php echo $category->slug;?>" class="btn btn-primary" role="button"><?php echo $category->name;?></a> </p>
					      </div>
					  </div>

					  <?php } ?>

				 	</div> 	
				</div>
		  	</div>
		</div>
	</section>


<!-- Breakfast start -->
	<section class="recipes-container">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="welcome-heading">
				  		<h1><?php echo single_cat_title(); ?></h1>
				  	</div>
					 <div id="content" class="recipes">
					 	<!-- current tab one -->
						<div class="product-container" id="product-1"> 
							<?php 
								$args = array(
									  'category' => get_query_var('cat')
									);
							 	$recipes = get_posts($args);

							foreach ($recipes as $recipe) { ?>
						  	<div class="col-sm-6 col-md-3">
							    <div class="thumbnail">
							    	<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($product->ID) ); ?>
							      <a href=""><img src="<?php echo $url; ?>" alt="thousand"></a>
							    </div>
							     <div class="caption">
							        <h3><?php echo $recipe->post_title; ?></h3>
							        <p><a href="#" class="btn btn-primary" role="button">Get The Recipe</a> </p>
							      </div>
						  	</div>

						  	<?php } ?>
					 	</div> 

					 </div>
					<div id="page-selection" class="news-pager">
						<ul class="pagination bootpag">
						   <li data-lp="5" class="prev"><a href="javascript:void(0);">  </a></li>
						   <li data-lp="1" class=""><a href="javascript:void(0);">1</a></li>
						   <li data-lp="2" class=""><a href="javascript:void(0);">2</a></li>
						   <li data-lp="3" class=""><a href="javascript:void(0);">3</a></li>
						   <li data-lp="4" class="" style="display: inline;"><a href="javascript:void(0);">4</a></li>
						   <li data-lp="5" class="" style="display: inline;"><a href="javascript:void(0);">5</a></li>
						   <li data-lp="6" class="active" style="display: inline;"><a href="javascript:void(0);">6</a></li>
						   <li data-lp="7" class="" style="display: inline;"><a href="javascript:void(0);">7</a></li>
						   <li data-lp="11" class="next"><a href="javascript:void(0);"><img src="images/news/next.png" alt=""/></a></li>
						</ul>
					</div>
				</div>
		  	</div>
		</div>
	</section>


	<!-- RECIPE FACTORY START -->
	<section class="recipes-container recipes-fac-border">
		<div class="container">
			<div class="row">
					<div class="welcome-heading">
				  		<h1>RECIPE FACTORY</h1>
				  	</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="recipe-input-border">
						<div class="col-xs-12 col-sm-12 col-md-8">
							<input type="text" name="" placeholder="ENTER AVAILABLE INGREDIENTS HERE">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-1">
							<input type="button" name="Go" value="Go" class="recipe-button">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3">
							<div class="styled-select">
								<select>
									<option selected>SELECT MEAL</option>
									<option>TOMATOES</option>
									<option>CUCUMBER</option>
									<option>BREAD</option>
								</select>
								<div class="select-button"><div class="small-arrow-down"></div></div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="recipes-search-keyword">
							<a href="#">X</a>
							<p>TOMATOES</p>
						</div>	
						<div class="recipes-search-keyword">
							<a href="#">X</a>
							<p>CUCUMBER</p>
						</div>
						<div class="recipes-search-keyword">
							<a href="#">X</a>
							<p>BREAD</p>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					 <div id="" class="recipes">
					 	<!-- current tab one -->
						<div class="product-container search-mr" id="product-1"> 
							<div class="col-sm-6 col-md-3">
							    <div class="thumbnail">
							      <a href="#"><img src="images/recipes/breakfast-img1.jpg" alt="thousand"></a>
							    </div>
							    <div class="caption">
							      <h3>Our Delicious <br>Thousand Island Dressing</h3>
							      <p><a href="#" class="btn btn-primary" role="button">Get The Recipe</a> </p>
							    </div>
								</div>
							<div class="col-sm-6 col-md-3">
							    <div class="thumbnail">
							      <a href=""><img src="images/recipes/breakfast-img2.jpg" alt="thousand"></a>
							    </div>
							    <div class="caption">
							       <h3>Our Crunchy <br> Italian </h3>
							       <p><a href="#" class="btn btn-primary" role="button">Get The Recipe</a> </p>
							    </div>
							</div>
						   	<div class="col-sm-6 col-md-3">
							    <div class="thumbnail">
							      <a href=""><img src="images/recipes/breakfast-img3.jpg" alt="thousand"></a>
							    </div>
							      <div class="caption">
							        <h3>Our Delicious<br> Russian</h3>
							        <p><a href="#" class="btn btn-primary" role="button">Get The Recipe</a> </p>
							      </div>
						  	</div>
						   	<div class="col-sm-6 col-md-3">
							    <div class="thumbnail">
							      <a href=""><img src="images/recipes/breakfast-img4.jpg" alt="thousand"></a>
							    </div>
							     <div class="caption">
							        <h3>Our Delicious<br> IRISH CREAM</h3>
							        <p><a href="#" class="btn btn-primary" role="button">Get The Recipe</a> </p>
							      </div>
						  	</div>
						   	<div class="col-sm-6 col-md-3">
							    <div class="thumbnail">
							      <a href="#"><img src="images/recipes/breakfast-img1.jpg" alt="thousand"></a>
							    </div>
							     <div class="caption">
							        <h3>Our Delicious <br>Thousand Island Dressing</h3>
							        <p><a href="#" class="btn btn-primary" role="button">Get The Recipe</a> </p>
							      </div>
						  	</div>
						   	<div class="col-sm-6 col-md-3">
							    <div class="thumbnail">
							      <a href=""><img src="images/recipes/breakfast-img2.jpg" alt="thousand"></a>
							    </div>
							     <div class="caption">
							        <h3>Our Crunchy <br> Italian </h3>
							        <p><a href="#" class="btn btn-primary" role="button">Get The Recipe</a> </p>
							      </div>
						  	</div>
						   	<div class="col-sm-6 col-md-3">
							    <div class="thumbnail">
							      <a href=""><img src="images/recipes/breakfast-img3.jpg" alt="thousand"></a>
							    </div>
							      <div class="caption">
							        <h3>Our Delicious<br> Russian</h3>
							        <p><a href="#" class="btn btn-primary" role="button">Get The Recipe</a> </p>
							      </div>
						  	</div>
						  	<div class="col-sm-6 col-md-3">
							    <div class="thumbnail">
							      <a href=""><img src="images/recipes/breakfast-img4.jpg" alt="thousand"></a>
							    </div>
							     <div class="caption">
							        <h3>Our Delicious<br> IRISH CREAM</h3>
							        <p><a href="#" class="btn btn-primary" role="button">Get The Recipe</a> </p>
							      </div>
						  	</div>
					 	</div> 

					 </div>
					<div id="page-selection" class="news-pager">
						<ul class="pagination bootpag">
						   <li data-lp="5" class="prev"><a href="javascript:void(0);"> <img src="images/news/prev.png" alt=""/> </a></li>
						   <li data-lp="1" class="active"><a href="javascript:void(0);">1</a></li>
						   <li data-lp="2" class=""><a href="javascript:void(0);">2</a></li>
						   <li data-lp="3" class=""><a href="javascript:void(0);">3</a></li>
						   <li data-lp="4" class="" style="display: inline;"><a href="javascript:void(0);">4</a></li>
						   <li data-lp="5" class="" style="display: inline;"><a href="javascript:void(0);">5</a></li>
						   <li data-lp="6"  style="display: inline;"><a href="javascript:void(0);">6</a></li>
						   <li data-lp="7" class="" style="display: inline;"><a href="javascript:void(0);">7</a></li>
						   <li data-lp="11" class="next"><a href="javascript:void(0);"><img src="images/news/next.png" alt=""/></a></li>
						</ul>
					</div>
				</div>
		  	</div>
		</div>
	</section>



<?php get_footer(); ?>
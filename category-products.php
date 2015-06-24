<?php

get_header(); ?>

<!-- Product container -->
	<section class="products-container">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="welcome-heading">
				  		<h1><?php echo single_cat_title(); ?></h1>
				  	</div>
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
				  	<div class="products-cat">
				  			<a href="<?php echo bloginfo('url');?>/category/products" class="<?php if( $current_category->slug == 'products'){ echo 'active';}?> ">All Products</a>
				  		<?php foreach($categories as $category){ ?>
				  			<a href="<?php echo bloginfo('url');?>/category/products/<?php echo $category->slug; ?>" class="<?php if( $category->slug == $current_category->slug){ echo 'active"';}?> "><?php echo $category->name; ?></a>
				  		<?php } ?>
				  	</div>
					 <div id="content" class="recipes product-item">
					 	<!-- current tab one -->
						<div class="product-container" id="product-1"> 
							<?php 
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$args = array(
									  	'cat' => get_query_var('cat'),
									 	'paged' => $paged,
                                 		'posts_per_page' => 3
									);
							 	$products = new WP_Query($args);

							while ($products->have_posts()) : $products->the_post(); ?>
							
							<div class="col-sm-6 col-md-3">
							    <div class="thumbnail">
							    	<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							      <a href=""><img src="<?php echo $url; ?>" alt="thousand"></a>
							      <div class="special_offer"><img src="<?php echo get_template_directory_uri(); ?>/images/home/special-offer.png"></div>
							    </div>
							    <div class="caption">
							       <h3><?php echo $post->post_title; ?></h3>
							       <div class="product-button">
							      	 <a href="#">Shop</a> 
							      	 <a href="#">Info</a> 
							      	 <a href="#">Recipes</a> 
							      </div>
							    </div>
							</div>
						 <?php endwhile; ?>

					 	</div> 

					 </div>
					 <?php wp_pagenavi( array( 'query' => $products ) ); ?>
				</div>
		  	</div>
		</div>
	</section>


	<!-- PRODUCT ENQUIRY -->
	<section class="recipes-container recipes-fac-border">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="products-border">
						<p>
							<?php echo get_option('query_title')?>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="products-enquiry">
						<form action="">
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
		</div>
	</section>


<?php

get_footer();

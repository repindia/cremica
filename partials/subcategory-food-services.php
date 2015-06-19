

<!-- Product container -->
	<section class="products-container recipes-fac-border">
		<div class="container salad-dressing">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="welcome-heading">
				  		<h1><?php echo $parentCategoryName; ?></h1>
				  	</div>
				  	<div class="products-cat">
				  		<a href="#">All Products</a>
				  	<?php foreach($categories as $category){ ?>
				  		<a href="<?php echo bloginfo('url'); ?>/category/food-services/<?php echo $category->slug;?>"   class="<?php if( $category->slug == $current_category->slug){ echo 'active"';}?> "><?php echo $category->name; ?></a>
				  	<?php } ?>
				  	</div>
					 <div id="content" class="recipes product-item">
					 	<!-- current tab one -->
						<div class="product-container" id="product-1"> 
							<?php 
								$args = array(
									  'category' => get_query_var('cat')
									);
							 	$products = get_posts($args);

							 	foreach ($products as $product) { 
							?>
							<div class="col-sm-6 col-md-3">
							    <div class="thumbnail">
							    	<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($product->ID) ); ?>
							      <a href="#"><img src="<?php echo $url;?>" alt="<?php echo $product->post_title;?>"></a>
							    </div>
							    <div class="caption">
							      <h3><?php echo $product->post_title;?></h3>
							      <div class="product-button">
							      	 <a href="#">Packets</a> 
							      	 <a href="#">Inquire</a> 
							      </div>
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

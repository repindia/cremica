<?php
/*
Template Name: Events Page
*/

get_header();?>

<!-- events  -->
	<section class="">
		<div class="container about-us">
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
		<div class="container news">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					 <div id="content" class="events">
					 	<!-- current tab one -->
						<div class="product-container" id="product-1">
		
						<?php 

						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							  	'post_type' => 'events',
							 	'paged' => $paged,
                         		'posts_per_page' => 3,
							);
					 	$events = new WP_Query($args);


	  					while ($events->have_posts()) : $events->the_post(); ?>
						  <div class="col-sm-6 col-md-3">
						  <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						    <div class="thumbnail" style="background-image:url(<?php echo $url; ?>); background-color:#b23032">
						    </div>
						     <div class="caption events-red-bt">
						        <h3><?php echo $post->post_title;?></h3>
						        <span>
						        		<?php echo get_the_time('l, F jS, Y', $post->ID); ?>
						        </span>
					        	<p>
					        		<?php echo $post->post_content; ?>
					     		</p>
						        <p><a href="#" class="btn btn-primary" role="button">View</a> </p>
						      </div>
						  </div>
						   <?php endwhile; ?>

					 </div>	
				</div>
		  	</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<?php wp_pagenavi( array( 'query' => $events ) ); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
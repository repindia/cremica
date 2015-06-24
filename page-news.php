<?php
/*
Template Name: News Page
*/

get_header();?>

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
					<!-- tab one -->
					<div class="product-container"> 

						<?php 

						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							  	'post_type' => 'news',
							 	'paged' => $paged,
                         		'posts_per_page' => 1,
							);
					 	$news = new WP_Query($args);


	  					while ($news->have_posts()) : $news->the_post(); ?>

						<div class="col-sm-6 col-md-3">
							<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							<div class="thumbnail" style="background-image:url(<?php echo $url; ?>);">
							</div>
							<div class="caption">
								<h3><?php echo $post->post_title;?></h3>
								<p><a href="#" class="btn btn-primary" role="button">View</a> </p>
							</div>
						</div>
					<?php endwhile; ?>
					</div> 
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
				<?php wp_pagenavi( array( 'query' => $news ) ); ?>
			</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
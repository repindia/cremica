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

					<?php $args = array(
						  'post_type'   => 'news',
						  'post_status' => 'publish'
						);

	  					$all_news = get_posts($args); 
	
	  					foreach ($all_news as $news ) { ?>

						<div class="col-sm-6 col-md-3">
							<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($news->ID) ); ?>
							<div class="thumbnail" style="background-image:url(<?php echo $url; ?>);">
							</div>
							<div class="caption">
								<h3><?php echo $news->post_title;?></h3>
								<p><a href="#" class="btn btn-primary" role="button">View</a> </p>
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
						<li data-lp="11" class="next"><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/news/next.png" alt=""/></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
	<!-- Footer start -->
	<section class="footer">
		<div class="container">
			<div class="row">
		 		 <div class="col-xs-12 col-sm-12 col-md-10">
				  		<?php $menu_args = array(
				        'container'       => '',
				        'echo'            => true,
				        'fallback_cb'     => 'wp_page_menu',
				        'items_wrap'      => '<ul class="">%3$s</ul>',
				        'depth'           => 0,
				        'theme_location' => 'footer-menu'
				    );	?>
				    <?php wp_nav_menu( $menu_args ); ?>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2 text-center">
					DESIGNED BY <a href="http://www.repindia.com/" target="_blank">REPINDIA</a>
				</div>
		  	</div>
		</div>
	</section>

</div>	
</body>
	<script  type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
	<!-- end -->

	<!-- slider js -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/slider/css/slide.css" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/slider/js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/slider/js/jquery.cslider.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#da-slider').cslider({
				autoplay	: false,
				bgincrement	: 0,
				touchEnabled: true,
				snapToChildren: true,
				desktopClickDrag: true
			});
		});
	</script>
	<!-- END -->
</html>
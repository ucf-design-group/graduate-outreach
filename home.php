<?php /* Template Name: Home */
get_header(); ?>

			<div class="content-area">
				<div class="videobg">
					<video src="<?php echo get_stylesheet_directory_uri(); ?>/resources/spirit.mp4" loop autoplay></video>
				</div>
				<div class="main">
					<?php
					while (have_posts()) {
						the_post();
						get_template_part( 'content' );
					} ?>
				</div>
				<div class="streetteamAdWrap">
					<div class="streetteamAd">
						<img src="http://placehold.it/200x200" alt="">
						<div class="streetteamAdDescription">
							<h2>Four loko post-ironic actually?</h2>
							<p>Four loko post-ironic actually, Bushwick viral PBR&amp;B distillery butcher. American Apparel iPhone Austin, next level chia fingerstache asymmetrical actually sriracha XOXO VHS. Forage hoodie art party authentic artisan locavore tattooed. Austin stumptown before they sold out, irony whatever locavore butcher crucifix letterpress Schlitz sartorial normcore brunch.</p>
						</div>
					</div>
				</div>
			</div>

<?php get_footer(); ?>
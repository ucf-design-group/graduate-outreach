<?php /* Template Name: Home */
get_header(); ?>

			<div class="content-area">
				<div class="videobg">
					
				</div>
				<div class="main">
					<?php
					while (have_posts()) {
						the_post();
						get_template_part( 'content' );
					} ?>
				</div>
				<div class="streetteamAd">
					
				</div>
			</div>

<?php get_footer(); ?>
<?php /* Template Name: Street Team */
get_header(); ?>

			<div class="content-area">
				<div class="streetTeamSection">
					
				</div>
				<div class="main">
					<?php
					while (have_posts()) {
						the_post();
						get_template_part( 'content' );
					} ?>
				</div>
				<div class="streetTeamSignUp">
					
				</div>
			</div>

<?php get_footer(); ?>
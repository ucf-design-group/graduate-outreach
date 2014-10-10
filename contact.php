<?php /* Template Name: Contact */
get_header(); ?>

			<div class="content-area">
				<div class="main">
					<?php
					while (have_posts()) {
						the_post();
						get_template_part( 'content' );
					} ?>
				</div>

					<section class="exec-board">
						<h2>Graduate Outreach Executive Board</h2>
<?php
						$leaderLoop = new WP_QUERY(array('post_type' => 'exec-board', 'posts_per_page' => -1, 'orderby' =>'meta_value', 'order' => 'ASC', 'meta_key' => 'leader-form-order'));
						while ($leaderLoop->have_posts()) {
							$leaderLoop->the_post();
							$title = get_the_title();
							$content = get_the_content();
							$image = get_the_post_thumbnail($post->ID, 'thumbnail');
							$position = get_post_meta($post->ID, 'leader-form-position', true);
							$email = get_post_meta($post->ID, 'leader-form-email', true);
							$image_url = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'full');

?>	
						<article class="leader" style="background-image: url('<?php echo $image_url[0]; ?>') ">
							<div class="leaderinfo">
								<h3><?php echo $title; ?></h3>
								<p><?php echo $position; ?></p>
								<a class="email" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
							</div>
						</article>
<?php 				}
?>
					</section>
			</div>

<?php get_footer(); ?>
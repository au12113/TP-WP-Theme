<?php get_header(); ?>

<div class="container-fluid content-zone">

	<!-- Posts Container -->
	<div class="posts-container">
		<!-- Higihlight Post -->
		<div class="post highlight ">
			<?php
				$highlight = get_posts(array(
					'posts_per_page' => 1,
					'post_type' => 'highlight'
				));
				foreach($highlight as $post) {
					setup_postdata($post);
					tp_highlight();
					wp_reset_postdata();
				}
			?>
		</div>
		<!-- Recent Posts -->
		<div class="">
			<?php 
				$lastestposts = get_posts(array(
					'posts_per_page' => 2,
					'offset' => 0
				))
			?>
			<?php if($lastestposts) : ?>
				<?php foreach($lastestposts as $post) : ?>
					<?php setup_postdata($post); ?>
					<div class="post">
						<?php tp_post($post); ?>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endforeach; ?>
			<?php else : ?>
				<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'tp'); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<div style="height:600px">
			</div>
</div>

<?php get_footer(); ?>
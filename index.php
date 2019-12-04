<?php get_header(); ?>

<div class="container-fluid content-section">

	<!-- Posts Container -->
	<div class="posts-container">
		<!-- Higihlight Post -->
		<div class="post highlight">
			<?php
				$highlight = get_posts(array(
					'posts_per_page' => 1,
					'category_name' => 'Highlight'
				));
				foreach($highlight as $post) {
					setup_postdata($post);
					tp_highlight();
					wp_reset_postdata();
				}
			?>
		</div>
		<!-- Recent Posts -->
		<div>
			<?php 
				$lastestposts = get_posts(array(
					'posts_per_page' => 2,
					'category_name' => 'Uncategorized',
					'offset' => 0
				))
			?>
			<?php if($lastestposts) : ?>
				<?php foreach($lastestposts as $post) : ?>
					<?php setup_postdata($post); ?>
					<div class="post">
						<?php tp_post(); ?>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endforeach; ?>
			<?php else : ?>
				<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'tp'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
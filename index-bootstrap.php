<?php get_header(); ?>

<div class="container">

	<!-- Post Container -->
	<div class="row d-none d-lg-block">
		<!-- Higihlight Post -->
		<div class="col-sm-10 col-xl-6">
			<?php
				$highlight = get_posts(array(
					'posts_per_page' => 1,
					'offset' => 5,
				));
				foreach($highlight as $post) {
					echo $post->title;
					setup_postdata($post);
					tp_highlight();
					wp_reset_postdata();
				}
			?>
		</div>
	</div>
		<!-- Recent Posts -->
	<div class="col-sm-10 col-xl-6 ">
		<?php 
			$lastestposts = get_posts(array(
				'posts_per_page' => 3,
				'offset' => 0
			))
		?>
		<?php if($lastestposts) : ?>
			<?php foreach($lastestposts as $post) : ?>
				<?php setup_postdata($post); ?>
				<div class="row">
					<?php tp_post($post); ?>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endforeach; ?>
		<?php else : ?>
			<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'tp'); ?></p>
		<?php endif; ?>
	</div>

</div>

<?php get_footer(); ?>
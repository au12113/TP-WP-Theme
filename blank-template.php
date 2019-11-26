<?php get_header(); ?>
<?php if(have_posts()) { ?>
  <?php while(have_posts()) { ?>
    <?php the_post();?>
      <h2>
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </h2>
      <div>
        <?php tp_post_meta(); ?>
      </div>
      <div>
        <?php the_excerpt(); ?>
      </div>
      <?php tp_readmore_link(); ?>
    <?php } ?>
    <?php the_posts_pagination() ?>
  <?php } else { ?>
  <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'tp'); ?></p>
<?php } ?>

<?php
  $comments = 1;
  printf('This post has '._n('One comment.', '%s comments.', $comments, 'tp'),$comments);
  _x('Post', 'verb', 'tp');
?>

<?php
  $city = 'london';
  printf(
    /* translators: %s is the city name */
    esc_html__('Your city is %s', 'tp'),$city
  );
?>

<?php get_footer(); ?>
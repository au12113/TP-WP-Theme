<?php
  require_once('lib/helpers.php');
  require_once('lib/bootstrap.php');
  require_once('lib/wordpress-helpers.php');

  /* to enable featured image including choose featured image in post editor */
  add_theme_support( 'post-thumbnails' );

  function tp_highlight() {
    // setup_postdata($posts);
    tp_post();
    // wp_reset_postdata();
  }

  function tp_post() {
    printf(
      '<div class="tp-thumbnail">%s</div>',
      get_the_post_thumbnail(null, 'medium', array('class' => 'thumbnail'))
    );
    printf(
      '<div><a href="%s">', 
      esc_url(get_permalink())
    );
    printf(
      '%s</a></div>',
      esc_html(the_title())
    );
    printf(
      '<div>%s</div>', 
      tp_post_meta()
    );
    printf(
      '<div>%s',
      excerpt(10)
    );
    printf(
      "\t".'%s</div>',
      tp_readmore_link(false)
    );
    printf(
      '<div>%s</div>',
      esc_html__(
        comments_number('No comment in here.', '1 comment', '%s comments')
      )
    );
    // printf('</div>');
  }
?>
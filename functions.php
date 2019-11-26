<?php
  require_once('lib/helpers.php');
  require_once('lib/bootstrap.php');
  require_once('lib/wordpress-helpers.php');

  function tp_highlight() {
    // setup_postdata($posts);
    tp_post();
    // wp_reset_postdata();
  }

  function tp_post() {
    printf(
      '<div class=""><a href="%s">', 
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
      excerpt(20)
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
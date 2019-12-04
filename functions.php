<?php
  require_once('lib/helpers.php');
  require_once('lib/bootstrap.php');
  require_once('lib/wordpress-helpers.php');

  function tp_highlight() {
    tp_post('highlight');
  }

  function tp_post($category='Uncategorized') {
    tp_featured_image();
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
  }
?>
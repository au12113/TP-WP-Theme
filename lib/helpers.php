<?php
  function tp_featured_image(){
    $featured_image = get_featured_image_url();
    printf(
      '<img class="featured-image" src="%s" >',
      $featured_image
    );
  }

  function tp_post_meta(){
    printf(
      esc_html__(' Posted on %s ', 'tp'), 
      '<a href="' . esc_url(get_permalink()) . '"><time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time></a>'
    );

    printf(
      esc_html__('By %s', 'tp'),
      '<a href="' . esc_url(get_author_posts_url( get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>'
    );
  }

  function tp_readmore_link($withTitle) {
    echo "\t".'<a href="' . esc_url(get_the_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">Read More';
    if($withTitle){
      printf(
        wp_kses(
          __(' <span class="u-screen-reader-text">About %s</span>','tp'),
          [
            'span' => [
              'class' => ['u-screen-reader-text']
            ]
          ]
        ),
        get_the_title()
      );
    }
    echo '</a>';
  }
  
  function tp_pagination(){
    global $wp_query;
    echo paginate_links();
  }
?>
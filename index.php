<?php
get_header();
?>
<div id='main-content' class='main-content'>
  <div id='primary' class='primary'>
    <?php
    if( have_posts() ) : while( have_posts() ) : the_post();
      the_content();
    endwhile;
    else:
      _e("Sorry, no posts found.", 'textdomain');
    endif;
    /*
    $post = get_page_by_title('homepage',OBJECT,'post');
    $content = apply_filter('the_content', $post->post_content);
    echo $content;
    */
  ?>
  </div>
</div>
<?php
get_sidebar('Primary');
get_footer();
?>

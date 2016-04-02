<?php
get_header();
?>
<div id='main-content' class='main-content'>
  <div id='primary' class='primary'>
  <?php
      $post = get_page_by_title('homepage',OBJECT,'post');
      $content = apply_filter('the_content', $post->post_content);
      echo $content;
  ?>
  </div>
</div>
<?php
get_sidebar();
get_footer();
?>

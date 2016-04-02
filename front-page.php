<?php
get_header();
?>
<div id='main-content' class='main-content'>
  <div id='primary' class='primary'>
    <?php
    if ( is_front_page() ) : the_post();
  	$page_on_front_id = get_option('page_on_front');
  	setup_postdata(get_page($page_on_front_id));
    ?>
    <div id="post-<?php the_ID(); ?>" class="page">
  		<div class="entry-content">
  			<?php the_content(); ?>
  			<?php //edit_post_link('Edit', '', '', get_option($page_on_front_id)); ?>
  		</div>
	   </div>
    <?php
    //rewind_posts();
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
get_sidebar();
get_footer();
?>

<?php
get_header();
?>
<div id='main-content' class='main-content'>
		<?php
			$page_this_id = get_option('page_on_front');
			setup_postdata(get_page($page_this_id));
		?>
		<div id="post-<?php the_ID(); ?>" >
			<div class="page-content">
			<?php the_content(); ?>
			<?php
		?>
		</div>
	</div>
</div>
<?php
get_sidebar();
get_footer();
?>
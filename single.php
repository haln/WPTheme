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
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		</div>
	</div>
</div>
<?php
get_sidebar();
get_footer();
?>
<?php
get_header();
?>
<?php
if (have_posts()) :

	if (is_home() && !is_front_page()) :
?>
		<header>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		</header>
<?php
	endif;
	if (!is_front_page()) :
		while (have_posts()) :
			the_post();
			get_template_part('category-' . get_the_category(get_the_ID())[0]->slug);
		endwhile;
	endif;
endif;
get_footer();

?>
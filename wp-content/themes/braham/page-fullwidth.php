<?php
/**
 * @package WordPress
 * @subpackage Braham Theme
 */

/*
Template Name: Full Width Template
*/
get_header();
?>

<?php get_header(); ?>


<!--begin content--><div id="content">


<div class="fullwidth-column">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-top"></div>
        <div class="post" id="post-<?php the_ID(); ?>">
        
	<?php edit_post_link('Edit this page', '<h6 class="editlink">', '</h6>'); ?>
		<h1><?php the_title(); ?></h1>
			<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	


</div>






<!--end wrapper--></div></div></div>

<?php get_footer(); ?>

</body>
</html>

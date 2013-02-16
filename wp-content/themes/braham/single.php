<?php
/**
 * @package WordPress
 * @subpackage Braham Theme
 */

get_header();
?>


<!--begin content--><div id="content">


<div class="left-column">

  <?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); $loopcounter++; ?>

<div class="post-top">


</div>

<div class="post" id="post-<?php the_ID(); ?>">


<!--the headliner-->
	<?php edit_post_link('Edit this post', '<h6 class="editlink">', '</h6>'); ?>
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
<div class="category"><?php the_category(',') ?> </div>       
          				
				<div class="entry">
					<?php the_content('<div>Read More&hellip;</div>'); ?>
				</div>
			</div>
<div class="post-bottom">

<li>Published On <!--the post date calendar--><span><?php the_time('M') ?>. <?php the_time('d') ?>, <?php the_time('Y') ?></span> by <span><?php the_author() ?></span></li>

</div> 
        
        



	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>




<!--end wrapper--></div></div></div>

<?php get_footer(); ?>

</body>
</html>

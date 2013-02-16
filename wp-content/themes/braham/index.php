<?php
/**
 * @package WordPress
 * @subpackage Braham Theme
 */
get_header();
?>


<!--begin content--><div id="content">


<div class="left-column">

 <?php query_posts($query_string . '&cat=,-51'); ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="post-top"></div>


<div class="post" id="post-<?php the_ID(); ?>">

<!--the headliner-->
	<?php edit_post_link('Edit this post', '<h6 class="editlink">', '</h6>'); ?>
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
<div class="category"><?php the_category(',') ?> </div>       
          				
				<div class="entry">
					<?php the_content('Read More&hellip;'); ?>
                    <br />
                   


</div><!--end entry-->
</div><!--end post-->
            





<div class="post-bottom">

<li>Published On <!--the post date calendar--><span><?php the_time('M') ?>. <?php the_time('d') ?>, <?php the_time('Y') ?></span> by <span><?php the_author() ?></span></li>

</div>           

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<div class="single-post"><h1>Not Found</h1></div>
		<p>Sorry, but you are looking for something that isn't here.</p>
		
	<?php endif; ?>

</div>


<?php get_sidebar(); ?>




<!--end wrapper--></div></div></div>

<?php get_footer(); ?>

</body>
</html>

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

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h1 class="pagetitle">You Are Viewing All Posts In The <?php single_cat_title(); ?> Category
		</h1>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h1>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h1>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="pagetitle">Author Archive</h1>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="pagetitle">Blog Archives</h1>
<?php } ?>




		<?php while (have_posts()) : the_post(); ?>
		
	<div class="post-top"></div>


<div class="post" id="post-<?php the_ID(); ?>">
<!--the headliner-->
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

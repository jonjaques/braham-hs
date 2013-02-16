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

		<h1 class="pagetitle">Search Results</h1>

	


		<?php while (have_posts()) : the_post(); ?>

<div class="post-top"></div>


<div class="post" id="post-<?php the_ID(); ?>">

<!--the headliner-->
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
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
<div class="post-top"></div>
		<div class="post">
		  <h1>Sorry, I Couldn't Find Anything...</h1>
		 <hr />
		<p>Please try again or browse through the archives below:</p>
		
     
	<h3>Categories</h3>
   <ul class="list">
<?php wp_list_cats(''); ?>
</ul>

    <h3>Tags</h3>
    <ul class="list">
<?php wp_tag_cloud('smallest=8&largest=14&'); ?>
</ul>




    <h3>Archives By Month</h3>
    <ul class="list"><?php wp_get_archives('type=monthly&limit=12'); ?> </ul>
    <h3>Archives By Year</h3>
    <ul class="list"><?php wp_get_archives('type=yearly'); ?> </ul>
</div>
	<?php endif; ?>

</div>


<?php get_sidebar(); ?>




<!--end wrapper--></div></div></div>

<?php get_footer(); ?>

</body>
</html>

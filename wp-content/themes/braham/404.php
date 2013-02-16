<?php
/**
 * @package WordPress
 * @subpackage Braham Theme
 */

get_header();
?>


<!--begin content--><div id="content">


<div class="left-column">
<div class="post-top"></div>
		<div class="post">
		  <h1>Whoops, This Page Was Not Found (404)...</h1>
        <?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        } ?>
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

</div>


<?php get_sidebar(); ?>




<!--end wrapper--></div></div></div>

<?php get_footer(); ?>

</body>
</html>



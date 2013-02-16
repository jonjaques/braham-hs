<div class="sidebar">
<div id="searchbar">
<div style="padding:10px;">
<?php get_search_form(); ?> 
</div>
</div>

 <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>


<div class="rightbox">
<h2>Categories</h2>
<ul class="list">
<?php wp_list_cats(''); ?>
</ul>
</div>

<!--remove this comment tag to enable tag cloud
<div class="rightbox">
<h2>Tag Cloud</h2>
<div id="tagcloud">
<?php wp_tag_cloud('smallest=8&largest=24&'); ?>
</div>
</div>
-->


<div class="rightbox">
<h2 class="brown">Other Great Sites</h2>
<ul class="list">
<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
</ul>
</div>


      
<?php endif; ?>


</div>
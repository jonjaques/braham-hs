<div id="footer">
<div id="wrapper">


<div id="column-1">
<h3>Recent Posts</h3>
<ul><?php wp_get_archives('type=postbypost&limit=6'); ?> </ul>
</div>
<div id="column-2">
<h3> Archives</h3>
<ul><?php wp_get_archives('type=monthly&limit=6'); ?> </ul>
</div>
<div id="column-3">
<h3>About The Site</h3>
<p><?php bloginfo('description'); ?></p>
</div>

</div>
</div>

<?php wp_footer(); ?>


    <script>jQuery('.braham-primenav').addClass('sf-menu');</script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/hoverIntent.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/superfish.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/supersubs.js"></script>
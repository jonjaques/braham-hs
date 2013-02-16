<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Posts <?php } ?> <?php wp_title(); ?></title>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
<!--javascript-->
<?php wp_enqueue_script('jquery'); ?>

	<?php wp_head(); ?>
	<!--[if lt IE 7.]>
    	<script defer type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/pngfix.js"></script>
    <![endif]-->





<meta name="verify-v1" content="rR/yKeJPedj3aF5lCH6917AnhLjliCy1Zhv/3F+ata8=" />
</head>

<body><!--begin body-->

<div id="headerbg">
<!--begin header--><div id="header">
  <h1><a href="<?php bloginfo('url'); ?>" title="Home - <?php bloginfo('name'); ?>" alt="Home - <?php bloginfo('name'); ?>">Braham Area Schools</a></h1>
</div>
</div><!--end headerbg-->

<div id="navbg">
<!--begin nav--><div id="navbar">
<!-- <ul class="sf-menu">
            <li style="border-left: 1px solid #51471C"><a href="/">Home</a></li>
			<?php // wp_list_pages('sort_column=menu_order&depth=4&title_li='); ?>
</ul> -->

  <?php

  $defaults = array(
    'menu_class'      => 'braham-primenav',
    'menu_id'         => 'primeNav',
    'echo'            => true
  );

  wp_nav_menu( $defaults );

  ?>



</div>
</div><!--end navbg-->
<!--begin wrapperbg--><div id="wrapperbg">
<!--begin wrapper--><div id="wrapper">



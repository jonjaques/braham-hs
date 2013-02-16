<?php

register_nav_menu( 'primary', 'Primary Nav' );


if ( function_exists('register_sidebar') )
	register_sidebar(array(

        'before_widget' => '<div class="rightbox"><div class="list">',
        'after_widget' => '</div></div>',
        'before_title' => '<h2 class="blue">',
        'after_title' => '</h2>',
    ));

?>
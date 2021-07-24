<?php get_header(); 

wp_nav_menu(
    array('theme_location' => 'primary')
);

echo "=========================================";

dynamic_sidebar('penshop-sidebar-1');

get_footer(); ?>
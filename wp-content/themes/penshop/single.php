<?php
//to check if post is available
if(have_posts()){
    //loop through each post
    while(have_posts()){
        //just to count the total post for wordpress
        the_post();
        //show the posts tile
        the_title();
        //show the short discription
        the_content();
    }
}
?>
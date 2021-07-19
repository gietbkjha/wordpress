<?php
//to check if post is available
if(have_posts()){
        //show the posts tile
        the_title();
        //show the short discription
        the_content();
}
?>
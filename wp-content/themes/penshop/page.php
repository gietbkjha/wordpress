<?php 
//check if page has content
if(have_posts()){
        //the tile 
        the_title();
        //the content
        the_content();
}

?>
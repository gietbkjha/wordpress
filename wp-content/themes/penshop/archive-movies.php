<?php
//to check if post is available
if(have_posts()){
    //loop through each post
    while(have_posts()){
        //just to count the total post for wordpress
        the_post();
        //show the posts tile
        ?>
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        <?php
        //show the short discription
        the_excerpt();
        //We have used for better visiblity
        echo "=====================</br>";
    }
}
?>
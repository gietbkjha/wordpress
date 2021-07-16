<?php

function add_welcome_note() {
    echo '<h1>Welcome to Penshop</h1>';   
}
//create shortcode
add_shortcode('welcome_note','add_welcome_note');
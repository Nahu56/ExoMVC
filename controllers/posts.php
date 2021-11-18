<?php

require_once("models/comments.php"); 
require_once("models/posts.php"); 


function getPostsListController(){
    $query = getPosts();

    require ('views/posts.php');
}




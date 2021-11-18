<?php

require_once('database.php');

function getPosts(){
    $dbh = initDatabse();
    $stmt = $dbh->prepare("SELECT * FROM posts");
    $stmt->execute();
    
    $result = $stmt->fetchAll();

    return $result;
}


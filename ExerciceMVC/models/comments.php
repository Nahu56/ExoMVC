<?php
require_once('database.php');

function getComments($idpost){
    $dbh = initDatabse();
    $stmt = $dbh->query("SELECT * FROM comments WHERE post_id=$idpost");
    $result = $stmt->fetchAll();

    return $result;
}
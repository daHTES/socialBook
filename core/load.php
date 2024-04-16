<?php

include 'database/connection.php';
include 'classes/users.php';
include 'classes/post.php';

define("BASE_URL", "http://socialnetworkcopyfacebook/");

global $pdo;

$loadFromUser = new User($pdo);
$loadFromPost = new Post($pdo);

?>
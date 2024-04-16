<?php
include "../load.php";
include "../../connect/login.php";

$userid = Login::isLoggedIn();

if(isset($_POST['comment'])){

    $comment_text = $loadFromUser->checkInput($_POST['comment']);
    $userid = $_POST['userid'];
    $postid = $_POST['postid'];
    $profileid = $_POST['profileid'];

   $commentid = $loadFromUser->create('comments', array(
        'commentBy' => $userid,
        'comment_parent_id' => $postid,
        'comment' => $comment_text,
        'commentOn' => $postid,
        'commentAt' => date('Y-m-d H:i:s')
    ));


   echo 'Its demo comment text from aja file';

}


?>
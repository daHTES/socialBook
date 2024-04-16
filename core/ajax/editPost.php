<?php

include '../load.php';
include '../../connect/login.php';


$user_id = Login::isLoggedIn();

if (isset($_POST['editedTextVal'])){

    $editorTextValue = $_POST['editedTextVal'];
    $userid = $_POST['userid'];
    $postid = $_POST['postid'];
    $loadFromPost->postUpd($userid, $postid, $editorTextValue);

    echo $editorTextValue;
}

if (isset($_POST['deletePost'])){

    $deletePost = $_POST['deletePost'];
    $userid = $_POST['userid'];
    $loadFromPost->delete('post', array('post_id' => $postid, 'userId' => $userid));


}

?>
<?php

include "../load.php";
include "../../connect/login.php";

$userid = Login::isLoggedIn();

if(isset($_POST['imgName'])){

    $imgName = $loadFromUser->checkInput($_POST['imgName']);
    $user_id = $loadFromUser->checkInput($_POST['userid']);

    $loadFromUser->update('profile', $userid, array('coverPic' => $imgName));

}

if (0 < $_FILES['file']['error']) {

    echo 'Error: ' . $_FILES['file']['error'].'<br>';

} else {

    $path_directory = $_SERVER['DOCUMENT_ROOT']."/user/".$userid."/coverphoto/";

    if (!file_exists($path_directory) && !is_dir($path_directory)) {
        mkdir($path_directory, 0777, true);
    }
    move_uploaded_file($_FILES['file']['tmp_name'], $path_directory.$_FILES['file']['name']);

    echo 'user/'.$userid.'/coverphoto/'.$_FILES['file']['name'];
}



?>
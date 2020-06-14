<?php

require "db.php";
if (isset($_POST['send'])) {
    if(trim($_POST['nickname']) == "" || trim($_POST['comment']) == "") {
        $err = "Please, fill all the fields";
    } else {

$comments  = R::dispense('comments');
$comments ->nickname = $_POST['nickname'];
$comments ->comment = $_POST['comment'];
$comments ->date = date("d M Y");
$comments ->like = $_POST['like_txt'];


R::store($comments);
header('location: /billiard/about_us.php');
    }
}

?>
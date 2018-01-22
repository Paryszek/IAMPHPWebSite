<?php
session_start();
$post_id = $_POST["post_id"];
if (isset($_POST['message']) and isset($post_id) and isset($_POST['post_id']) and isset($_POST['author']) and isset($_SESSION['username'])) {
    require('../cfg/config.php');
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    $connect->set_charset("utf8");

    $message = htmlentities($_POST['message']);
    $author = htmlentities($_POST['author']);
    $user_id = $_POST['user_id'];
    $post_id = $_POST['post_id'];

    if($connect->query("INSERT INTO comments VALUES (DEFAULT, '$message', 0, DEFAULT , '$author', '$user_id', '$post_id')")) {
        header("Location: ../view.php?post_id=$post_id&success=true");
    } else {
        header("Location: ../view.php?post_id=$post_id&success=false");
    }
} else {
    echo $post_id;
    header("Location: ../view.php?post_id=$post_id&success=false");
}


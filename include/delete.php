<?php
session_start();
if (isset($_POST['post_id'])) {
        require('../cfg/config.php');
        $connect = new mysqli($host, $db_user, $db_password, $db_name);
        $connect->set_charset("utf8");
        $id = $_POST['post_id'];
        if($connect->query("DELETE FROM posts WHERE post_id = '$id'")) {
            header("Location: ../index.php?id=$post_id&delete=true");
        } else {
            header("Location: ../index.php?id=$post_id&delete=false");
        }
}
?>

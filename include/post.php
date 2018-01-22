<?php
session_start();
if (isset($_POST['title']) and isset($_POST['message']) and isset($_POST['region_type']) and isset($_SESSION['username'])) {
        require('../cfg/config.php');
        $connect = new mysqli($host, $db_user, $db_password, $db_name);
        $connect->set_charset("utf8");

        $title = htmlentities($_POST['title']);

        $message = htmlentities($_POST['message']);

        $region_type = htmlentities($_POST['region_type']);

        $where;
        if ($region_type == 1) {
            $where = "Country";
        } else if ($region_type == 2) {
            $where = "Region";
        } else if ($region_type == 3) {
            $where = "City";
        }
        $user = $_SESSION['username'];
        $getData = $connect->query("SELECT * FROM users WHERE Login = '$user'");

        $data = $getData->fetch_assoc();

        $region_name = $data[$where];
        $author = $data["First"]." ".$data["Last"];
        if($connect->query("INSERT INTO posts VALUES (DEFAULT, '$title', '$message', '$author', '$region_name', '$region_type', DEFAULT, DEFAULT)")) {
            header("Location: ../post.php?success=true");
        } else {
            header("Location: ../post.php?success=false");
        }
}
?>

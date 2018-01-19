<?php
    session_start();
    $fmsg = "";
    require('../cfg/config.php');
    if (isset($_SESSION['username']) || isset($_SESSION['logged'])) {
        header("Location: ../index.php");
    } else {
        if (isset($_POST['username']) and isset($_POST['password'])) {
            $connect = new mysqli($host, $db_user, $db_password, $db_name);
            $connect->set_charset("utf8");
            $username = htmlentities($_POST['username']);
            $password = htmlentities($_POST['password']);
            $query = "SELECT * FROM `users` WHERE Login='$username' and Password='$password'";

            $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['logged'] = true;
                header("Location: ../index.php");
            } else {
                header("Location: ../login.php?logowanie=false");
            }
        } else {
            header("Location: ../login.php?logowanie=false");
        }
    }
?>

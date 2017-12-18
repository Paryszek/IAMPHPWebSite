<?php
session_start();
require('../cfg/config.php');
if (isset($_SESSION['username']) && $_SESSION['logged']) {
    header("Location: ../index.php");
} else {
    if (isset($_POST['login']) and isset($_POST['email']) and isset($_POST['first']) and isset($_POST['last']) and isset($_POST['password']) and isset($_POST['password_confirm']) and isset($_POST['age']) and isset($_POST['region']) and isset($_POST['city']) and isset($_POST['country'])) {
        if($_POST['password'] == $_POST['password_confirm']) {
            $connect = new mysqli($host, $db_user, $db_password, $db_name);
            $connect->set_charset("utf8");
            $login = htmlentities($_POST['login']);
            $password = htmlentities($_POST['password']);
            $email = htmlentities($_POST['email']);
            $first = htmlentities($_POST['first']);
            $last = htmlentities($_POST['last']);
            $age = htmlentities($_POST['age']);
            $region = htmlentities($_POST['region']);
            $city = htmlentities($_POST['city']);
            $country = htmlentities($_POST['country']);
            $query = "INSERT INTO users VALUES (DEFAULT, '$login', '$email', '$password', '$first', '$last', '$age', '$city', '$region', '$country')";
            mysqli_query($connect, $query) or die(mysqli_error($connect));
            // INSERT INTO MyGuests (firstname, lastname, email)
            // VALUES ('John', 'Doe', 'john@example.com')
        } else {
            // error wrong password
        }
    }
}
?>

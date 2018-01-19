<!DOCTYPE html>
<?php require_once "cfg/config.php"; ?>
<html lang="en">
<head>
    <?php
        session_start();
        if (isset($_SESSION['username']) && $_SESSION['logged']) {
            header("Location: index.php");
        }
        if(isset($_GET['logowanie']) && $_GET['logowanie'] == "false") {
            $error = true;
        }
        if (isset($_GET['rejestracja']) && $_GET['rejestracja'] == "true") {
            $registrationCompleted = true;
        }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logo Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="http://placehold.it/300x60?text=Logo" width="150" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Login
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <?php
        if (isset($registrationCompleted) && $registrationCompleted) echo '<br /><p class="text-success">Rejestracja udana, zaloguj sie</p>';
        if (isset($error) && $error) echo '<br /><p class="text-danger">Logowanie nie udane, spróbuj ponownie</p>';
    ?>
    <form action="include/login.php" method="POST">
        <div class="container">
            <br />
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br />
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br />
            <button type="submit">Login</button>
        </div>
    </form>
</div>

<!-- /.container -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

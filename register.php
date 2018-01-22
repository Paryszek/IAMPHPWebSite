<!DOCTYPE html>
<?php 
    //require_once "cfg/config.php";
    require_once "include/register.php";
 ?>
<html lang="en">
<head>
    <?php
    // session_start();
    if(isset($_SESSION['username']) && $_SESSION['logged']) {
        header("Location: index.php");
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
        <a class="navbar-brand" href="index.php">
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
    <form class="form-horizontal" action='include/register.php' method="POST">
        <fieldset>
            <div id="legend" style="margin-top: 15px;">
                <legend class="">Register</legend>
            </div>
            <?php
                if($error) {
                    echo '<p class="error-block">Registration couldnt complete because of an error, please try again</p>';
                }
            ?>
            <div class="control-group">
                <!-- Username -->
                <label class="control-label"  for="login">Login</label>
                <div class="controls">
                    <input type="text" id="login" name="login" placeholder="" class="input-xlarge" required>
                    <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                </div>
            </div>

            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="email">E-mail</label>
                <div class="controls">
                    <input type="text" id="email" name="email" placeholder="" class="input-xlarge" required>
                    <p class="help-block">Please provide your E-mail</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Password-->
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required>
                    <p class="help-block">Password should be at least 4 characters</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Password -->
                <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                <div class="controls">
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge" required>
                    <p class="help-block">Please confirm password</p>
                </div>
            </div>

            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="first">Imie</label>
                <div class="controls">
                    <input type="text" id="first" name="first" placeholder="" class="input-xlarge" required>
                    <p class="help-block">Please provide your first name</p>
                </div>
            </div>

            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="last">Nazwisko</label>
                <div class="controls">
                    <input type="text" id="last" name="last" placeholder="" class="input-xlarge" required>
                    <p class="help-block">Please provide your last name</p>
                </div>
            </div>

            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="age">Wiek</label>
                <div class="controls">
                    <input type="text" id="age" name="age" placeholder="" class="input-xlarge" required>
                    <p class="help-block">Please provide your age</p>
                </div>
            </div>

            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="region">Region</label>
                <div class="controls">
                    <input type="text" id="region" name="region" placeholder="" class="input-xlarge" required>
                    <p class="help-block">Please provide your area</p>
                </div>
            </div>

            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="city">Miasto</label>
                <div class="controls">
                    <input type="text" id="city" name="city" placeholder="" class="input-xlarge" required>
                    <p class="help-block">Please provide your city</p>
                </div>
            </div>

            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="country">Kraj</label>
                <div class="controls">
                    <input type="text" id="country" name="country" placeholder="" class="input-xlarge" required>
                    <p class="help-block">Please provide your country</p>
                </div>
            </div>


            <div class="control-group" style="margin-bottom: 15px;">
                <!-- Button -->
                <div class="controls">
                    <button class="btn btn-success">Register</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>

<!-- /.container -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<!DOCTYPE html>
<?php require_once "cfg/config.php"; ?>
<html lang="en">
  <head>
  <?php
    session_start();
    if(isset($_SESSION['username']) && $_SESSION['logged']) {
        $logged = $_SESSION['logged'];
        $connect = new mysqli($host, $db_user, $db_password, $db_name);
        $connect->set_charset("utf8");
        $columns = $connect->query("SELECT * FROM users");
        $num_of_rows = mysqli_num_rows($columns);
        if ($connect->connect_errno != 0) {
            echo "Error: " . $connect->connect_errno . "Opis: " . $connect->connect_error;
        }
        for($i = 1; $i < $num_of_rows; $i++) {
            $result = $connect->query("SELECT * FROM users WHERE user_id='$i'");
            $data = $result->fetch_assoc();
            if($_SESSION['username'] == $data['Login']) {
              $username = $data["First"];
            }

        }
    } else {
        header("Location: login.php");
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
            <li class="nav-item">
              <a class="btn btn-success" href="post.php">Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><? echo $username ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="include/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <ul>
        <li>
          <?
            $getRegions = $connect->query("SELECT * FROM regions");
          ?>

        </li>
    </ul>
    </div>

    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

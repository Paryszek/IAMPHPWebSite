<!DOCTYPE html>
<?php require_once "cfg/config.php"; ?>
<html lang="en">
<head>
    <?php
    session_start();
    if(isset($_SESSION['username']) && $_SESSION['logged']) {
        $connect = new mysqli($host, $db_user, $db_password, $db_name);
        $connect->set_charset("utf8");
        $user = $_SESSION['username'];
        $result = $connect->query("SELECT * FROM users WHERE Login='$user'");
        $data = $result->fetch_assoc();
        if($_SESSION['username'] == $data['Login']) {
            $username = $data["First"]." ".$data["Last"];
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
    <style>
        a, a:hover {
            color: black;
            text-decoration: none; /* no underline */
        }
        a:hover {
            color:#727b84;
        }

    </style>
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
                <li class="nav-item">
                    <a class="btn btn-success" href="post.php">Post</a>
                </li>
                <li class="nav-item">
                    <?php echo '<a class="nav-link" href="profile.php?user_id='.$data['user_id'].'">'.$username.'</a>';?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="include/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container" style="margin-top:50px;">
<?php
    if(isset($_GET['user_id'])) {
        $i = $_GET['user_id'];
        $data = $connect->query("SELECT * FROM posts");
        $num_of_rows = mysqli_num_rows($data);
        $data_row = $connect->query("SELECT * FROM users WHERE user_id='$i'");
        $user = $data_row->fetch_assoc();
        echo '<h2>' . $user["First"] . ' ' . $user["Last"] . '</h2>
            <p class="text-justify">Age: ' . $user["Age"] . '</p>
            <p class="text-justify">Country: ' . $user["Country"] . '</p>
            <p class="text-justify">Region: ' . $user["Region"] . '</p>
            <p class="text-justify">City: ' . $user["City"] . '</p>';
    }
?>
</div>

<!-- /.container -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

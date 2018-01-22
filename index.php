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
        <h6>Filter posts:</h6>
        <form action="index.php" method="POST">
            <select class="form-control" name="filter_region" required>
                <option value="1">From my country</option>
                <option value="2">From my region</option>
                <option value="3">From my city</option>
                <option value="4">From everywhere</option>
            </select><br />
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
    </div>
    <hr />
    <div class="container">
          <?php
            $data_posts = $connect->query("SELECT * FROM posts");
            $num_of_rows = mysqli_num_rows($data_posts);
            if(isset($_POST['filter_region']) and $_POST['filter_region']) {
                switch ($_POST['filter_region']) {
                    case 1:
                        $region = "Country";
                        break;
                    case 2:
                        $region = "Region";
                        break;
                    case 3:
                        $region = "City";
                        break;
                    case 4:
                        break;
                }
            }

            for ($i = $num_of_rows; $i != 0; $i--) {
                if(isset($region) and $region) {
                    $post_row = $connect->query("SELECT * FROM posts WHERE post_id='$i' AND region_name='$data[$region]'");
                } else {
                    $post_row = $connect->query("SELECT * FROM posts WHERE post_id='$i'");
                }

                $post = $post_row->fetch_assoc();
                if(isset($post)) {
                    echo '<h2><a href="view.php?post_id=' . $i . '">' . $post["title"];
                    $post_date = new DateTime($post["date"]);
                    $post_date->format('Y\-m\-d\ h-i-s');
                    $diff = $post_date->diff(new DateTime());
                    $hours = $diff->h;
                    if ($hours < 2) {
                        echo ' <span class="badge badge-secondary badge-success">New</span>';
                    }
                    echo '
                        </a></h2>
                        <h6>' . $post['region_name'] . '</h6>
                        <p class="text-justify">
                            ' . $post["text"] . '
                        </p>
                        <p class="text-justify">' . $post["date"] . ' by <a href="profile.php?user_id=' . $post["user_id"] . '">' . $post["author"] . '</a></p>
                    ';
                }

            }
          ?>
    </div>

    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

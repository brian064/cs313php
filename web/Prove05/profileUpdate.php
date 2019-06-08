<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devic  e-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Progress Daily | Your Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="pd3.css" rel="stylesheet">
  </head>

  <body>

    <!-- PHP section -->
    <!-- <?php
      //SESSION Variables
      if ($_SESSION["usr"] == "")
      {
        $_SESSION["usr"] = $_POST["usr"];
      }
      $notValid = false;
      //getting Form Variables
      $firstn = $_POST["firstn"];
      $lastn = $_POST["lastn"];
      $age = $_POST["age"];
      $bio = $_POST["bio"];
      $user = $_SESSION["usr"];

      //SQL Select statements
      $updateSql1 = "UPDATE users SET firstn = $firstn WHERE usrname = '$user'";

      $updateSql2 = "UPDATE users SET lastn = $lastn WHERE usrname = '$user'";

      $updateSql3 = "UPDATE users SET age = $age WHERE usrname = '$user'";

      $updateSql4 = "UPDATE users SET bio = $bio WHERE usrname = '$user'";

      $sql = 'SELECT * FROM users WHERE usrname = \'' . $_SESSION["usr"] . '\'';

      $osql = 'SELECT (tprog+frprog+fnprog)/3 AS oprog FROM users WHERE usrname = \'' . $_SESSION["usr"] . '\'';
      //Connecting to Heroku Database
      try
      {
        $dbUrl = getenv('DATABASE_URL');

        $dbOpts = parse_url($dbUrl);

        $dbHost = $dbOpts["host"];
        $dbPort = $dbOpts["port"];
        $dbUser = $dbOpts["user"];
        $dbPassword = $dbOpts["pass"];
        $dbName = ltrim($dbOpts["path"],'/');

        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($firstn && $lastn && $age && $bio) {
          //insert new user in users table
          $db->exec($updateSql1);
          $db->exec($updateSql2);
          $db->exec($updateSql3);
          $db->exec($updateSql4);
        } else {
          $notValid = true;
        }
      }

      catch (PDOException $ex)
      {
        echo 'Error!: ' . $ex->getMessage();
        die();
      }
    ?> -->

    <div class="myNav">
      <div class="container">
        <a href="profile.php"><h4>Back to Profile</h4></a>
      </div>
    </div>

    <div class="cheader container">
      <h2>
        <?php
          if ($notValid)
          {
            echo "Update failed. One or more missing fields."
          } else {
            echo "Profile update successful."
          }
        ?>
      </h2>
    </div>

    <footer>
    </footer>

    <!-- jQuery library script below -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <!-- personal JS file below -->
    <script src="prove05.js"></script>
  </body>
</html>

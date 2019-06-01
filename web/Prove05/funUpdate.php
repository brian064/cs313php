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
    <link href="pd2.css" rel="stylesheet">
  </head>

  <body>

    <!-- PHP section -->
    <!-- <?php
      //SESSION Variables
      if ($_SESSION["usr"] == "")
      {
      $_SESSION["usr"] = $_POST["usr"];
      }

      //getting Form Variables
      $fun = $_POST["fun"];
      $user = $_SESSION["usr"];

      //SQL Select statements
      $updateSql = "UPDATE users SET tprog = $trans WHERE usrname = '" . $fun . "'";

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

        //insert new user in users table
        $db->exec($updateSql);
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
        Updated Fundamentals Skating Progress
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

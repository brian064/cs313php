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

    <title>Progress Daily | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="pd.css" rel="stylesheet">
  </head>

  <body>

    <!-- PHP section -->
    <!-- <?php
      //SESSION Variables
      $_SESSION["usr"] = "Brian_064";

      $sql = "SELECT * FROM users WHERE usrname = " . $_SESSION["usr"];
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
      }

      catch (PDOException $ex)
      {
        echo 'Error!: ' . $ex->getMessage();
        die();
      }
    ?> -->

    <div class="myNav">
      <div class="container">
        <a href="home.php"><h4>Progress Daily</h4></a>
      </div>
    </div>

    <div class="cheader container">
      <h2>Welcome back, <?php
        foreach ($db->query($sql) as $row)
        {
          echo $row['firstn'] . '!';
        }
      ?>
    </h2>
    </div>

    <div class="container overall">
      <h3>Your Overall Progression:</h3>
      <div class="prgrs">
        <?php
          foreach ($db->query('SELECT (tprog+frprog+fnprog)/3 AS oprog FROM users') as $row)
          {
            echo $row['oprog'] . '%';
          }
        ?>
      </div>
    </div>

    <div class="container cheader">
      <h2>Categories:</h2>
    </div>

  <a href="trans.php"><div class="container overall trans">
      <h3>Transition Progress:</h3>
      <div class="prgrs">
        <?php
          foreach ($db->query('SELECT * FROM users') as $row)
          {
            echo $row['tprog'] . '%';
          }
        ?>
      </div>
    </div></a>

    <a href="free.php"><div class="container overall free">
      <h3>Freestyle Progress:</h3>
      <div class="prgrs">
        <?php
          foreach ($db->query('SELECT * FROM users') as $row)
          {
            echo $row['frprog'] . '%';
          }
        ?>
      </div>
    </div></a>

    <a href="fun.php"><div class="container overall fun">
      <h3>Fundamentals Progress:</h3>
      <div class="prgrs">
        <?php
          foreach ($db->query('SELECT * FROM users') as $row)
          {
            echo $row['fnprog'] . '%';
          }
        ?>
      </div>
    </div></a>

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

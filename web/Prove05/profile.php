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

      //SQL Select statements
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
      }

      catch (PDOException $ex)
      {
        echo 'Error!: ' . $ex->getMessage();
        die();
      }
    ?> -->

    <div class="myNav">
      <div class="container">
        <a href="home.php"><h4>Back to Home</h4></a>
      </div>
    </div>

    <div class="cheader container">
      <h2>
        <?php
          foreach ($db->query($sql) as $row)
          {
            echo $row['firstn'] . " " . $row['lastn'];
          }
        ?>'s Profile
      </h2>

      <div class="homeButtons">
        <a href="deleted.php"><button>Delete Your Profile</button></a>
      </div>
    </div>

    <div class="container overall trans">
      <h2>Age: <?php
        foreach ($db->query($sql) as $row)
        {
          echo $row['age'];
        }
      ?></h2>

      <h2>Bio: <?php
        foreach ($db->query($sql) as $row)
        {
          echo $row['bio'];
        }
      ?></h2>
    </div>

    <div class="container updateForm form">
      <h2>Update Your Skill Progress</h2><br/><br/>
      <p>Enter a number between 0 - 100</p><br/>

      <form action="transUpdate.php" method="post">
        Transition Skating: <input type="number" max="100" name="trans"/><br/>
        <button type="submit">Update</button>
        <br/><br/>
      </form>

      <form action="freeUpdate.php" method="post">
        Freestyle Skating: <input type="number" max="100" name="free"/><br/>
        <button type="submit">Update</button>
        <br/><br/>
      </form>

      <form action="funUpdate.php" method="post">
        Fundamentals Skating: <input type="number" max="100" name="fun"/><br/>
        <button type="submit">Update</button>
        <br/><br/>
      </form>
    </div>

    <div class="container updateForm form" style="margin-top: 30px;">
      <h2>Update Your Profile Info</h2><br/><br/>
      <p>Fill out entire form.</p><br/>

      <form action="profileUpdate.php" method="post">
        First Name: <input type="text" name="firstn"><br/><br/>

        Last Name: <input type="text" name="lastn"><br/><br/>

        Age: <input type="number" name="age"><br/><br/>

        Bio: <textarea name="bio"></textarea><br/><br/>

        <button type="submit">Update</button>
      </form>
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

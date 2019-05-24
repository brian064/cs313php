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

    <title>Progress Daily | Freestyle Progress</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="pd.css" rel="stylesheet">
  </head>

  <body>

    <!-- PHP section -->
    <!-- <?php
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

    <div class="container overall free">
      <h3>Freestyle Progress:</h3>
      <div class="prgrs">
        <?php
          foreach ($db->query('SELECT * FROM overall') as $row)
          {
            echo $row['freeprog'] . '%';
          }
        ?>
      </div>
    </div>

    <div class="container cheader">
      <h2>Freestyle Skating:</h2>
      <p><?php
        foreach ($db->query('SELECT * FROM freestyle') as $row)
        {
          echo $row['info'];
        }
      ?></p>
    </div>

    <div class="container overall free">
      <h3>Freestyle Trick 1:</h3>
      <div class="prgrs">
        91%
      </div>
    </div>

    <div class="container overall free">
      <h3>Freestyle Trick 2:</h3>
      <div class="prgrs">
        4%
      </div>
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

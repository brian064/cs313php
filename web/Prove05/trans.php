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

    <title>Progress Daily | Transition Progress</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="pd.css" rel="stylesheet">
  </head>

  <body>

    <!-- PHP section -->
    <!-- <?php
      //SESSION Variables
      $_SESSION["usr"] = $_POST["usr"];

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

    <div class="container overall trans">
      <h3>Transition Progress:</h3>
      <div class="prgrs">
        <?php
          foreach ($db->query($sql) as $row)
          {
            if ($row['tprog'] == "")
            {
              echo "<p>Go to your Profile to update your progress!</p>";
            } else {
              echo $row['tprog'] . '%';
            }
          }
        ?>
      </div>
    </div>

    <div class="container cheader">
      <h2>Transition Skating:</h2>
      <p><?php
        foreach ($db->query('SELECT * FROM transition') as $row)
        {
          echo $row['info'];
        }
      ?></p>
    </div>

    <div class="container overall trans">
      <h3>Transition Trick 1:</h3>
      <div class="prgrs">
        80%
      </div>
    </div>

    <div class="container overall trans">
      <h3>Transition Trick 2:</h3>
      <div class="prgrs">
        50%
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

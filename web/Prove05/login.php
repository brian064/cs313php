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

    <title>Progress Daily | Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="pd3.css" rel="stylesheet">
  </head>

  <body class="loginBody">

    <!-- PHP section -->
    <?php
      //SESSION Variables
      $_SESSION["usr"] = "";
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

      // $result = "result";
      // if (isset($_POST["usr"]))
      // {
      //    $username = $_POST["usr"];
      //    $sql = 'SELECT * FROM users WHERE usrname = \'' . $username . '\'';
      //
      //    foreach ($db->query($sql) as $row)
      //    {
      //      $result = $row["usrname"];
      //    }
      //
      //    if ($result)
      //    {
      //      $_SESSION["usr"] = $username;
      //      $result = "";
      //      header("Location: home.php");
      //      die();
      //    } else {
      //      $badLogin = true;
      //    }
      // } else {
      //   $_SESSION["usr"] = "";
      // }
    ?>

    <div class="myNav">
      <div class="container">
        <a href="home.php"><h4>Progress Daily</h4></a>
      </div>
    </div>

    <div class="container login">
      <div class="row">
        <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6 signUp form">
          <h3>New Here?</h3><br/>
          <form action="created.php" method="post">
            Username: <input type="text" name="usr"><br/><br/>

            First Name: <input type="text" name="firstn"><br/><br/>

            Last Name: <input type="text" name="lastn"><br/><br/>

            Age: <input type="number" name="age"><br/><br/>

            Bio: <textarea name="bio"></textarea><br/><br/>

            <button type="submit">Sign Up</button>

            <div class="message">
              <?php
                if ($badLogin) {
                  echo "ERROR: Username already exists";
                }
              ?>
            </div>
          </form>
        </div>

        <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6 signIn form">
          <h3>I've seen you before..</h3><br/>
          <form action="home.php" method="post">
            Username: <input type="text" name="usr"><br/><br/>
            <button type="submit">Log In</button>
          </form>
        </div>
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

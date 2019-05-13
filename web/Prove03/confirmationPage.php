<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devic  e-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Brian's Store - Confirmation</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="prove03.css" rel="stylesheet">
  </head>

  <body>

    <!-- PHP Section -->
    <?php
      //Address Variables
      $address = $_POST["address"];
      $apt = $_POST["apt"];
      $city = $_POST["city"];
      $zip = $_POST["zip"];

      //Session Setting
      $_SESSION["address"] = $address;
      $_SESSION["apt"] = $apt;
      $_SESSION["city"] = $city;
      $_SESSION["zip"] = $zip;
    ?>

    <div class="myNav">
      <div class="container">
        <h4>Brian's Store - Confirmation</h4>
      </div>
    </div>

    <div class="container itemBox address">
      <ul>
        <li class="header">Your Items</li>
        <li><?php echo $_SESSION["shirt"]; ?></li>
        <li><?php echo $_SESSION["cap"]; ?></li>
        <li><?php echo $_SESSION["jacket"]; ?></li>
        <li><?php echo $_SESSION["pants"]; ?></li>
        <br/><br/>

        <li class="header">Your Shipping Address</li>
        Address: <?php echo $_SESSION["address"]; ?><br/>

        Apartment No: <?php echo $_SESSION["apt"]; ?><br/>

        City: <?php echo $_SESSION["city"]; ?><br/>

        Zip Code: <?php echo $_SESSION["zip"]; ?><br/>
      </ul>
    </div>

    <footer>
    </footer>

    <!-- jQuery library script below -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <!-- personal JS file below -->
    <script src="prove03.js"></script>
  </body>
</html>

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

    <title>Brian's Store - Check Out</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="prove03.css" rel="stylesheet">
  </head>

  <body>

    <!-- PHP Section -->
    <?php ?>

    <div class="myNav">
      <div class="container">
        <h4>Brian's Store - Check Out</h4>
      </div>
    </div>

    <div class="container itemBox address">
      <ul>
        <li>Your Shipping Address</li><br/>
        <form action="confirmationPage.php" method="post">
          <li>Address: <input type="text" name="address"></li>
          <li>Apartment No: <input type="text" name="apt"></li>
          <li>City: <input type="text" name="city"></li>
          <li>Zip Code: <input type="text" name="zip"></li>
          <br/>
          <button type="submit" class="btn-default">Confirm</button>
        </form>
      </ul>
      <a href="viewCart.php"><button class="btn-default">Back To Cart</button></a>
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

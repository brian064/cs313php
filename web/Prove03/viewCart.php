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

    <title>Brian's Store - Cart</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="prove03.css" rel="stylesheet">
  </head>

  <body>

    <!-- PHP Section -->
    <?php
      //variables
      $shirt = $_POST["bshirt"];
      $cap = $_POST["bcap"];
      $jacket = $_POST["bjacket"];
      $pants = $_POST["bpants"];

      if (!empty($shirt))
      {
         $_SESSION["shirt"] = "";
      }

      if (!empty($cap))
      {
         $_SESSION["cap"] = "";
      }

      if (!empty($jacket))
      {
         $_SESSION["jacket"] = "";
      }

      if (!empty($pants))
      {
         $_SESSION["pants"] = "";
      }
     ?>

    <div class="myNav">
      <div class="container">
        <h4>Brian's Store - Your Cart</h4>
      </div>
    </div>

    <div class="container itemBox">
      <ul>
        <form action="viewCart.php" method="post">
          <li><?php echo "<input type="checkbox" name="bshirt" value="Brian Shirt">" . $_SESSION["shirt"] . "</input>"; ?></li>
          <li><?php echo "<input type="checkbox" name="bcap" value="Brian Cap">" . $_SESSION["cap"] . "</input>"; ?></li>
          <li><?php echo "<input type="checkbox" name="bjacket" value="Brian Jacket">" . $_SESSION["jacket"] . "</input>"; ?></li>
          <li><?php echo "<input type="checkbox" name="bpants" value="Brian Pants">" . $_SESSION["pants"] . "</input>"; ?></li>
          <br/>
          <button type="submit" class="btn-default">Delete Items</button>
        </form>
      </ul>
      <br/>
      <a href="browsePage.php"><button class="btn-default">Back To Browse</button></a>
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

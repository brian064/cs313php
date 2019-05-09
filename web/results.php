<!DOCTYPE html>
<html>
	<head>
		<title>Results</title>
	</head>
	<body>
<?php

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

  // User Details variables (feel free to adjust variable names where appropriate)
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $major = test_input($_POST["major"]);
  $comments = test_input($_POST["comments"]);

  // Displaying User Details
  echo "Your name: " . $name . "<br/>";
  echo "Your email: " . $email . "<br/>";
  echo "Your major: " . $major . "<br/>";
  echo "Your comments: " . $comments . "<br/>";

  //Continents Variables
  $northAmerica = test_input($_POST["na"]);
  $southAmerica = test_input($_POST["sa"]);
  $europe = test_input($_POST["eu"]);
  $asia = test_input($_POST["as"]);
  $australia = test_input($_POST["au"]);
  $africa = test_input($_POST["af"]);
  $antartica = test_input($_POST["an"]);

  //Displaying Continents Visited

  //if no continents are checked
  if (empty($northAmerica) && empty($southAmerica) && empty($europe) && empty($asia) && empty($australia) && empty($africa) && empty($antartica)) {
    echo "<br/><br/>User has not visited any continents :(<br/>";
  } else {
    echo "<br/><br/>Continents Visited: <br/>"; //when at least one is checked
  }

  // displating each checked continent
  if (!empty($northAmerica)) {
    echo "North America<br/>";
  }
  if (!empty($southAmerica)) {
    echo "South America<br/>";
  }
  if (!empty($europe)) {
    echo "Europe<br/>";
  }
  if (!empty($asia)) {
    echo "Asia<br/>";
  }
  if (!empty($australia)) {
    echo "Australia<br/>";
  }
  if (!empty($africa)) {
    echo "Africa<br/>";
  }
  if (!empty($antartica)) {
    echo "Antarctica<br/>";
  }
?>
	</body>
</html>

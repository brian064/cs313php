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
  echo "Your name: " . $name . "\n";
  echo "Your email: " . $email . "\n";
  echo "Your major: " . $major . "\n";
  echo "Your comments: " . $comments . "\n";

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
    echo "\n\nUser has not visited any continents :(\n";
  } else {
    echo "\n\nContinents Visited: \n"; //when at least one is checked
  }

  // displating each checked continent
  if (!empty($northAmerica)) {
    echo "North America\n";
  }
  if (!empty($southAmerica)) {
    echo "South America\n";
  }
  if (!empty($europe)) {
    echo "Europe\n";
  }
  if (!empty($asia)) {
    echo "Asia\n";
  }
  if (!empty($australia)) {
    echo "Australia\n";
  }
  if (!empty($africa)) {
    echo "Africa\n";
  }
  if (!empty($antartica)) {
    echo "Antarctica\n";
  }
?>
	</body>
</html>

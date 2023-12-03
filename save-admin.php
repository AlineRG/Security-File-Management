<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registering new zoo animals</title>
  <meta name="description" content="Exclusive use for zoo staff only">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  
  
</head>

<body>
  <header class="header">
    <a class="navbar-brand" href="index.php">
      <img src="./img/logo.jpg" alt="header logo"></a>
      <h1>TORONTO ZOO</h1>
      <h2>FOR EXCLUSIVE USE OF THE ZOO STAFF</h2>

          <nav class="navbar">
    <a href="index.php">Home</a>
    <a href="view.php">View</a>
</nav>

  </header>

<?php

	// connection
	require 'database.php';


	// variables

	$animal = $_POST['animal'];
	$specie = $_POST['specie'];
	$age = $_POST['age'];
	$arriveDate = $_POST['arriveDate'];
	$personName = $_POST['personName'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];

	// validate inputs
	$ok = true;

	if (empty($animal)) {
		echo '<p>Animal name required</p>';
		$ok = false;
	}
	if (empty($specie)) {
		echo '<p>specie required</p>';
		$ok = false;
	}
	if (empty($age)) {
		echo '<p>age required</p>';
		$ok = false;
	}
	if (empty($arriveDate)) {
		echo '<p>arrive date required</p>';
		$ok = false;
	}
	if (empty($personName)) {
		echo '<p>Your name required</p>';
		$ok = false;
	}
	if ((empty($password)) || ($password != $confirm)) {
		echo '<p>Invalid passwords</p>';
		$ok = false;
		}


	// decide if we are saving or not
	if ($ok){
		$password = hash('sha512', $password);

		// set up the sql
		$sql = "INSERT INTO zooanimals (animal, specie, age, arriveDate, personName, password) 
		VALUES ('$animal', '$specie', '$age', '$arriveDate', '$personName', '$password')";
		
		//$conn->exec($sql);
		try {
			$conn->exec($sql);


		echo '<section class="success-row">';
		echo '<div>';
		echo '<h3>Admin Saved</h3>';
		echo '</div>';
		echo '</section>';

	} catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
		
	}
	// Redirect to signin.php outside the conditional block
	header("Location: signin.php");
	?>

<footer>
      <img src="img/logo.jpg" alt="headerLogo">
            <p class="copyright">© Housing Toronto 2023</p>
            </footer>  
      </body>
</html>

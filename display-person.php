<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Housing Toronto</title>
  <meta name="description" content="Exclusive use for zoo staff only">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  
  
</head>

<body>
  <header class="header">
    <a class="navbar-brand" href="index.php">
      <img src="./img/logo.jpg" alt="header logo"></a>
      <h1>WELCOME</h1>
      <h2>HOST REGISTRATION</h2>

          <nav class="navbar">
    <a href="index.php">Home</a>
    <a href="view.php">View</a>
</nav>

  </header>

<?php
	//check for authentication before we show any data
	session_start();
	if (!isset($_SESSION['IDanimal'])) {
		header('location:signin.php');
		exit();
	}
	else {
		//connect to db
		require 'database.php';
		//set up query
		$sql = "SELECT * FROM zooanimals";
		//run the query and store the results
		$result = $conn->query($sql);
		//start our table
		echo '<section class="person-row">';
		echo '<table class="table table-striped">
				<tr>
				<th>#</th>
				<th>Animal</th>
				<th>Specie</th>
				<th>Age</th>
				<th>Arrival Date</th>
				<th>Person Name</th>
				<th>password</th>
			</tr>';

		foreach ($result as $row) {
			echo '<tr>
							<td>' . $row["IDanimal"] . '</td>
							<td>' . $row['animal']  . '</td>
							<td>' . $row['specie']  . '</td>
							<td>' . $row['age']  . '</td>
							<td>' . $row['arriveDate']  . '</td>
							<td>' . $row['personName']  . '</td>
							<td>' . $row['password']  . '</td>

					</tr>';
			}
		//close the table
		echo '</table>';
		echo '<a class="btn btn-warning" href="logout.php">Logout</a>';
		echo '</section>';

		//disconnect
		$conn = null;

	}

?>

<footer>
      <img src="img/logo.jpg" alt="headerLogo">
            <p class="copyright">© Housing Toronto 2023</p>
            </footer>  
      </body>
</html>


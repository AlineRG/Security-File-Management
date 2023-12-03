<?php
//store the user inputs in variables and hash the password
$personName = $_POST['personName'];
$password = hash('sha512', $_POST['password']);

//connect to db
require 'database.php';

//set up and run the query
$sql = "SELECT IDanimal FROM zooanimals 
WHERE personName = '$personName' AND password = '$password'";
$result = $conn->query($sql);
//store the number of results in a variable
$count = $result -> rowCount();
//check if any matches found
if ($count == 1){
	//echo 'Logged in Successfully.';
	$row = $result->fetch();
	//access the existing session created automatically by the server
	session_start();
	//take the user's id from the database and store it in a session variable
	$_SESSION['IDanimal'] = $row['IDanimal'];
	//redirect the user
	Header('display-person.php');
}
else {
	echo 'Invalid Login';
}
$conn = null;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registering new zoo animals</title>
</head>

<body>

<?php
  // Create a class to hold the database connection information.
  class Database{
    // A private keyword, as the name suggests is the one that can only be accessed from within the class in which it is defined.
    private $connection;
    function __construct(){
      // In PHP, $this keyword references the current object of the class. 
      $this->connect_db();
    }
    // The public access modifier allows you to access properties and methods from both inside and outside of the class.
    public function connect_db(){
      $this->connection = mysqli_connect("localhost", "root", "", "animal_registration");
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error());
      }
    }
    public function create($animal,$specie,$age,$arriveDate){
      $sql = "INSERT INTO zooanimals (animal, specie, age, arriveDate) VALUES ('$animal', '$specie', '$age', '$arriveDate')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    public function read(){
		    $sql = "SELECT * FROM zooanimals";
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
    
  }
  $database = new Database();
?>

</body>
</html>




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
    <a href="signin.php">Sign in</a>
    <a href="uploadImage.php">Adding image</a>
</nav>

  </header>

  <main class="container">
    <section class="form-register">
		     <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
           <h4>Registering new zoo animals</h4>
    <input class="controls" type="text" name="animal" id="animal" placeholder="Enter type of animal">
    <input class="controls" type="text" name="specie" id="specie" placeholder="Enter specie of animal">
    <input class="controls" type="text" name="age" id="age" placeholder="Enter age of animal">
    <label for="arriveDate">Enter date of arrival:</label> <input class="controls" type="date" name="arriveDate" id="arriveDate">
    <input class="controls" type="text" name="personName" id="personName" placeholder="Enter your name">
    <input class="controls" type="password" name="password" id="password" placeholder="Enter your password">
  
    <p>Thank you for your contribution to our zoo</p>
    <input type="submit" class="custom-button" value="Submit">


    </form>
    
      <div class="form-group submit-message">
          <?php
          require_once('database.php');

          if (!empty($_POST)) {
              $animal = $_POST['animal'];
              $specie = $_POST['specie'];
              $age = $_POST['age'];
              $arriveDate = $_POST['arriveDate'];
              $personName = $_POST['personName'];
              $password = $_POST['password'];

              $res = $database->create($animal, $specie, $age, $arriveDate, $personName, $password);

              if ($res) {
                  echo "<p>Successfully registered new zoo animal</p>";
              } else {
                  echo "<p>Failed to register new zoo animal</p>";
              }
          }
          ?>

<h3>Already have an account, then sign in below!</h3>
    
    <form method="post" action="validate.php">
    <input class="controls" type="text" name="personName" id="personName" placeholder="Enter your name">
    <input class="controls" type="password" name="password" id="password" placeholder="Enter your password">
    <input type="submit" class="custom-button" value="Submit">
</form>


      </div>
      </section>

    

</main>

      <br>
      <footer>
      <img src="img/logo.jpg" alt="headerLogo">
            <p class="copyright">© Toronto Zoo 2023</p>
        </footer>  
</body>
</html>


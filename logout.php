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

  //access existing session
  session_start();
  //remove session variables
  session_unset();
  //kill the session
  session_destroy();
  //redirect to login
 
?>

<footer>
      <img src="img/logo.jpg" alt="headerLogo">
            <p class="copyright">© Toronto Zoo 2023</p>
        </footer>  
</body>
</html>
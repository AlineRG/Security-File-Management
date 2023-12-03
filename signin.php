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

  <section class="signin-masthead">
    <div>
      <h3>Sign In</h3>
    </div>
  </section>
  <main>
   
      <div class="col align-self-center">
        <h3>It Looks Like You Are Not Signed In!</h3>
        <p>Sign in below</p>
        <form method="post" action="validate.php">
          <input class="controls" type="text" name="personName" id="personName" placeholder="Enter your name">
          <input class="controls" type="password" name="password" id="password" placeholder="Enter your password">
          <input type="submit" class="custom-button" value="Submit">
        </form>
      </div>
    </section>
  </main>
  <footer>
      <img src="img/logo.jpg" alt="headerLogo">
            <p class="copyright">© Toronto Zoo 2023</p>
        </footer>  
        </body>
</html>
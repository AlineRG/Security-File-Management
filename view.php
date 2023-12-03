<?php
	require_once('database.php');
	//$res = $database->read();
	//$res = $conn->query("SELECT * FROM zooanimals");

	try {
		$res = $conn->query("SELECT * FROM zooanimals"); 
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
		die(); 
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Registering new zoo animals</title>
</head>

<body>

  <header class="header">
      <a href="#" class="logo">Logo</a>

          <nav class="navbar">
		  <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="view.php">View</a></li>
          </nav>
  </header>

  <div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th>#</th>
				<th>Animal</th>
				<th>Specie</th>
				<th>Age</th>
				<th>Arrival Date</th>
				<th>Person Name</th>
				<th>password</th>
			</tr>
			<?php

				//while($r = mysqli_fetch_assoc($res)){
				while ($r = $res->fetch(PDO::FETCH_ASSOC)) {
			?>
					<tr>
						<td><?php echo $r['IDanimal']; ?></td>
						<td><?php echo $r['animal'] ?></td>
						<td><?php echo $r['specie'] ?></td>
						<td><?php echo $r['age'] ?></td>
						<td><?php echo $r['arriveDate'] ?></td>
						<td><?php echo $r['personName'] ?></td>
						<td><?php echo $r['password'] ?></td>
					</tr>
			<?php
				}
			?>
		</table>
	</div>
</div>

<?php
  $pageTitle = 'View Images';
  $pageDesc = 'On this page we will be able to view the images that we have uploaded';
  require "database.php";
  $stmt = $conn->prepare('select * from image');
  $stmt->execute();
  $imagelist = $stmt->fetchAll();
?>
  <section class="view-masthead">
    <div>
      <h1>View Images</h1>
    </div>
  </section>
  <section class="image-row row">
<?php
  foreach($imagelist as $image) {
 ?>
    <div class="col-sm-12 col-md-3 col-lg-3"> 
      <img src="<?=$image['image']?>" title="<?=$image['name'] ?>" class="img-fluid">
      <p><?php echo $image["name"]; ?></p>
    </div>
<?php
}
?>
  </section>
</body>
</html>

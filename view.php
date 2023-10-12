<?php
	require_once('database.php');
	$res = $database->read();
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
			</tr>
			<?php
				while($r = mysqli_fetch_assoc($res)){
			?>
					<tr>
						<td><?php echo $r['id']; ?></td>
						<td><?php echo $r['animal'] ?></td>
						<td><?php echo $r['specie'] ?></td>
						<td><?php echo $r['age'] ?></td>
						<td><?php echo $r['arrival_date'] ?></td>
					</tr>
			<?php
				}
			?>
		</table>
	</div>
</div>
</body>
</html>

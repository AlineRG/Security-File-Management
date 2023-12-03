
  <section class="masthead">
    <div>
      <h1>Uploading Images</h1>
    </div>
  </section>
  <section class="form-row">
    <form method='post' action='' enctype='multipart/form-data'>
      <p><input type='file' name='files[]' multiple /></p>
      <p><input class="btn btn-dark" type='submit' value='Submit' name='submit'/></p>
    </form>

    <?php 

$uploadSuccess = false; 
$valid_file=true;

    if($uploadSuccess){
      echo "<p>File upload successfully</p>"; 
    }
    if(!$valid_file){
      echo "<p>Upload image files only</p>";
    }?>
    <a href="view.php" class="btn btn-primary">View Uploads</a>
  </section>

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



<?php
  $pageTitle = 'Homepage';
  $pageDesc = 'upload animal images';
  require "database.php";
  $uploadSuccess = false; 
  $valid_file=true;

  if(!empty($_POST['submit'])) {
    // Count total files
    $countfiles = count($_FILES['files']['name']);
    // Prepared statement
    $query = "INSERT INTO image (name,image) VALUES(?,?)";
    $statement = $conn->prepare($query);
    // Loop all files
    for($i = 0; $i < $countfiles; $i++) {
      // File name
      $filename = $_FILES['files']['name'][$i];
      // Location
      $target_file = './uploads/'.$filename;
      // file extension
      $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
      $file_extension = strtolower($file_extension);
      // Valid image extension
      $valid_extension = array("png","jpeg","jpg","pdf");
      if(in_array($file_extension, $valid_extension)) {
        // Upload file
        if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_file)){
          // Execute query
          $statement->execute(
          array($filename,$target_file));
          $uploadSuccess = true; 
          
        }  
      }
      else{
        $valid_file=false;
      }
    }
  }

?>

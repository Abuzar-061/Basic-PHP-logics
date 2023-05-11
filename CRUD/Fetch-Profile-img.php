<?php
// connect to database
$conn = mysqli_connect("localhost", "root", "", "crud");

// check if form has been submitted
if(isset($_POST["submit"])) {
	// check if image file is selected
    if($_FILES["image"]["name"]){
	// get file name and temporary file path
	$image_name = $_FILES["image"]["name"];
	$image_tmp = $_FILES["image"]["tmp_name"];

	// move file to server directory
	move_uploaded_file($image_tmp, "uploads/$image_name");

	// insert image path into database
	$sql = "INSERT INTO image (image_path) VALUES ('uploads/$image_name')";
	mysqli_query($conn, $sql);
}
}
else{
	 // handle case when no image file is selected
        echo "Please select an image file.";
}

// select image data from database
$sqli = "SELECT * FROM image";
$result = mysqli_query($conn, $sqli);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		.img{
			width: 200px;
			height: 170px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Image Gallery</h1>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="image">Upload Image</label>
				<input type="file" class="form-control-file" id="image" name="image">
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Upload</button>
		</form>
		<hr>
		<div class="row">
			<?php while($row = mysqli_fetch_assoc($result)): ?>
               
			<div class="col-md-3">
				<?php echo"<img class='img' src='$row[image_path]'>"; ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

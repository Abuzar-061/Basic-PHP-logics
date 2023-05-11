<?php
// connect to database
$conn = mysqli_connect("localhost", "root", "", "crud");

// check if form has been submitted
if(isset($_POST["submit"])) {
	// get file name and temporary file path
	$image_name = $_FILES["image"]["name"];
	$image_tmp = $_FILES["image"]["tmp_name"];

	// move file to server directory
	move_uploaded_file($image_tmp, "uploads/" . $image_name);

	// insert image path into database
	$sql = "INSERT INTO image (image_path) VALUES ('uploads/$image_name')";
	mysqli_query($conn, $sql);
	
	// redirect to success page
	echo "<script>alert('Successful')</script>";
}
?>

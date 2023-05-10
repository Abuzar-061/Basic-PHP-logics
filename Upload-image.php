<!DOCTYPE html>
<html>
<head>
	<title>Upload Image Form</title>
	<style>
		form {
			margin: 50px auto;
			width: 50%;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 5px;
			background-color: #f5f5f5;
		}
		input[type=file] {
			margin-bottom: 10px;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<form method="POST" action="upload.php" enctype="multipart/form-data">
		<h2>Upload Image</h2>
		<input type="file" name="image" required>
		<input type="submit" name="submit" value="Upload">
	</form>
    <div class="fetch-image">
        <?php
// connect to database
$conn = mysqli_connect("localhost", "root", "", "crud");

// select image data from database
$sql = "SELECT * FROM image WHERE id = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// display image on webpage
echo '<img src="' . $row['image_path'] . '">';

// close database connection
mysqli_close($conn);
?>

    </div>
</body>
</html>

<?php
// connect to database
$conn = mysqli_connect("localhost", "root", "", "crud");

// check if form has been submitted
if(isset($_POST["submit"])) {
    // check if image file is selected
    if($_FILES["image"]["name"]) {
        // get file name and temporary file path
        $image_name = $_FILES["image"]["name"];
        $image_tmp = $_FILES["image"]["tmp_name"];

        // move file to server directory
        move_uploaded_file($image_tmp, "uploads/" . $image_name);

        // insert image path into database
        $sql = "INSERT INTO image (image_path) VALUES ('uploads/$image_name')";
        mysqli_query($conn, $sql);
    }
}

// delete image if delete button is clicked
if(isset($_GET["delete"])) {
    $id = $_GET["delete"];

    // select image path from database
    $sql = "SELECT image_path FROM image WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // delete image file from server
    $image_path = $row["image_path"];
    unlink($image_path);

    // delete image record from database
    $sql = "DELETE FROM image WHERE id = $id";
    mysqli_query($conn, $sql);

    // redirect to current page
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// select image data from database
$sql = "SELECT * FROM image";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .img {
            width: 100%;
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
                <div class="card">
                    <img class="card-img-top img" src="<?php echo $row['image_path']; ?>" alt="Image">
                    <div class="card-body">
                        <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </div>
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

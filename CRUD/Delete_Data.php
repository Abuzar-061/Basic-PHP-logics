<?php
// Connection to the Database
$connection = new mysqli('localhost', 'root', '', 'crud');
if (!$connection) {
    echo "<script>alert('Connection Failed')</script>";
}


// Retrieve customer data based on ID
$id = $_GET['id'];
$query = "DELETE FROM customer WHERE id = '$id'";
$query_data = mysqli_query($connection, $query);
   

    if ($query_data) {
        echo "<script>alert('Data Deleted')</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
<?php 

echo " <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js'></script>";

echo "<style> *{ background-color: #4db5ff;}
table{
    background-color: #2c2c6c;
}
.table td, .table th {
    height: 50px; /* Adjust the height value as needed */
    vertical-align: middle; /* Align the content vertically */
  }
.btn{
    font-size: 15px;
    color: #fff;
    text-decoration: none;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
}

.center{
    display:flex;
    justify-content: center;
    align-item: center;
}

.btn-primary{
    background-color: blue;
}
.btn-danger{
background-color: red;
}
</style>";
error_reporting(0);

$server = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$connection = mysqli_connect($server,$username,$password,$dbname);
if(!$connection){
    echo "Failed";
}
echo "<br>";


$query = "SELECT * FROM customer";

$query_data = mysqli_query($connection,$query);

$total = mysqli_num_rows($query_data);

echo "<br>";
if ($total > 0) {
    echo "<table class='table table-bordered' style='width: 85%;'>";
    echo "<tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th colspan='2'>Operation</th>
    </tr>";

    while ($result = mysqli_fetch_assoc($query_data)) {
        echo "<tr>
            <td>".$result['id']."</td>
            <td>".$result['firstName']."</td>
            <td>".$result['lastName']."</td>
            <td>".$result['email']."</td>
            <td>".$result['password']."</td>
            <td><a class='btn center btn-primary' href='Update_Data.php?id=".$result['id']."'>Update</a></td>
            <td><a class='btn center btn-danger' href='Delete_Data.php?id=".$result['id']."'>Delete</a></td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}
 

?>
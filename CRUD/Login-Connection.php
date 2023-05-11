<?php 

$email = $_POST['email'];
$password = $_POST['password'];

// Database Connection

$connection = new mysqli("localhost","root","123","crud");

if($connection->connect_error){
    die("Failed to connect : ".$connection->connect_error);
}
else{
    $data = $connection->prepare("SELECT * from customer where email = ?");
    $data->bind_param("s",$email);
    $data->execute();
    $data_result = $data->get_result();
    if($data_result->num_rows >0){
        $stmt = $data_result->fetch_assoc();
        if($stmt['password']=== $password){
            echo "Login successfully"; 
        }
        else{
            echo "Invalid username & password";
        }

    }else{
        echo "Invalid username & password. Try again";
    }
}

?>
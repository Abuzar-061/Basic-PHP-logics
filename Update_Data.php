<?php
// Connection to the Database
$connection = new mysqli('localhost', 'root', '', 'crud');
if (!$connection) {
    echo "<script>alert('Connection Failed')</script>";
}

// Retrieve customer data based on ID
$id = $_GET['id'];
$query = "SELECT * FROM customer WHERE id = '$id'";
$query_data = mysqli_query($connection, $query);
$result = mysqli_fetch_assoc($query_data);

// Handle form submission
if (isset($_POST['update'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE customer SET firstName = '$fname', lastName = '$lname', email = '$email', password = '$password' WHERE id = '$id'";
    $data = mysqli_query($connection, $query);

    if ($data) {
        echo "<script>alert('Updated Data')</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        /* Styles for the form */
         *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
            background-color: #0c1022;
        }
        .login{
            min-width: 400px;
            height: 70vh;
            display: flex;
            background-color: transparent;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: column;
            border: 2px solid #00ccff;
            border-bottom-right-radius: 100px;
            border-top-left-radius: 100px;
        }
        .heading{
            color: #00ccff;
        }
        .heading span{
            color: red;
        }
        input[type="submit"]{
            width: 50%;
            height: 30px;
            border: 1px solid #00ccff;
            color: #00ccff;
            background-color: transparent;
            border-radius: 20px;
            cursor: pointer;
        }
        input[type="username"],input[type="text"],input[type="password"],input[type="email"],:checked{
            width: 80%;
            height: 30px;
            padding: 0 20px;
            background-color: transparent;
            border: 0;
            border-bottom: 1px solid #00ccff;
            outline: none;
            color: #00ccff;
        }
        .fa-eye{
            cursor: pointer;
            color: #00ccff;
        }
        .fa-eye:hover{  
            text-shadow: 0 0 30px #00ccff , 0 0 60px #00ccff, 0 0 80px #00ccff;
        }
        .flex{
            width: 80%;
            display: flex;
        }
    </style>
</head>
<body>
    <div class="container">
    <!-- Display the form with pre-filled data -->
    <form action="" method="POST" class="login">
        <h1 class="heading">Update <span>Form</span></h1>
        <input type="text" name="firstname" value="<?php echo $result['firstName'] ?>">
        <input type="text" name="lastname" value="<?php echo $result['lastName'] ?>">
        <input type="email" name="email" value="<?php echo $result['email'] ?>">
        <div class="flex">
            <input type="password" id="password" value="<?php echo $result['password'] ?>" name="password" placeholder="Password" required> 
            <a class="password-visibility"><i id="eye" class="fas fa-eye"></i></a>
            </div>
        <input type="submit" name="update" value="Update Data">
    </form>
    </div>
    <script>
        var password =document.getElementById('password');
        var password_visibility =document.getElementById('eye');
         password_visibility.addEventListener("click",()=>{
            if(password.type == "password"){
                password.type = "text";
            }else{
                password.type = "password";
            }
        })
    </script>
</body>
</html>

  <?php 

        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $password= $_POST['password'];


        //Connection to the Database .. 
        $connection = new mysqli('localhost','root','123','crud'); 
        if($connection -> connect_error){
            die("Connection Failed: ".$connection->connect_error);
        }
        else{
            // $variable->prepare() is used to to create a prepared statement for executing a sql query  
            $data = $connection->prepare("INSERT INTO customer(firstName, lastName, email, password) values (?, ?, ?, ?)");
            // 
            $data ->bind_param("ssss",$firstName,$lastName,$email,$password);
            // Execute() prepare statement
            $data->execute();
            echo "<script>alert('Sign-Up Successfully')</script>";
            // close the statements
            $data->close();
            $connection->close();
        }

        

        ?>


<!-- CRUD // Create Replace Update Delete // -->
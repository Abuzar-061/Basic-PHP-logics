<?php 

echo "<style> *{ background-color: aqua;}
table{
    background-color: pink;}
    tr,th,td,a{ 
        background-color: pink;
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
echo "<center>";

if($total > 0){
    echo "<table style='border: 1px solid black'; cellspacing:'7'; width:'85%'; border-collapse:'collapse'>";
    echo "<tr style='border:1px solid black'>
     <th style='border:1px solid black'; width:'20%'; padding:' 0 15px ';>ID</th>
     <th style='border:1px solid black'; width:'20%'; padding:' 0 15px ';>First Name</th>
     <th style='border:1px solid black'; width:'20%'; padding:' 0 15px ';>LastName</th>
     <th style='border:1px solid black'; width:'25%'; padding:' 0 15px ';>Email</th>
     <th style='border:1px solid black'; width:'20%'; padding:' 0 15px ';>Password</th>
     <th style='border:1px solid black'; width:'20%'; padding:' 0 15px ';>Operation</th>
      </tr>";

    
    while($result = mysqli_fetch_assoc($query_data))
    {
         echo "<tr style='border:1px solid black'>
     <td style='border:1px solid black'>".$result['id']."</td>
     <td style='border:1px solid black'>".$result['firstName']."</td>
     <td style='border:1px solid black'>".$result['lastName']." </td>
     <td style='border:1px solid black'>".$result['email']."</td>
     <td style='border:1px solid black'> ".$result['password']."</td>
     <td style='border:1px solid black'><a href='Update_Data.php?id=$result[id]'>Update</a></td>
      </tr>";
        echo "<br>";
    }
}
else{
    echo " No record Found";
}
echo "</table>"; 
echo "</center>";

?>
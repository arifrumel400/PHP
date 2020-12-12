<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$db = 'php_from'; 
//

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO register_from (fullname, email, password)
VALUES ('$fullname','$email','$password')";

 $query = mysqli_query($conn, $sql); 

 if($query){
   echo "Registration success"; 
   } else 
   {
     echo "regisrration error"; 
   }

?>
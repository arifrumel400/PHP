<?php

$fullname = $_post['fullname'];
$email = $_post['email'];
$password = $_post['password'];

$servername = "localhost";
$username = "root";
$password = "";
$db = 'php_from'; 
//

// Create connection
$conn = mysqli_connect('localhost', 'root','', 'php_from');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO register_from (fullname, email, password)
VALUES ($fullname,$email,$password) );
register_from$email$password
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
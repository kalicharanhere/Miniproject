<?php
$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "db_miniproject";






$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "DELETE FROM users WHERE username='jjj' ";

 

if ($conn->query($sql) === TRUE) {
  echo "<h1>User Deleted</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
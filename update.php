<?php
$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "db_miniproject";






$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "UPDATE users SET passrepeat='12345'WHERE username='kali charan' ";

 

if ($conn->query($sql) === TRUE) {
  echo "<h1>Updated</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
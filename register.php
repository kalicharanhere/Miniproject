<?php
$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "db_miniproject";


$first_name = $_POST['username'];
$user_password=$_POST['password'];
$user_repeat=$_POST['passrepeat'];
$user_email = $_POST['mail'];



$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO users (username,password,passrepeat,mail)
 VALUES ('".$first_name."', '".$user_password."','".$user_repeat."','".$user_email."')";

 

if ($conn->query($sql) === TRUE) {
  echo "<h1>New user registered</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
<!doctype html>
<html lang="en">
  <head>
    <title>VIEW</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<?php
$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "db_miniproject";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT `username`, `mail` FROM `users`  ";
echo'
<table class="table table-dark ">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
     
    </tr>
  </thead>';
    $result=$conn->query($sql);
    if($result->num_rows > 0){
      while($row=$result->fetch_assoc()){
        $first_name=$row["username"];
        $user_email=$row["mail"];
        echo
          /*'<tr>
            <td>'.$first_name.'</td>
            <td>'.$user_email.'</td>
           
          </tr>';*/

          '<tbody>
          <tr>
           
            <td>'.$first_name.'</td>
            <td>'.$user_email.'</td>
           
          </tr>
         
        </tbody>';
    
           

      }
    }
    else{
      echo"Error Selecting the records, No results found";
    }
  
  
   
  

$conn->close();
?>
 </body>
</html>
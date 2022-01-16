<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ADMIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./dashboardstyles.css" type="text/css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-dark bg-dark fixed-top">
        <a class="navbar-brand text-center" href="#">ADMIN Dashboard</a>
        <form class="d-flex">
          <input
            class="form-control me-2 w-100"
            type="search"
            placeholder="Search..."
            aria-label="Search"
          />
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </nav>
    </header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 bg-dark d-md-block sidebar">
          <div class="left-sidebar">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href=""
                  ><i class="far fa-user fa-xs"></i> Users</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"
                  ><i class="fas fa-map-marker-alt fa-xs"></i> Location</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"
                  ><i class="far fa-envelope-open fa-xs"></i> Messages</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"
                  ><i class="fas fa-cog fa-xs"></i> Control</a
                >
              </li>
            </ul>
          </div>
        </div>
        <!-- Main -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
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
<table class="table table-dark table-striped table-hover ">
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
        </main>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/c85df1af6a.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

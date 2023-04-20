<?PHP
 session_start();
 if(isset($_SESSION['USERNAME'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="session.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   <div class="container">
    <h1> Details </h1>
     <h3>Username : <?PHP ECHO $_SESSION["USERNAME"]; ?>.</h3>
     <h3>Password : <?PHP ECHO $_SESSION["PASSWORD"]; ?>.</h3>
     <h3>Contact_Number : <?PHP ECHO $_SESSION["CONTACT_NUMBER"]; ?>.</h3>
   </div> 
    <div class="container">
      <h1>Update Your Details</h1>
      <div class="container">
        <form action="update.php"  class="form" method="POST">
            <label for="username" class="form-label">Username</label><br>
            <input   type="text" name="username" id="username"  class="form-control"><br>
            <label for="NUMBER"   class="form-label" >Contact Number</label><br>
            <input type="text" name="number" id="number" class="form-control" ><br>
            <label for="password"  class="form-label" > Password</label><br>
            <input type="password" name="password" id="password" class="form-control" ><br>
            <BUTton type="submit" class="btn btn-primary" >Update</BUTton>  
        </form>
    </div>


      </form>
    </div>

    
</body>
</html>
<?PHP } 
else{?> <script>
  alert('Please Login') ;
  window.location.href="index.html";</script><?php 
  // header("location:index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Description</title>
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
                <a class="nav-link" href="Dashboard.php">User Profile</a>
                <a class="nav-link" href="session.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <form <?php $SRNO=$_GET['UPDATE']; echo "action='updatedescription.php?SRNO=$SRNO'";?> method="post">
            <label for="pagetitle" class="form-label"> Page Title</label>
            <input type="text" id="pagetitle" name="pagetitle" class="form-control">
            <label for="pageslug" class="form-label"> Page Slub</label>
            <input type="text" id="pageslug" name="pageslug" class="form-control">
            <label for="pagedescription" class="form-label"> Page Discription</label>
            <textarea type="text" id="pagedescription" name="pagedescription" class="form-control"> </textarea><br>
            <BUTton type="submit" class="btn btn-primary" > Submit</BUTton>  
        </form>
      </div>
</body>
</html>


<?php

include "database.php";
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $TITLE  = $_POST['pagetitle'];
    $SLUG = $_POST['pageslug'];
    $DESCRIPTION = $_POST['pagedescription'];
  }
$update = "UPDATE `description` SET `PAGE_TITLE`='$TITLE',`PAGE_SLUG`='$SLUG',`PAGE_DESCIRPTION`='$DESCRIPTION' WHERE `SR NO`='$SNO'";
$RESULT = mysqli_query($conn , $update);
// $num = my_num_rows($RESULT);
// header("location:page_management.php");
?>
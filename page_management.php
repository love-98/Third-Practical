<?PHP
 session_start();
 if(isset($_SESSION['USERNAME'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />  
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready( function () {
    $('#mTable').DataTable();
} );
    </script>

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
        <form action="page_management.php" method="post">
            <label for="pagetitle" class="form-label"> Page Title</label>
            <input type="text" id="pagetitle" name="pagetitle" class="form-control">
            <label for="pageslug" class="form-label"> Page Slub</label>
            <input type="text" id="pageslug" name="pageslug" class="form-control">
            <label for="pagedescription" class="form-label"> Page Discription</label>
            <textarea type="text" id="pagedescription" name="pagedescription" class="form-control"> </textarea><br> 
            <BUTton type="submit" class="btn btn-primary" > Submit</BUTton> <br>  
        </form>
      </div>
    <div class="container">
      <table class="table" id="mTable">
        <thead>
          <tr>
            <th scope="col">SR NO</th>
            <th scope="col">Page Title</th>
            <th scope="col">Page Slub</th>
            <th scope="col">Page Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
        include("database.php"); 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $TITLE  = $_POST['pagetitle'];
          $SLUG = $_POST['pageslug'];
          $DESCRIPTION = $_POST['pagedescription'];
        }
       $insert = "INSERT INTO `description`(`PAGE_TITLE`, `PAGE_SLUG`, `PAGE_DESCIRPTION`) VALUES ('$TITLE','$SLUG','$DESCRIPTION')";
       $result = mysqli_query($conn,$insert);
      //  while($row = mysqli_fetch_assoc($result))
      //  echo $row['PAGE_TITLE'];
      $Getrow = "SELECT * FROM `description`";
      $getrowrsult = mysqli_query($conn,$Getrow);
      // $row = mysqli_fetch_assoc($getrowrsult);
       while($row = mysqli_fetch_assoc($getrowrsult)){
         if($row['PAGE_TITLE']!==""){?>
          <tr>            
            <td><?PHP echo $row['SR NO']; ?></td>
            <td><?PHP echo $row['PAGE_TITLE']; ?></td>
            <td><?PHP echo $row['PAGE_SLUG']; ?></td>
            <td> <?PHP echo $row['PAGE_DESCIRPTION']; ?> </td>        
            <?PHP $SRNO = $row['SR NO'];?>
            <td><?PHP ECHO "<a href='updatedescription.php?SRNO=$SRNO'>"; ?><button class="btn-primary rounded" > Edit </button></a> <?PHP ECHO "<a href='delete.php?sno=$SRNO'>"; ?><button class="BTN btn-primary  rounded"> Delete </button> </a></td>    
          </tr>    
          <?php }?>
   <?PHP } ?>
        </tbody>
      </table>
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

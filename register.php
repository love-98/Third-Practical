<?php
include "database.php";
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $Username = $_POST['username'];
  $Number = $_POST['number'];
  $Password = $_POST['password'];
}
// echo $_SERVER["REQUEST_METHOD"]; 
$Insert = "INSERT INTO `user_data`(`USERNAME`, `CONTACT_NUMBER`, `PASSWORD`) VALUES ('$Username','$Number','$Password')";
$result = mysqli_query($conn , $Insert);
if(isset($Insert)){
header("location:index.html");
}
?>
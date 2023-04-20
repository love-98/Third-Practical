<?php
session_start();
include "database.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $_SESSION['USERNAME'] = $Username;
    $_SESSION['PASSWORD'] = $Password;
  }

$Check = "SELECT * FROM `user_data` WHERE  `USERNAME` = '$Username'  AND `PASSWORD` = '$Password'";
$result = mysqli_query($conn, $Check);
$CN = "SELECT `CONTACT_NUMBER` FROM `user_data` WHERE  `USERNAME` = '$Username'  AND `PASSWORD` = '$Password'";
$CONTACT = mysqli_query($conn, $Check);
// echo   mysqli_num_rows($CONTACT);
// echo   mysqli_num_rows($result);
$count =mysqli_fetch_assoc($CONTACT);
$_SESSION['CONTACT_NUMBER'] = $count['CONTACT_NUMBER'];
$_SESSION['SRNO']=$count['Sr No'];
// echo $_SESSION['SRNO'];
// ECHO $_SESSION['CONTACT_NUMBER'];
$num = mysqli_num_rows($result);

echo $num;
if($num > 0){
    header("location:page_management.php");
}
else{?>
<script>
  alert("invalid username and password");
  window.location.href="index.html";
</script>

<?php } ?> 
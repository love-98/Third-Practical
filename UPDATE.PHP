<?php
session_start();
include "database.php";
if(ISSET($_SESSION['USERNAME']) ){
if($_SERVER['REQUEST_METHOD'] ==  'POST'){
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $Number = $_POST['number'];
}
    if($Username==""){
        $Username = $_SESSION['USERNAME'];
    }
    else {
        $_SESSION['USERNAME'] = $Username;
    }
    if($Password==""){
        $Password = $_SESSION['PASSWORD'];
    }
    else {
        $_SESSION['PASSWORD'] = $Password ;
    }
    if($Number==""){
        $Number = $_SESSION['CONTACT_NUMBER'];
    }
    else {
        $_SESSION['CONTACT_NUMBER'] = $Number ;
    }
    $SRNO = $_SESSION['SRNO']; 
    // echo $SRNO;
    $update = "UPDATE `user_data` SET `USERNAME`='$Username',`CONTACT_NUMBER`='$Number',`PASSWORD`='$Password' WHERE `Sr No` = '$SRNO'";
    $RESULT = mysqli_query($conn,$update);
    // echo mysqli_num_rows($RESULT);
    header("location:dashboard.php");
}
else { 
    ?>
<script>
    alert('Please Login') ;
    window.location.href="index.html";</script><?php 
    // header("location:index.html");
}
?>

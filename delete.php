<?php
include "database.php";
$sno=$_GET['sno'];
$delete ="DELETE FROM `description` WHERE `SR NO` = '$sno'";
$RESULT = mysqli_query($conn,$delete);
header("location:page_management.php")
?>
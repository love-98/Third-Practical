<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "third_round";
$conn = mysqli_connect($servername, $username, $password , $database);
if(!$conn){
    die("Your data is not connected");
}
// else{
//     echo "Your Database connected";
// }
?>
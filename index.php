<?php
session_start();
include 'config.php';
$userEmail = $_SESSION['userEmail'];
$userNameResult = mysqli_query($connection, "SELECT `dbuser_name` FROM `register` WHERE dbuser_email='$userEmail'");
$row = mysqli_fetch_assoc($userNameResult); // Fetch the row as an associative array
$userName = $row['dbuser_name'];

if(isset($userEmail)){
    include 'home.html';
}
else{
    echo "<script> location.href = 'login.php' </script>";
}
?>
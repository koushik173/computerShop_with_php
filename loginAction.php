<?php
include 'config.php';
// $r_userName = "admin";
// $r_pass = "admin";

$input_userEmail = $_REQUEST["userEmail"];
$input_pass = $_REQUEST["password"];

$result = mysqli_query($connection, "SELECT * FROM `register` WHERE dbuser_email='$input_userEmail' And dbuser_pass='$input_pass'");

if(mysqli_num_rows($result)){
    session_start();
    $_SESSION['userEmail'] = $input_userEmail;
    echo "<script> location.href = 'index.php' </script>";
}else{
    echo "<script>alert('invalid $input_userEmail and Password')</script>";
    echo "<script> location.href = 'login.php' </script>";
} 
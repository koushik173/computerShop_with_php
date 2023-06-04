<?php
session_start();
include 'config.php';
$pd_email = $_SESSION['userEmail'];

$pd_name= $_REQUEST["pd_name"];
$pd_price= $_REQUEST["pd_price"];
// $pd_quantity= $_REQUEST["pd_quantity"];
$pd_quantity= 1;

$insertQuery = "INSERT INTO `products`(`pd_email`, `pd_name`, `pd_price`, `pd_quantity`) VALUES ('$pd_email','$pd_name','$pd_price','$pd_quantity')";

if(isset($pd_email)){
   if(mysqli_query($connection, $insertQuery)){
    echo "<script>alert('Successfully Added Producsts')</script>";
    echo "<script>location.href='index.php'</script>";
   }
}
else{
    echo "<script> location.href = 'index.php' </script>";
    echo "<script>alert('error')</script>";

}
?>
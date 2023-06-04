<?php
session_start();
include 'config.php';

$pd_email = $_SESSION['userEmail'];

$pd_id= $_REQUEST["pd_id"];
$pd_name= $_REQUEST["pd_name"];
$pd_price= $_REQUEST["pd_price"];
$pd_quantity= 1;

$insertQuery = "INSERT INTO payments (py_id, py_name, py_price, py_quantity, py_email) VALUES ('$pd_id', '$pd_name', '$pd_price', '$pd_quantity', '$pd_email')";
$deleteQuery = "DELETE FROM products WHERE pd_id = '$pd_id'";

if (isset($pd_email)) {
    if (mysqli_query($connection, $insertQuery)) {
        if (mysqli_query($connection, $deleteQuery)) {
            echo "<script>alert('Payment Successful')</script>";
            echo "<script>location.href='payment.php'</script>";
        } else {
            echo "<script>alert('error')</script>";
        }
    } else {
        echo "<script> location.href = 'payment.php' </script>";
        echo "<script>alert('error')</script>";
    }
}
?>
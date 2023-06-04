<?php
session_start();
include 'config.php';

$pd_email = $_SESSION['userEmail'];

$pd_id= $_REQUEST["pd_id"];

$deleteQuery = "DELETE FROM products WHERE pd_id = '$pd_id'";

if (isset($pd_email)) {
    echo "<script>alert('Are you sure?')</script>";
    if (mysqli_query($connection, $deleteQuery)) {
        echo "<script>alert('Deleted Successful')</script>";
        echo "<script>location.href='payment.php'</script>";
    } else {
        echo "<script>alert('error')</script>";
    }
}
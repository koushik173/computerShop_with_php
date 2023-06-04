<?php
session_start();
include 'config.php';
$pd_email = $_SESSION['userEmail'];
$newUsername = $_POST['new_username'];
$updateQuery = "UPDATE `register` SET dbuser_name = '$newUsername' WHERE dbuser_email = '$pd_email'";
if (mysqli_query($connection, $updateQuery)) {
    echo "<script>alert('Update Successful')</script>";
    echo "<script>location.href='index.php'</script>";
} else {
    echo "<script>alert('Something is wrong')</script>";
}
?>
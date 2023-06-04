<?php
session_start();
if(isset($_SESSION['username'])){
    session_start();
    echo "<script> alert('Are You sure?') </script>";
    session_destroy();
    echo "<script> location.href = 'login.php' </script>";
}
else{
    session_destroy();
    echo "<script> location.href = 'login.php' </script>";
}


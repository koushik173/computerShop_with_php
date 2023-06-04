<?php
$servername="localhost";
$username="root";
$password="";
$dbname ="all_user";

$connection = mysqli_connect($servername,$username,$password,$dbname);

if(!$connection){
    die("connection failed!!".mysqli_connect_error());
}
else{
    echo "";
}
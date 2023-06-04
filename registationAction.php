<?php
include 'config.php';
$reg_name= $_REQUEST["reg_name"];
$reg_email= $_REQUEST["reg_email"];
$reg_phone= $_REQUEST["reg_phone"];
$reg_pass= $_REQUEST["reg_pass"];
$reg_con_pass= $_REQUEST["reg_con_pass"];


$username_pattern = "/[A-Za-z .]{3,20}/";
$phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$email_pattern = "/(cse|eee|law)_\d{10}@lus\.ac\.bd/";
$pass_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,<.>]).{8,}$/";


$insertQuery = "INSERT INTO `register`(`dbuser_name`, `dbuser_email`, `dbuser_mobile`, `dbuser_pass`) VALUES ('$reg_name','$reg_email','$reg_phone','$reg_pass')";

$copycatQuery="SELECT * FROM `register` WHERE dbuser_email='$reg_email'";
$copycat_user = mysqli_query($connection, $copycatQuery);


if(mysqli_num_rows($copycat_user)>0){
    echo "<script>alert('username is already registered')</script>";
    echo "<script>location.href='login.php'</script>";
}
else if($reg_pass!=$reg_con_pass){
    echo "<script>alert('Password is not matching with Confirm Password')</script>";
    echo "<script>location.href='registation.php'</script>";
}
else if(!preg_match($username_pattern, $reg_name)){
    echo "<script>alert('only char (3-20)!!')</script>";
    echo "<script>location.href='registation.php'</script>";
}
else if(!preg_match($phone_pattern, $reg_phone)){
    echo "<script>alert('Invalid Phone number')</script>";
    echo "<script>location.href='registation.php'</script>";
}
else if(!preg_match($email_pattern, $reg_email)){
    echo "<script>alert('Invalid Email')</script>";
    echo "<script>location.href='registation.php'</script>";
}
else if(!preg_match($pass_pattern, $reg_pass)){
    echo "<script>alert('Invalid Passward')</script>";
    echo "<script>location.href='registation.php'</script>";
}
else if(!mysqli_query($connection, $insertQuery)){
    echo "<script>alert('not registered)</script>";
    echo "<script>location.href='registation.php'</script>";
}
else{
    echo "<script>alert('Successfully registered')</script>";
    echo "<script>location.href='login.php'</script>";
}
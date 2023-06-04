<?php
 
 ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Login Form</title>
  <link rel="stylesheet" href="loginStyle.css">

</head>
<body>

<!-- partial:index.partial.html -->
<div class="reg-page">
  <div class="form">
  <h2>Registration Form</h2>
    <form class="login-form" action="registationAction.php" method="post">
      <input type="text" placeholder="Name"  name="reg_name" required/>
      <input type="email" placeholder="Email" name="reg_email" required/>
      <input type="text" placeholder="Phone" name="reg_phone" required/>
      <input type="password" placeholder="Password" name="reg_pass" required/>
      <input type="password" placeholder="Confirm Password" name="reg_con_pass" required/>
      <button>Register</button>
      <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>
  </div>
</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>
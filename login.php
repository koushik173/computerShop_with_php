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
<div class="login-page">
  
  <div class="form">
    <h2>Login Form</h2>
    <form class="login-form" action="loginAction.php", method="post">
      <input type="text" placeholder="Email" name="userEmail"/>
      <input type="password" placeholder="Password" name="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="registation.php">Create an account</a></p>
    </form>
  </div>
</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>
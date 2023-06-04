<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="stylesheet" href="profileStyle.css">
</head>
<body>
  <div class="container">
  <div style="margin: 20px">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" alt="">
    </a>
  </div>
    <h1>User Profile</h1>
    <div class="profile-card">
      <div class="profile-info">
        <?php
        session_start();
        include 'config.php';
        $userEmail = $_SESSION['userEmail'];
        $userNameResult = mysqli_query($connection, "SELECT `dbuser_name` FROM `register` WHERE dbuser_email='$userEmail'");
        $row = mysqli_fetch_assoc($userNameResult); // Fetch the row as an associative array
        $userName = $row['dbuser_name'];
        echo "<h2>$userName</h2>";
        echo "<p>$userEmail</p>";
        ?>
        
      </div>
      <div class="profile-form">
        <h3>Update Username</h3>

        <form method="post" action="update_profile.php">
          <label for="new_username">New Username:</label>
          <input type="text" name="new_username" id="new_username" required>
          <button style="margin: 10px;" type="submit">Update</button>
        </form>

      </div>
    </div>
  </div>
</body>
</html>

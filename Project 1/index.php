<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Document</title>
</head>

<body>
  <h3>Login</h3>

  <form action="includes/login.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password"> <!-- Corrected typo here -->
    <button>Login</button>
  </form>

  <h3>SignUp</h3>
  <form action="includes/signup.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password"> <!-- Corrected typo here -->
    <input type="text" name="email" placeholder="E-mail">
    <button>SignUp</button>
  </form>

  <?php
  // Display signup errors if any
  check_signup_errors();
  ?>
</body>

</html>
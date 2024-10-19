<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="">
  <title>Document</title>
</head>

<body>
  <h3>Login</h3>

  <form action="includes/login.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="passowrd" name="pwd" placeholder="Password">
    <button>Login</button>
  </form>




  <h3>SignUp</h3>
  <form action="includes/signup.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="passowrd" name="pwd" placeholder="Password">
    <input type="text" name="email" placeholder="E-mail">
    <button>SignUp</button>
  </form>

  <?php
  check_signup_errors();
  ?>
</body>

</html>
<?php

declare(strict_types=1);


function check_signup_errors()
{
  // Corrected the typo in 'errors_signup'
  if (isset($_SESSION['errors_signup'])) {
    $errors = $_SESSION['errors_signup'];

    echo "<br>";

    foreach ($errors as $error) {
      echo '<p class="pre">' . htmlspecialchars($error) . '</p>';
    }
    unset($_SESSION['errors_signup']);
  } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
    echo '<br>';
    echo '<p class>Signup sucess!</p>';
  }
}

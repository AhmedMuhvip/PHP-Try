<?php

declare(strict_types=1);

function check_signup_errors()
{
  if (isset($_SESSION['errors_singup'])) {
    $errors = $_SESSION['errors_signup'];
  }
}

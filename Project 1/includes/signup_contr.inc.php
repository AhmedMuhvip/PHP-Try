<?php

declare(strict_types=1);

function is_input_empty(string $username, string $password, string $email): bool
{

  if (empty($username) || empty($password) || empty($email)) {
    return true;
  } else {
    return false;
  }
}


function is_email_invalid(string $email): bool
{

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
  } else {
    return false;
  }
}


function is_username_taken(string $username): bool
{

  if () {
    return true;
  } else {
    return false;
  }
}

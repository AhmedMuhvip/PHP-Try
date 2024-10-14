<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST["username"];
  $password = $_POST["pwd"];
  $email = $_POST["emai"];

  try {
    require_once './dbh.inc.php';
    require_once './signup_model.inc.php';
    require_once './signup_view.inc.php';
    require_once './signup_contr.inc.php';

    // ERROR HANDLERS
    if (is_input_empty($username, $password, $email)) {
    }

    if (is_email_invalid($email)) {
    }

    if();
  } catch (PDOException $e) {
    die("Query Failed" . $e->getMessage());
  }
} else {
  header("Location: ../index.php");
  die();
}

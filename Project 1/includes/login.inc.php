<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST["username"];
  $password = $_POST["pwd"];

  try {
    require_once 'dbh.inc.php';
    require_once './login_model.inc.php';
    require_once './login_view.inc.php';
    require_once './login_contr.inc.php';

    // ERROR HANDLERS
    $errors = [];

    if (is_input_empty($username, $password)) {
      $errors["empty_input"] = "Fill in all fields!";
    }
    $result = get_user($pdo, $username);

    if (is_username_wrong($result)) {
      $errors["login_incorrect"] = "Incorrect login info!";
    }

    if (!is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
      $errors["login_incorrect"] = "Incorrect login info!";
    }

    require_once './config_session.inc.php';

    if ($errors) {
      $_SESSION["errors_signup"] = $errors;  // Corrected session variable name


      header("Location: ../index.php");
      die(); // Stop further execution after redirection
    }
  } catch (PDOException $e) {
  }
} else {
  header("Location:../index.php");
  die();
}

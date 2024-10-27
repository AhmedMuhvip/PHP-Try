<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST["username"];
  $password = $_POST["pwd"];
  $email = $_POST["email"];

  try {
    require_once './dbh.inc.php';
    require_once './signup_model.inc.php';
    require_once './signup_view.inc.php';
    require_once './signup_contr.inc.php';

    // ERROR HANDLERS
    $errors = [];

    if (is_input_empty($username, $password, $email)) {
      $errors["empty_input"] = "Fill in all fields!";
    }

    if (is_email_invalid($email)) {
      $errors["invalid_email"] = "Invalid email used!";
    }

    if (is_username_taken($pdo, $username)) {
      $errors["username_taken"] = "Username already taken!";
    }

    if (is_email_registered($pdo, $email)) {
      $errors["email_used"] = "Email already registered!";
    }

    require_once './config_session.inc.php';

    if ($errors) {
      $_SESSION["errors_signup"] = $errors;  // Corrected session variable name

      $signupData = [
        "username" => $username,
        "email" => $email
      ];
      $_SESSION["signup_data"] = $signupData;  // Corrected session variable name



      header("Location: ../index.php");
      die(); // Stop further execution after redirection
    }

    create_user($pdo, $email, $password, $username);
    header("Location: ../index.php?signup=success");
    $pdo = null;
    $stmt = null;


    die(); // Stop further execution after redirection
    // Proceed with signup if no errors are present
    // signup_user($pdo, $username, $password, $email); // Uncomment if signup logic is defined
  } catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
  }
} else {
  header("Location: ../index.php");
  die();
}

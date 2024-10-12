<?php
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_cookies', 1);

// Set session cookie parameters
session_set_cookie_params([
  'lifetime' => 1800, // Session cookie; expires when the browser is closed
  'path' => '/', // Available within the entire domain
  'domain' => 'localhost', // Domain (leave empty for the current domain)
  'secure' => true, // Use secure cookies
  'httponly' => true, // Accessible only through the HTTP protocol
]);

// Start the session
session_start();

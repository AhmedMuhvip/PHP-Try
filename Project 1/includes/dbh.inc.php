<?php

$host = 'localhost';
$dbname = 'dbTur';
$dbusername = 'Ahmed';
$dbpassword = '1246';

try {
  // Create a PostgreSQL database connection using PDO
  $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $dbusername, $dbpassword);

  // Set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Connected to PostgreSQL successfully!";
} catch (PDOException $e) {
  // Handle connection errors
  die("Connection failed: " . $e->getMessage());
}

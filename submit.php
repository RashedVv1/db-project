<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db.php';

if (isset($_POST['name']) && isset($_POST['age'])) {
  $name = $_POST['name'];
  $age = (int)$_POST['age'];
  $conn->query("INSERT INTO users (name, age, status) VALUES ('$name', $age, 0)");
}
?>
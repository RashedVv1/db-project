<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db.php';

if (isset($_GET['id'])) {
  $id = (int)$_GET['id'];
  $result = $conn->query("SELECT status FROM users WHERE id=$id");
  if ($row = $result->fetch_assoc()) {
    $newStatus = $row['status'] == 1 ? 0 : 1;
    $conn->query("UPDATE users SET status=$newStatus WHERE id=$id");
  }
}
?>
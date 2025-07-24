<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db.php';

$result = $conn->query("SELECT * FROM users");
while($row = $result->fetch_assoc()) {
  echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['age']}</td>
    <td>{$row['status']}</td>
    <td><button onclick='toggleStatus({$row['id']})'>Toggle</button></td>
  </tr>";
}
?>
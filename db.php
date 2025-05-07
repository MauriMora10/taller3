<?php
$conn = new mysqli('localhost', 'root', '', 'blogmauriciomora');
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>

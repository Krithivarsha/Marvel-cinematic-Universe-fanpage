<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "reviews";
$rpp = 3;

$conn = new mysqli($server, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
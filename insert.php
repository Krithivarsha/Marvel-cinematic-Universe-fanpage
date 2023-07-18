<?php
session_start();
include("config.php");

$conn = mysqli_connect($server, $user, $pass, $dbname); 
  if (!$conn){ 
   die ("Could not connect: " . mysql_error());
  }

if (isset($_POST['submit'])) {
$name = $_POST["username"];
$email = $_POST["email"];
$category = $_POST["category"];
$phase = $_POST["phases"];
$tvshow = $_POST["shows"];
$msname = $_POST["msname"];
$rating = $_POST["rating"];
$comment = $_POST["comment"];

$sql1 = "INSERT INTO ratings (name, email, category, phase, tvshow, msname, rating, comment)
VALUES ('$name', '$email', '$category', '$phase', '$tvshow', '$msname', '$rating', '$comment')";

if (mysqli_query($conn, $sql1)) {
header('location: review.php?posted=yes');
} 
}
else {
    echo "Sorry! Some error occured while posting your review. Please try again.";
}

mysqli_close($conn);
?> 
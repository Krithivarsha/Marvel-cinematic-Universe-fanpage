<?php
session_start();
include("config.php");
$conn = mysqli_connect($server, $user, $pass, $dbname); 
  if (!$conn){ 
   die ("Could not connect: " . mysql_error());
  }

if (isset($_POST['sub'])) {
$name = $_POST["name"];
$email = $_POST["mailid"];
$sub = $_POST["subscribe"];

$sql1 = "INSERT INTO subscribe (name, email, subscribe)
VALUES ('$name', '$email','$sub')";

if (mysqli_query($conn, $sql1)) {
		header('location: mcu-wiki.php?subscribed=yes');
} else {
    echo "<div class='error'>Sorry " . $name . "!<br>Some error occured while processing your subscription. Please try again./div>";
}

}

mysqli_close($conn);
?>

<?php
$servername = "localhost";
$username = "helix";
$password = "r@gh@v@007#helix";
$db = "helixentry";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

?>

<?php
$servername = "127.0.0.1";
$username = 'root';
$password = "";
$database='accessories';
// Create connection
$conn = new mysqli($servername, $username , $password , $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


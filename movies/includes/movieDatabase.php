<?php
$servername = "dr-demo-stack-nv-mysqldatabase-gfah1ci01eoe.cjdkk9pyawgb.us-east-1.rds.amazonaws.com";
$username = "ab3user";
$password = "password123";
$dbname = "bookstore";

$conn = mysqli_connect($servername, $username, $password,$dbname );
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<?php
$servername = "ab3lampstack-mysqldatabase-5rsm43fqoi23.c7oxqnztd8tr.us-east-1.rds.amazonaws.com";
$username = "ab3user";
$password = "password123";
$dbname = "bookstore";

$bookconn = mysqli_connect($servername, $username, $password, $dbname );
// Check connection
if (!$bookconn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

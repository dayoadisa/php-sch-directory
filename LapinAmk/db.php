<?php
/*
	File: db.php
	Desc: Connection to the database
*/
$servername = "localhost";
$username = "admin";
$password = "lapland";
$dbname = "lapinamk";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
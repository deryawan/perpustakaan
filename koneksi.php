<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'perpustakaan';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	 die("Connection failed: " . mysql_error());
} 
?>
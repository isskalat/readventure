<?php
// Replace with your actual database credentials
$servername = "localhost";  // or your database host
$username = "root";         // your database username
$password = "";             // your database password
$dbname = "test";  // your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo "Connected successfully";  // Displays a success message

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());  // Displays a clear error message
}
?>
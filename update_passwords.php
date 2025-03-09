<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the new passwords
$new_passwords = [
    'testuser' => 'newpassword1',
    'anotheruser' => 'newpassword2'
];

// Update the passwords in the database
foreach ($new_passwords as $username => $plain_password) {
    $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("UPDATE userprofile SET password = ? WHERE username = ?");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param('ss', $hashed_password, $username);
    if ($stmt->execute() === TRUE) {
        echo "Password updated successfully for user: $username<br>";
    } else {
        echo "Error updating password for user: $username - " . $stmt->error . "<br>";
    }
    $stmt->close();
}

$conn->close();
?>
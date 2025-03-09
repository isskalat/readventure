<?php
// Include the connection file
include('conne.php');

// Enable error reporting to catch any other issues
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if the request method is set
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Form processing logic here
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Insert query
    $sql = "INSERT INTO profile (name, email, password) VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
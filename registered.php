<?php
// Include the connection file
include('conne.php');

// Enable error reporting to catch any issues
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted using the POST method
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password using password_hash() before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the username already exists in the database
    $username_check_query = "SELECT * FROM profile WHERE username='$username'";
    $result = mysqli_query($conn, $username_check_query);

    if (mysqli_num_rows($result) > 0) {
        // Username already exists
        echo "This username is already taken!";
    } else {
        // Insert query to add the new user
        $sql = "INSERT INTO profile (username, password) VALUES ('$username', '$hashed_password')";

        if (mysqli_query($conn, $sql)) {
            echo "Account created successfully! You can now <a href='index.html'>log in</a>.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

// Close the connection
mysqli_close($conn);
?>
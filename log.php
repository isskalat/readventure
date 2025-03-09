<?php
// Start the session to keep the user logged in
session_start();

// Include the connection file
include('conne.php');

// Enable error reporting to catch any issues
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted using the POST method
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = trim(mysqli_real_escape_string($conn, $_POST['password']));  // Trim spaces from the password

    // Check if the username exists in the database
    $query = "SELECT * FROM profile WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    // If the username exists
    if (mysqli_num_rows($result) == 1) {
        // Fetch the user data from the database
        $row = mysqli_fetch_assoc($result);

        // Verify the password (compare the entered password with the hashed password in the database)
        if (password_verify($password, $row['password'])) {
            // Password is correct, start a session
            $_SESSION['username'] = $username;  // Store the username in the session

            // Redirect to the homepage
            header("Location: readventure.php");
            exit(); // Exit the script after redirecting
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    } 
}


// Close the database connection
mysqli_close($conn);
?>

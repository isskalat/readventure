<?php
session_start();
require 'conne.php';

if (!isset($_SESSION['username'])) {
    die("Not logged in");
}

$username = $_SESSION['username'];
$level = $_POST['level'];

$sql = "INSERT INTO profile (username, level) VALUES (?, ?) 
        ON DUPLICATE KEY UPDATE level = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sii", $username, $level, $level);

if (mysqli_stmt_execute($stmt)) {
    echo "Progress saved!";
} else {
    echo "Failed to save progress!";
}
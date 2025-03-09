<?php
session_start();
require 'conne.php';

if (!isset($_SESSION['username'])) {
    header("Location: log.php");
    exit();
}

$level = isset($_GET['level']) ? intval($_GET['level']) : 1;
$username = $_SESSION['username'];

$stmt = $conn->prepare("UPDATE profile SET level = ? WHERE username = ?");
$stmt->bind_param("ii", $level, $username);
$stmt->execute();
$stmt->close();

$_SESSION['level'] = $level;

// Redirect to next level
header("Location: level{$level}.html");
exit();
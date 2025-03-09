<?php
session_start();
require 'conne.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT username, password, level FROM profile WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($username, $hashed_password, $level);

    if ($stmt->fetch() && password_verify($password, $hashed_password)) {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = $level;

        header("Location: readventure.php");
        exit();
    } else {
        echo "Invalid login.";
    }
    $stmt->close();
}
?>

<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Login">
</form>
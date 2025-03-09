<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

$username = $_SESSION['username'] ?? 'Guest';  // Use Guest as fallback if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Level 1 Quiz</title>
    <link rel="stylesheet" href="testcss.css">
    <link rel="stylesheet" href="readventure.css">
    <script defer src="testjs.js"></script>  <!-- Move script to separate file for better organization -->
</head>
<body onload="loadQuiz()">

<header class="header">
    <a href="#" class="logo">
        <img src="logo.jpg" class="logo-img">Readventure</a>
    <nav class="navbar">
        <a href="readventure.php">Home</a>
        <div class="dropdown">
            <a href="#" id="user-profile">
                <i class='bx bxs-user'></i>
                <?php echo htmlspecialchars($username); ?>
            </a>
            <div class="dropdown-content">
                <a href="index.html" id="logout">Log Out</a>
            </div>
        </div>
    </nav>
</header>

<aside class="sidebar" id="sidebar">
    <a href="lessons.php">LESSONS</a>
    <a href="levels.php">STORIES</a>
</aside>  
<div class="content-box">
    <h2>Level 1 Quiz</h2>

    <div id="quiz-container"></div> <!-- Questions will be inserted here dynamically -->

    <button onclick="submitQuiz()">Submit Quiz</button>

    <div id="result"></div>
</div>
</body>
</html>
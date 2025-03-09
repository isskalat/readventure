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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Readventure</title>
        <link rel="stylesheet" href="quiz5.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> <!-- Import new font -->
        <script defer src="quiz5.js"></script>
</head>
    <body onload="loadQuiz()">
        <header class="header">
            <a href="#" class="logo">
                <i class='bx bx-menu sidebar-icon' id="sidebar-toggle"></i>
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
    <h2>Level 5 Quiz</h2>

    <div id="quiz-container"></div> <!-- Questions will be inserted here dynamically -->

    <button onclick="submitQuiz()">Submit Quiz</button>

    <div id="result"></div>
    <button id="retry" style="display:none;" onclick="retryQuiz()">Retry Quiz</button>

</div>
</body>
</html>
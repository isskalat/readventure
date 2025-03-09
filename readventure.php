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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readventure</title>
    <link rel="stylesheet" href="readventure.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> 
</head>
<body>

<header class="header">
    <a href="#" class="logo">
        <i class='bx bx-menu sidebar-icon' id="sidebar-toggle"></i>
        <img src="logo.jpg" class="logo-img">Readventure
    </a>

    <nav class="navbar">
        <a href="readventure.html">Home</a>
        <div class="dropdown">
            <a href="#" id="user-profile">
                <i class='bx bxs-user'></i>
                <?php echo htmlspecialchars($username); ?>
            </a>
            <div class="dropdown-content">
                <a href="index.php" id="logout">Log Out</a>
            </div>
        </div>
    </nav>
</header>

<!-- ✅ Add welcome section here -->
<div class="welcome">
    <h2>Welcome to Readventure, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>You are successfully logged in.</p>
</div>

<aside class="sidebar" id="sidebar">
    <a href="lessons.php">LESSONS</a>
    <a href="levels.php">STORIES</a>
</aside>

<main>
    <div class="content-box">
        <img src="readventure.jpg" class="main-image">
        <div class="about-content">
            <h2>About Readventure</h2>
            <p>Readventure is an engaging and interactive learning tool designed to make physics fun and accessible for Grade 8 students. The website features a collection of short stories that creatively explain key physics concepts, immersing learners in exciting narratives while enhancing their understanding of scientific principles.

After reading a story, users can test their knowledge with a quiz, reinforcing what they've learned in an interactive way. To support memorization, Readventure also offers flashcards that highlight essential physics concepts, helping students retain important information more effectively.

For structured learning, Readventure includes a lesson review feature, allowing students to revisit all the topics covered on the site. The game incorporates a color-coded level system, aligning with the Grade 8 Science curriculum. As students progress through the levels, they follow a logical order of physics concepts, making learning both engaging and educational.

With its unique combination of storytelling, quizzes, flashcards, and structured lessons, Readventure transforms physics education into an enjoyable and immersive experience! </p>
            <a href="levels.php" class="button" id="play-now-button">Play Now</a>
        </div>
    </div>
</main>
<script> document.getElementById('sidebar-toggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('show');
        document.body.classList.toggle('sidebar-open');
    });
</script>
</body>
</html>

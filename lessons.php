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
    <link rel="stylesheet" href="lessons.css">
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
<aside class="sidebar" id="sidebar">
    <a href="lessons.php">LESSONS</a>
    <a href="levels.php">STORIES</a>
</aside>

<main>
<div class="content-box">
    <section class="lesson-container">
       <a href="lesson1.php" class="lesson-card">
            <h2>Lesson 1: Three Laws of Motion</h2>
            <p>The lesson discusses how objects move and interact through inertia, force and acceleration, and action-reaction forces.</p>
       </a>

       <a href="lesson2.php" class="lesson-card">
            <h2>Lesson 2: Work</h2>
            <p>The lesson explains work as the transfer of energy that occurs when a force is applied to an object, causing it to move in the direction of the force.</p>
       </a>

        <a href="lesson3.php"  class="lesson-card">
            <h2>Lesson 3: Power</h2>
            <p>The lesson defines power as the rate at which work is done, measuring how quickly energy is transferred or converted.</p>
        </a>
        <a href="lesson4.php" class="lesson-card">
            <h2>Lesson 4: Potential Energy</h2>
            <p>The lesson explains potential energy as the stored energy an object has because of its position, condition, or composition, such as an object held at a height or a stretched spring.</p>
        </a>

        <a href="lesson5.php"  class="lesson-card">
            <h2>Lesson 5: Kinetic Energy</h2>
            <p>The lesson defines kinetic energy as the energy an object has due to its motion, which depends on both its mass and velocity.</p>
        </a>

       
</div>
</section>
</main>

<script src="readventure.js">
</script>

</body>
</html>

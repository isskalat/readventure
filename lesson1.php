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
    <title>Readventure</title>
    <link rel="stylesheet" href="lesson1.css">
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
    <aside class="sidebar" id="sidebar">
        <a href="lessons.php">LESSONS</a>
        <a href="levels.php">STORIES</a>
    </aside>
    <main>
        <div class="content-box">
            <section class="lessons">
                <div class="lesson">
                    <h1>Lesson 1</h1><br>
                    <h2>Newton's First Law of Motion: Law of Inertia</h2><br>
                    <p>An object at rest remains at rest, and an object in motion continues in motion with the same speed and in the same direction unless acted upon by an unbalanced external force. This law introduces the concept of inertia, which is the tendency of objects to resist changes in their state of motion.</p>
                   <br> <h3>Newton's Second Law of Motion: Law of Acceleration</h3><br>
                    <p>The acceleration of an object is directly proportional to the net force acting upon it and inversely proportional to its mass. This relationship is expressed by the formula: F = m × a, where F is the net force applied, m is the mass of the object, and a is the acceleration produced.</p>
                    <br><h3>Newton's Third Law of Motion: Action and Reaction</h3><br>
                    <p>For every action, there is an equal and opposite reaction. This means that forces always occur in pairs; when one body exerts a force on another, the second body exerts a force of equal magnitude but in the opposite direction on the first body.</p>
                </div>
            </section>
        </div>
    </main>
    <script>document.getElementById('sidebar-toggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('show');
        document.body.classList.toggle('sidebar-open');
    });</script>
</body>
</html>
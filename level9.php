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
        <link rel="stylesheet" href="level9.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> <!-- Import new font -->
</head>
    <body>
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
        <main>
            <div class="content-box">
                <section class="level1">
                    <div class="progress-bar">
                         <h6>Lesson 9</h6>
                     </div>
                     <div class="progress">
                        <div class="progress-fill" style="width: 50%;"></div>
                    </div>
                    <h4>Curiousity</h4>
                        <p>There was a curious boy from a small village named Charles, who loves exploring in the woods and reading books. One day, he traveled further than usual and discovered a tall hill. He climbed to the top, enjoying the amazing view of his tiny village below. At the hill's edge, he found a large rock dangerously balanced and because of curiosity he pushed it, the rock tumbled down gathering speed and making a rumbling noise. Charles was thrilled, but worried when it headed towards a stream. It splashed into the water with a loud crash, sending water everywhere. 

                            Charles realized the rock's energy increased as it rolled downhill, because of that he remembered the book he read about potential energy says that it is often associated with restoring forces such as the force of gravity.  So even a small action, like pushing a rock, could have big consequences. He left the hill with a new found lesson for nature's energy, therefore he wanted to learn and explore more.
                            
                        </p>    
                    </div>
                    <div class="next-button">
                        <a href="quiz9.php" class="button">Next</a>
                    </div>
                </section>
            </div>
        </main>
        <script src="readventure.js"></script>
    </body>
</html>
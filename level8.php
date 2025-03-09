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
        <link rel="stylesheet" href="level8.css">
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
                         <h6>Lesson 8</h6>
                     </div>
                     <div class="progress">
                        <div class="progress-fill" style="width: 50%;"></div>
                    </div>
                    <div class="story-box">
                    <h4>Smash, Crash, Kinetic Dash!</h4>
                        <p>Justine, an archaeologist, explores an ancient temple until he's met with a heavy boulder. He couldn't push it, so he tries running at it, giving speed to his mass. The energy from any moving mass is called kinetic energy. Slowly, he pushed the boulder out of the way. Deeper into the temple, he finds an old heavy bookshelf. He tries running at it again to make it move, but he ends up breaking the shelf, because he pushed all his kinetic energy into the bookshelf quickly. He realised this, so he carefully pushed the bookshelf so that the kinetic energy spread out slowly. He sees a glass door that's stuck in place. Since it's too dangerous to break up close, he comes up with different ways to break it. He tries pushing a heavy boulder to it, but it was too slow to break it. He then tries to throw a smaller stone at it, despite its lighter weight, the high speed gave it lots of energy just from moving, the stone pushed all its kinetic energy into the glass door quickly, breaking the door. At the exit he finds that just his weight can't press the big button on the ground, even when he tries to jump with his weight to make kinetic energy, it doesn't work. Justine realised that he's been focused on speed too much, that he forgot to focus on more mass! He carries a nearby boulder, then jumps on the big button. The new mass from the boulder, and the speed from falling down, gave the button a big push, which opened the door. In the end, Justine goes home thinking about how kinetic energy was used to build ancient cities, how they moved heavy stones around with kinetic energy to build their buildings and grow their communities. He realises, that even today—our society relies on it too.
                        </p>      
                    </div>
                    <div class="next-button">
                        <a href="quiz8.php" class="button">Next</a>
                    </div>
                </section>
            </div>
        </main>
        <script src="readventure.js"></script>
    </body>
</html>
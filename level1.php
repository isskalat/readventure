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
        <link rel="stylesheet" href="level1.css">
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
                         <h6>Lesson 1</h6>
                     </div>
                     <div class="progress">
                        <div class="progress-fill" style="width: 50%;"></div>
                    </div>
                    <div class="story-box">
                        <h4>The Icy Game of Hockey</h4>
                        <p>
                            
Jeremiah the hockey player, his team and their opponent has one score away from winning. Jeremiah icy skates glided across the rink as he chased the puck, its is a circle like shape that use for the game of hockey And colored black. As He hit it with his stick, feeling the force of the impact. The newton's second law of motion, jeremiah's force of the stick make the puck accelerate because of the force of impact he applied, he notice it. As he chase the puck, he change the direction of  the puck with his stick to the direction of ring to get the score of winning. The newton's first law of motion, he keep on moving accross his opponent that are trying to stop him from getting a score and he applied new force to change the path of the puck, later he got the opportunity to shot the puck to the ring and got the winning score.
                        </p>
                    </div>
                    <div class="next-button">
                        <a href="quiz1.php" class="button">Next</a>
                    </div>
                </section>
            </div>
        </main>
        <script>
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
            document.body.classList.toggle('sidebar-open');  // This is the key to shifting content
        });
        </script>
    </body>
</html>
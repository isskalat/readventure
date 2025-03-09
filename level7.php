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
        <link rel="stylesheet" href="level7.css">
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
                         <h6>Lesson 7</h6>
                     </div>
                     <div class="progress">
                        <div class="progress-fill" style="width: 50%;"></div>
                    </div>
                    <div class="story-box">
                    <h4>The Skateboard</h4>
                        <p>Thomas loved riding and Having a passion for skateboarding down the big hill located near his house. At that moment as he started pushing, he experienced the force of wind blowing against his cheeks. His acceleration rate increased with every push and consequently, his kinetic energy continued to increase. My body generates increasing energy when I keep moving around. He recalled his physics lesson when he said this to himself. A small rock appeared in front of him when he got close to the bottom of the hill. His skateboard stopped abruptly because he pushed it too fast but he did not halt the motion so his kinetic energy transformed into movement of his body. The experience of Newton’s laws hit him during the tumble through the grass so he broke out in laughter. Has he picked up his board and decided to resume his ride, yet he would do it with increased awareness.
                            Keithleen smiled. "I understand now!" Power is about doing more in less time, ​not ​in ​greater​ away!” "Exactly!", said Ben. “The faster you do anything, the more power you generate. So as you pedal faster with your bike, you’re putting in more power to move it forward!” Keithleen komme to the conclusion that power is not only how hard do you push something, but also how quick do you do it. The closer to 0 you can get the energy to do something.
                        </p>    
                    </div>
                    <div class="next-button">
                        <a href="quiz7.php" class="button">Next</a>
                    </div>
                </section>
            </div>
        </main>
        <script src="readventure.js"></script>
    </body>
</html>
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
        <link rel="stylesheet" href="level4.css">
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
                         <h6>Lesson 5</h6>
                     </div>
                     <div class="progress">
                        <div class="progress-fill" style="width: 50%;"></div>
                    </div>
                    <div class="story-box">
                    <h4>A Tale of Speed and Strength</h4>
                        <p>Keithleen loved to be outside and one day it was pretty and she and her friend Kent went to the park. Ben gave a huge merry-go-round a push, but it didn’t budge much. Mia asked why it was not spinning faster. “What happened?” Keithleen asked. “Kent, why is it so slow?” “We are up to a point to much, is because I'm not using enough power; I want to faster is I need to push harder and faster” Kent explained after pausing a bit.
                            Keithleen asked, bewildered, “What’s power?” Kent smiled and said, “Excellent question! Power is how much work you perform over a span of time. I am doing something when I am pushing four hours slowly, but it is not so면서. “If I push harder, I do the same amount of work in less time, but I use more power.” Keithleen paused and said, Okay, so if I apply pressure, it will move faster? "Yes!" Kent responded. "That's correct! Power has to do with the ability to get something done quickly. For example, while running in a race, the faster you run, the more power you will have to spend to quickly reach the end line!"
                            Keithleen wanted to see it for herself. She went up to the merry-go-round, pushed it a little and it turned slowly. “You see,” Kent said, “because it was a slow push, you used less power. Keithleen nodded and then decided to attempt to shove it faster. She gave it a strong, fast push, and whoosh! And the merry-go-round started spinning faster! "Wow! Look at it go! Keithleen laughed. Kent applauded and was like, "That's more power! You did the same work, moving the merry-go-round, but you did it much more quickly and, that with much more strength.”
                            Keithleen smiled. "I understand now!" Power is about doing more in less time, ​not ​in ​greater​ away!” "Exactly!", said Ben. “The faster you do anything, the more power you generate. So as you pedal faster with your bike, you’re putting in more power to move it forward!” Keithleen komme to the conclusion that power is not only how hard do you push something, but also how quick do you do it. The closer to 0 you can get the energy to do something.
                        </p>
                    </div>
                    <div class="next-button">
                        <a href="quiz5.php" class="button">Next</a>
                    </div>
                </section>
            </div>
        </main>
        <script src="readventure.js"></script>
    </body>
</html>
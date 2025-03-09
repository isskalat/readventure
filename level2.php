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
        <link rel="stylesheet" href="level2.css">
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
                         <h6>Lesson 2</h6>
                     </div>
                     <div class="progress">
                        <div class="progress-fill" style="width: 50%;"></div>
                    </div>
                    <div class="story-box">
                        <h4>Rocket Science in a Bottle</h4>
                        <p>Sophia had always been interested in rockets. She had seen many launches on TV and wanted to know what was happening behind a launch. One day Mr. Rivera challenged his students to make a simple "rocket" out of a plastic bottle, water, and air pressure.

                            She became very excited. In the classroom, she learned that a rocket functions according to Newton’s Third Law of Motion: for every action, there is an equal and opposite reaction. When the rocket expels gas under it, it is propelled up.
                            
                            Carefully, she filled water into the bottle, corked it tightly, leaving some air inside. With an airtight pump, she began pumping air into the bottle until the air pressure started building up. The pressure in the bottle was indeed increasing: cork, cork-the push on the cork was getting too high.
                            
                            Upon Mr. Rivera's signal, Sophia stepped back, and the cork popped. With a loud "whoosh," the bottle went straight up into the air! Water was squirted out because the air pressure inside forced it down and the bottle shot up into the air in reaction to that.
                            
                            All of a sudden, everything fitted into place for Sophia: the action of pushing water out had an opposite reaction that thrust the rocket higher into the air. The more pinched the cork became, the faster the water shot out and the higher the rocket flew. The speed of the rocket, she noticed, also relied on air pressure or how much water was in it.
                            
                            The rocket, therefore, was down. Sophia's spirits were lifted because she had achieved her goal: All of the laws that take place in sending real rockets into orbit occurred with nothing but a plastic bottle!   
                        </p>
                    </div>
                    <div class="next-button">
                        <a href="quiz2.php" class="button">Next</a> <!-- Change the link to testquiz2.html -->
                    </div>
                </section>
            </div>
        </main>
        <script src="readventure.js"></script>
    </body>
</html>
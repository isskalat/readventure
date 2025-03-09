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
        <link rel="stylesheet" href="level6.css">
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
                         <h6>Lesson 6</h6>
                     </div>
                     <div class="progress">
                        <div class="progress-fill" style="width: 50%;"></div>
                    </div>
                    <div class="story-box">
                    <h4>Power Kick</h4>
                        <p>Ana and Pauleen, best friends, enjoyed scootering. Each day after school, they would gather at the sidewalk outside Pauleen’s home, lineup their scooters, and compete to reach the large oak tree at the end of the street.


                            One afternoon, while they were preparing, their friend Zade came to join.
                            
                            
                            “Can I be the referee?” Ben asked.
                            
                            
                            “Of course!” Pauleen said. “We’ll just race like we always do!”
                            
                            
                            Zade raised his hand. “Alright. Ready… set… GO!”
                            
                            
                            Max Speeds Ahead!
                            
                            
                            Ana and Pauleen scooted off the ground with their feet, and their scooters glided ahead. At first, they stood shoulder to shoulder. But soon Pauleen began to pull away!
                            
                            
                            Ana frowned. She was also rooting the ground, the same as Pauleen. She was on the move, just like Pauleen. So why was he going faster?
                            
                            
                            “Pauleen! How are you ahead of me?” she shouted.
                            
                            
                            Pauleen grinned. “I’m using more power!”
                            
                            
                            Ana was confused. “What do you mean? I’m pushing my scooter too!”
                            
                            
                            The man running next to him smiled: Zade. “Power has all to do with the speed of work!!”
                            
                            
                            Ana raised an eyebrow. “Work? I thought work was homework or something like homework.”
                            
                            
                            Zade chuckled. “Not that kind of work! In physics, work is using force to move something. At the moment, when you propel your scooter forward, you’re doing work because you’re spending energy to move yourself.”
                            
                            
                            Ana nodded slowly. Okay… so if Pauleen and I are both pushing, we’re both doing work. But why is he faster?”
                            
                            
                            Zade grinned. “That’s where power comes in! Power is not about doing work — it’s how fast you do it.”
                            
                            
                            Ana blinked. “Hold, up, so power is speed?
                            
                            
                            Zade shook his head. “Not exactly! Think of it this way:
                            
                            
                            So let's say you had ten books to walk upstairs.
                            
                            
                            If you just read one book at a time and put it down, you will finish, but it will take f-o-r-e-v-e-r.
                            
                            
                            “But if you’re holding two or three books in your hands, and you move quickly, you will finish much more quickly — so you were using much more power!”
                            
                            
                            Ana gasped. “Ohhh! So power isn’t just about doing the work — it’s about how quickly you do it?”
                            
                            
                            “Exactly!” Zade said. “Pauleen is pulling harder and in more of the time, and therefore he is doing the same work that you do, in less time. That’s why he’s ahead!”
                            
                            
                            Lily was eager to put this into practice. Where she once simply glided between slow pushes, she began kicking the ground, harder and faster—time and time again!
                            
                            
                            All of a sudden she felt herself going faster!
                            
                            
                            “I’m catching up!” she shouted excitedly.
                            
                            
                            Pauleen laughed. “See? The more power you have, the faster you go!”
                            
                            
                            Ana whooshed across the finish line the same time as Pauleen with one last big push. The two of them glided to a halt, panting.
                            
                            
                            “That was awesome!” Ana grinned. “So power isn’t just being strong — it’s how quickly you use energy to do something?”
                            
                            
                            “Exactly!” Zade nodded. “It’s not just how much work you do, it’s how quickly you do it. AAAAHHH!!! That’s what makes a difference!”
                            
                            
                            Pauleen smirked. “Well, the next time I’m winning, I’m using even more power!”
                            
                            
                            Ana laughed. “We’ll see about that!”
                            
                            
                            As they scooted home, they both knew one thing for sure — power was not simply about effort. It was all about how fast you used it!
                        </p>
                    </div>
                    <div class="next-button">
                        <a href="quiz6.php" class="button">Next</a>
                    </div>
                </section>
            </div>
        </main>
        <script src="readventure.js"></script>
    </body>
</html>
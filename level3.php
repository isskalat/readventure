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
        <link rel="stylesheet" href="level3.css">
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
                         <h6>Lesson 3</h6>
                     </div>
                     <div class="progress">
                        <div class="progress-fill" style="width: 50%;"></div>
                    </div>
                    <div class="story-box">
                        <h4>The Hidden Force</h4>
                        <p>Once upon a time in a small village, there was a young girl named Cheska who loved to explore the mysteries of the world around her. One day, while playing near the edge of a hill, she noticed a large rock blocking a pathway. As Cheska studied the rock, she remembered something her physics teacher had once said: "Work is done when a force moves an object through a distance."

                            Curious, Cheska wondered if she could move the rock to clear the path. But the rock was heavy, and she wasn’t sure how she could do it. That’s when she spotted a long, sloping ramp leading up to the hill. It was the perfect opportunity to test the concept of work!
                            
                            She decided to gather some materials and build a little cart. With the cart ready, she placed the rock on it and began pushing the cart up the ramp. As she pushed, she noticed how much easier it felt than trying to lift the rock straight up. The ramp seemed to reduce the force she needed to apply, but the rock still moved a significant distance.
                            
                            “Hmm… so work is still being done,” Cheska thought to herself, “but this ramp is making the force required smaller. I don’t have to lift the rock, but I do need to push it over a longer distance!”
                            
                            As she continued her experiment, Cheska realized something important. In physics, work is not just about the force you apply, but also the distance the object moves in the direction of the force.
                            
                            In her case, the angle  was small because the ramp was mostly horizontal, meaning the force and distance were closely aligned.
                            
                            Excited, Cheska thought about how her journey with the rock was more than just moving it. She was learning how the ramp allowed her to do work more efficiently, changing both the amount of force and the distance involved.
                            
                            By the end of the day, Cheska had successfully moved the rock up the ramp, clearing the pathway for others. She smiled as she sat on the hill, looking at the path she had created.
                            
                            “Physics really is magical,” she said, realizing that understanding concepts like work allowed her to make a difference in the world.
                            
                            And so, Cheska’s adventure with work in physics didn’t just clear the path—it cleared her understanding of how the world around her worked, one formula at a time.
                        </p>
                    </div>
                    <div class="next-button">
                        <a href="quiz3.php" class="button">Next</a>
                    </div>
                </section>
            </div>
        </main>
        <script src="readventure.js"></script>
    </body>
</html>
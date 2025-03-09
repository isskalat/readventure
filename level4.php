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
                         <h6>Lesson 4</h6>
                     </div>
                     <div class="progress">
                        <div class="progress-fill" style="width: 50%;"></div>
                    </div>
                    <div class="story-box">
                    <h4>Pushing the Limits</h4>
                        <p>In a small coastal town, there lived a determined young girl named Nicole. She loved solving problems, especially when it came to physics. One bright morning, while playing near the docks, she noticed something unusual—a large, heavy barrel had rolled off a cart and was blocking a narrow path along the pier. The workers couldn’t seem to move it, and it was preventing the boats from getting through.

                            Nicole approached the scene, observing the problem carefully. She had learned in her physics class that work is done when a force moves an object through a distance. Nicole thought about how she could apply this concept to move the barrel and clear the path.
                            
                            She noticed that the barrel was very heavy and difficult to lift. But instead of trying to lift it, she wondered if there was another way to move it. Nearby, she spotted a long, strong rope tied to a nearby post. An idea began to form in her mind.
                            
                            "I could use the rope to pull the barrel along the pier," Nicole thought. "It might take less force to pull it than to lift it."
                            
                            Nicole tied the rope securely around the barrel and attached the other end to herself. She took a deep breath and started pulling. At first, it was tough. The barrel was heavy, and the friction from the wooden dock made it difficult to move. But she didn’t give up. She adjusted her grip, pulled with all her strength, and slowly the barrel began to budge.
                            
                            As the barrel moved, Nicole thought about what was happening. She remembered that work is done when a force is applied to an object, and that work is easier if the force is spread over a greater distance. By pulling the barrel along the pier, she was applying a constant force to move it a significant distance.
                            
                            After a few minutes of hard work, Nicole finally got the barrel out of the way, clearing the path for the boats to pass through. The dock workers cheered and thanked Nicole for her determination.
                            
                            Nicole smiled proudly, realizing that she had just demonstrated an important concept in physics. She had used her knowledge of work to solve a real-world problem. She had applied a force to move an object, and even though the barrel was heavy, the distance she moved it was key to making the task more manageable.
                            
                            As the sun began to set over the water, Nicole walked home, excited about the many ways physics could help her understand the world around her—and looking forward to her next challenge.
                            
                            The End.
                        </p>
                    </div>
                    <div class="next-button">
                        <a href="quiz4.php" class="button">Next</a>
                    </div>
                </section>
            </div>
        </main>
        <script src="readventure.js"></script>
    </body>
</html>
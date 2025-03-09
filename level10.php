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
        <link rel="stylesheet" href="level10.css">
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
                         <h6>Lesson 10</h6>
                     </div>
                     <div class="progress">
                        <div class="progress-fill" style="width: 50%;"></div>
                    </div>
                    <h4>Swing High</h4>
                        <p>On a bright sunny day, Max go to the play ground after school there'sa bunch of kids were having a blast at the playground. There were swings, slides, and a big jungle gym. Max was really interested in the swings, he wanted to know the lesson they have tackled in the class about potential energy that air molecules have potential energy due to Earth's gravity. 

                            Max made his way to the swings, where his friend Lily was swinging back and forth. “Can I have a turn?” he asked, excitement bubbling in his voice. Lily grinned and hopped off, allowing Max to take her spot. He settled onto the swing, feeling the refreshing breeze on his face. As Max pushed off the ground, a rush of excitement filled him. He started swinging higher and higher. Each time he reached the top, he could see over the tall fence surrounding the playground. Looking down made him a bit nervous, but mostly he felt thrilled. It was like he was soaring through the air. Suddenly, he heard a voice call out. “Hey, Max! Do you see that huge tree over there?” It was Jake, another friend, standing by the jungle gym. Max nodded while still swinging. The tree was ancient and towering, with branches that spread wide. Jake added, “I bet you could swing so high that you could touch one of its branches!” Feeling a surge of determination, Max wanted to swing higher than ever. 
                            
                            He started pumping his legs harder, feeling the energy building up inside him. With each push, he flew higher, and the ground seemed to drift away. At the peak of his swing, he took a deep breath. For a brief moment, Max let go of the swing, experiencing a weightless feeling in his stomach. He imagined reaching out to touch one of the tree branches. It felt like time had stopped. But soon, he began to descend. The swing swung back, and he felt gravity pulling him down. The ground rushed up to meet him, and he landed safely. The other kids cheered, thrilled to see Max’s daring attempt. “Do it again!” they shouted. Max smiled widely. He took a deep breath, ready to swing again. He realized that with curiosity and a bit of bravery, he could turn potential energy into something amazing.
                            
                            
                        </p>    
                    </div>
                    <div class="next-button">
                        <a href="quiz10.php" class="button">Next</a>
                    </div>
                </section>
            </div>
        </main>
        <script src="readventure.js"></script>
    </body>
</html>
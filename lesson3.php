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
    <meta charset="UTD-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="lesson1.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Readventure</title>
        <link rel="stylesheet" href="readventure.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> <!-- Import new font -->
    </head>
    <body>
        <header class="header">
            <a href="#" class="logo">
                <i class='bx bx-menu sidebar-icon' id="sidebar-toggle"></i>
                <img src="logo.jpg" class="logo-img">Readventure
            </a>
        
            <nav class="navbar">
                <a href="readventure.html">Home</a>
                <div class="dropdown">
                    <a href="#" id="user-profile">
                        <i class='bx bxs-user'></i>
                        <?php echo htmlspecialchars($username); ?>
                    </a>
                    <div class="dropdown-content">
                        <a href="index.php" id="logout">Log Out</a>
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
                <section class="lessons">
      
                    <div class="Lesson 3">
                        <h1>Lesson 3</h1>
                        <h2>Power</h2>
                         <p> Power is the rate at which work is done or energy is transferred per unit time. </p>
                         <br><h4> The formula is: </h4>
                         <br><p> P=W/t </p>    
                         
                         <br><strong><h4>Where:  </strong></h4>
                         <br><p> P = Power (Watts, W)  
                             <br> W = Work done (Joules, J)  
                             <br> t = Time (Seconds, s)  </p>
                         
                         <br><h4><strong>Example 1: Lifting a box</h4></strong>

                         <br><p><strong>A worker lifts a 50 kg box to a shelf 2 meters high. The worker takes 5 seconds to complete the lift. Calculate the worker's power output.
                            <br> Given</strong>
                            <br>m=50kg
                            <br>h=2m
                            <br>t=5s
                            <br>g=9.8 N/kg
                            <br> Required</strong>
                            <br>P=?
                            
                            </p>
                    </div>
                </section>
            </div>
        </main>
        <script> document.getElementById('sidebar-toggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
            document.body.classList.toggle('sidebar-open');
        });
        </script>
    </body>
</html>
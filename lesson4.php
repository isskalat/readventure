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
                    <div class="Lesson 4">
                        <h1>Lesson 4</h1>
                        <h2>Kinetic Energy</h2>
                         <p> In physics, kinetic energy (KE) of an object is the energy that it possesses due to its motion. It is defined as the work needed to accelerate a body from rest to a certain velocity. Once gained, the object maintains this energy unless its speed changes.</p>
                         <br><h3>Formula for Kinetic Energy:</h3>
                         <br><h3>KE = 1/2 mv^2</h3>
                         <br><p> Where:  KE= 1/2𝑚𝑣^2</p>
                         <br><h3>SAMPLE PROBLEMS & SOLUTIONS</h3>
                         <br><p> 1. A 98 kg basketball player runs at a speed of 7.0 m/s. What is his KE?</p>
                         <br><h3> Given:</h3>
                         <br><p>Mass (m) = 98 kg
                            <br>Velocity (v) = 7.0 m/s
                        </p>
                        <br><h3>Required:</h3>
                        <br><p>Kinetic Energy (KE)</p>
                        <br><h3>Equation:</h3>
    
                        <br><p>𝐾𝐸 = 1/2𝑚𝑣^2</p>
                        <br><h3>Solution:</h3>
                        <br><p>𝐾𝐸 = 1/2(98kg)(7.0m/s)^2
                            <br>KE= 1/2 (98)(49)
                            <br>KE= 1/2 (4,802)
                            <br>KE= 2,401 J
                            </p>
                            <br>
                            <h3>Answer:</h3><br>
                            <p> The basketball player’s kinetic energy is 2,401 J.</p>
                            <br> <p><strong>2. A car with a mass of 700 kg is moving with a speed of 20 m/s. Calculate the kinetic energy of the car.</p>
                            </strong><br> <p>Given:</p><br>
                                <span>
                                    Mass (m) = 700 kg<br>
                                    Velocity (v) = 20 m/s<br>
                                </span>
                                <br><h3>Required:</h3>
                                <br><p>Kinetic Energy (KE)</p>
                                <br><h3>Equation:</h3>
                                <br>
                                <br><p>𝐾𝐸 = 1/2𝑚𝑣^2
                                <br><h3>Solution:</h3>
                                <br><p>𝐾𝐸 = 1/2(700)(20)^2
                                 KE= 1/2 (700)(20) 2
                                 KE= 1/2 (700)(400)
                                 KE= 1/2 (280,000)
                                 KE= 140,000 J
                                 </p>
                                 <br>
                                 <h3>Answer:</h3><br>
                                 <p> The car’s kinetic energy is 140,000 J.</p>
                                 <br> <p><strong>3. A cyclist and bike have a total mass of 100 kg and a speed of 15 m/s. Calculate the kinetic energy.</p>
                                 </strong><br>  <p>Given:</p><br>
                                  Mass (m) = 100 kg
                                  Velocity (v) = 15 m/s
                                  <br><h3>Required:</h3>
                                  <br><p>Kinetic Energy (KE)</p>
                                  <br><h3>Equation:</h3>
                                  <br>
                                  <br><p>𝐾𝐸 = 1/2𝑚𝑣^2
                                  <br><h3>Solution:</h3>
                                  <br><p>𝐾𝐸 = 1/2(100)(15)^2
                                  KE= 1/2 (100)(15) 2
                                  KE= 1/2 (100)(225)
                                  KE= 1/2 (22,500)
                                  KE= 11,250 J
                                  </p>
                                  <br>
                                  <h3>Answer:</h3><br>
                                  <p> The cyclist and bike’s kinetic energy is 11,250 J.</p>
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
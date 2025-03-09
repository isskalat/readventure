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
    
                    <div class="Lesson 4">
                        <h1>Lesson 5</h1>
                        <h2>POTENTIAL ENERGY</h2>
                         <p> Gravitational Potential Energy (GPE) is a form of potential energy possessed by an object due to its position above the ground. The amount of GPE depends on the object's height from a reference point (e.g., ground or floor) and its weight.</p>
                         <br><h3>Formula for Kinetic Energy:</h3>
                         <br><h3> 𝑊 =𝑚𝑔h
                         <br><h3>PE=mgh
                         <br><h3>   PE=Fh</h3>
                         <br><p> Where: PE = potential energy (J)
                         <br><p>   m = mass (kg)
                         <br><p>   g = gravity (9.8 m/s²)
                         <br><p> h = height (m)
                         <br><p> F = force (N)</p>
                         <br><h3>SAMPLE PROBLEMS & SOLUTIONS</h3>
                         <br><p> 1. Harry weighs 500 N. He climbs a flight of stairs 8.0 m high going to the second floor of their two-story house. What is Harry’s potential energy at the second floor?</p>
                         <br><h3> Given:</h3>
                         <br><p>Force (F) = 500 N
                            <br>Height (h) = 8.0 m
                        </p>
                        <br><h3>Required:</h3>
                        <br><p>Potential Energy (PE)</p>
                        <br><h3>Equation:</h3>
    
                        <br><p>PE=Fh</p>
                        <br><h3>Solution:</h3>
                        <br><p>PE=(500 N)(8.0 m)
                            <br>PE=4000 J
                            </p>
                            <br><h3>Answer:</h3><br>
                            <p> Harry’s potential energy at the second floor is 4,000 J.
                            </p>
                            <br> <p><strong>2. During a flood, a tree trunk with a mass of 100 kg falls down a waterfall that is 5 m high. If air resistance is ignored, find the tree trunk’s potential energy at the top of the waterfall.</p></strong>
                                <p>Given:</p><br>
                                <span>
                                    Mass (m) = 100 kg<br>
                                    Gravity (g) = 9.8 m/s²<br>
                                    Height (h) = 5 m<br>
                                </span>
                                <p>Required:</p>
                                Potential Energy (PE)<br>
                                Equation:
                                PE=mgh
                                <p>Solution:</p><br>
                                PE=(100 kg)(9.8 m/s²)(5 m)
                                PE=4900 J<br>
                             <br><strong><p>Answer:</p></strong><br>
                                <p>The tree trunk’s potential energy at the top of the waterfall is 4,900 J.
                                </p>
                                <br> <p><strong>3. A 50 kg box is lifted to a height of 2.0 m. Calculate the potential energy of the box.</p></strong>
                                <p>Given:</p><br>
                                <span>
                                    Mass (m) = 50 kg<br>
                                    Gravity (g) = 9.8 m/s²<br>
                                    Height (h) = 2.0 m<br>
                                </span>
                                <p>Required:</p><br>
                                Potential Energy (PE)
                                <br>Equation:
                                <br>PE=mgh
                                <p>Solution:</p><br>
                                PE=(50 kg)(9.8 m/s²)(2 m)
                                PE=980 J<br>
                                <br><strong><p>Answer:</p><br></strong>
                                 The box’s potential energy is 980 J.
                            </div>
                            <script> document.getElementById('sidebar-toggle').addEventListener('click', function() {
                                document.getElementById('sidebar').classList.toggle('show');
                                document.body.classList.toggle('sidebar-open');
                            });
                            </script>
    </body>
</html>
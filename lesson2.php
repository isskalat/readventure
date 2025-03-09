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
    <link rel="stylesheet" href="lesson2.css">
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
                    <div class="Lesson 2">
                        <h1>Lesson 2</h1>
                        <h2>Work</h2>
                         <p> Work is defined as the product of the force exerted on an object and the displacement of the object in the direction of the force.</p>
                            <br><h3>Conditions for Work to Be Done:</h3>
                         <br><p> 1. A force must be applied to an object. </p>
                         <br><p> 2. The object must move a certain distance (displacement).</p>
                         <br><p> 3. The movement must be in the direction of the applied force.</p>

                         <br><h3>Formula for Work:</h3>
                         <br><p> Work(W)=Force(F)×Displacement(d) </p>    

                         <br><h3>Units of Measurement:</h3>
                         <br><p> The SI unit of work is the joule (J), where 1 joule equals the work done by a force of one newton moving an object through a distance of one meter.</p>
                         
                         <br><h3>Examples of Work:</h3>
                         <br><p>Pushing a heavy shopping trolley for 10 meters. </p>
                         <br><p>Lifting a school bag upwards by 1 meter.</p>

                         <br><h3>Non-Examples of Work:</h3>
                            <br><p>Pushing against a wall without moving it. </p>
                            <br><p>Holding a chair and walking around the classroom without lifting or lowering it. </p>

                         <br><h3>Horizontal Force Application:</h3>
                         <br><p> A person pulls a block 2 meters along a horizontal surface with a constant force of 20 newtons. The work done by the force is calculated as:</p>
                         <br><p> 𝑊=𝐹×𝑑=20N×2m=40J</p>
                         <br><h3>Force at an Angle:</h3>
                         <br><p> A force of 10 newtons acts on a box over a 1-meter distance at a 30-degree angle to the horizontal. The work done by the force is:</p>
                         <br><p> 𝑊=𝐹×𝑑×cos(𝜃)=10N×1m×cos(30∘)≈8.66J</p>
                         <br><h3>Vertical Motion (Gravity):</h3>
                         <br><p>A 3 kg object falls freely from rest from a height of 2 meters. The work done by the force of gravity is:</p>
                         <br><p> 𝑊=𝑚×𝑔×ℎ=3kg×9.8m/s2×2m=58.8J</p>

                         <br><h3>Concept of Power:</h3>
                            <br><p> Power is defined as the rate of doing work or the amount of work applied to an object per unit of time. It is a scalar quantity measured in watts (W), where:</p>
                            <br><p> 1 watt = 1 joule/second</p>
                            <br><p> The formula for power is:</p>
                            <br><p> Power(P)=Work(W)Time(t)</p>
                            <br><p> Power(P)=Time(t)Work(W)</p>
                            <br><p> Power(P)=Work(W)Time(t)</p>
                            <br><p> Power(P)=Time(t)Work(W)</p>

                         <br><h3>Units of Power::</h3>
                         <br><p>The SI unit of power is the watt (W), equivalent to one joule per second. For larger quantities, power is often measured in kilowatts (kW) or horsepower (hp), where:</p>
                         <br><p> 1 kilowatt = 1,000 watts</p>

                         <br><h3>Example of Power Calculation:</h3>
                            <br><p> If a person performs 100 joules of work in 5 seconds, the power expended is:</p>
                            <br><p> 𝑃=𝑊𝑡=100J5s=20W</p>
                            <br><p> The person’s power output is 20 watts.</p>
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
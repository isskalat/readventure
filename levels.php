<?php
session_start();
require 'conne.php';

if (!isset($_SESSION['username'])) {
    header('Location: index.html');
    exit;
}

$username = $_SESSION['username'];

// Get user progress (current level)
$sql = "SELECT level FROM profile WHERE username = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$currentLevel = 1;
if ($row = mysqli_fetch_assoc($result)) {
    $currentLevel = $row['level'];
}

$totalLevels = 10; // Total number of levels

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readventure</title>
    <link rel="stylesheet" href="levels.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> 
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
        <section class="level">
            <?php
            $stories = [
                1 => ['The Icy Game of Hockey', 'Laws of Motion (Law of Inertia and Acceleration)'],
                2 => ['Rocket Science in a Bottle', 'Laws of Motion (Law of Action and Reaction)'],
                3 => ['The Hidden Force', 'Work'],
                4 => ['Pushing the Limits', 'Work'],
                5 => ['The Power Push: A Tale of Speed and Strength', 'Power'],
                6 => ['Power Kick', 'Power'],
                7 => ['The Skateboard', 'Kinetic Energy'],
                8 => ['Smash, Crash, Kinetic Dash!', 'Kinetic Energy'],
                9 => ['Curiosity', 'Potential Energy'],
                10 => ['Swing High', 'Potential Energy']
            ];

            for ($i = 1; $i <= $totalLevels; $i++):
                $unlocked = $i <= $currentLevel; // Unlocked if level number <= user's current level
                ?>
                <div class="level-box level<?php echo $i; ?>">
                    <h4>Level <?php echo $i; ?></h4>
                    <span>Story: <?php echo $stories[$i][0]; ?></span>
                    <p><?php echo $stories[$i][1]; ?></p>
                    <div class="buttons">
                        <a href="<?php echo $unlocked ? "level$i.php" : '#'; ?>" 
                           class="<?php echo $unlocked ? 'play-button' : 'locked-button'; ?>">
                            <?php echo $unlocked ? 'Play' : 'Locked'; ?>
                        </a>
                    </div>
                </div>
            <?php endfor; ?>
        </section>
    </div>
</main>
<script>
    document.getElementById('sidebar-toggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('show');
        document.body.classList.toggle('sidebar-open');
    });
</script>
</body>
</html>

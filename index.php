<!-- filepath: /C:/xampp/htdocs/readventure/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css"> <!-- Ensure this path is correct -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <form id="login-form" action="login.php" method="POST"> <!-- Ensure the form action is set to login.php -->
            <h1>Log in</h1>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <i class='bx bxs-user-circle'></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn">Log in</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
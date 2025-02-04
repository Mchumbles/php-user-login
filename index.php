<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to authentification project</h1>

    <?php if (isset($_SESSION['user_id'])): ?>
        <p>Welcome, <strong><?= htmlspecialchars($_SESSION['username']) ?></strong>! You are logged in.</p>
        <p><a href="public/logout.php">Logout</a></p>
    <?php else: ?>
        <p>You are not logged in.</p>
        <p><a href="public/login.html">Login</a> | <a href="public/register.html">Register</a></p>
    <?php endif; ?>
</body>
</html>

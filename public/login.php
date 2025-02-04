<?php
session_start();
require_once '../config/db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emailOrUsername = trim($_POST['email']); 
    $password = $_POST['password'];

    if (empty($emailOrUsername) || empty($password)) {
        die('Please fill in both fields.');
    }

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :emailOrUsername OR username = :emailOrUsername");
    $stmt->execute(['emailOrUsername' => $emailOrUsername]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) { 
        if (password_verify($password, $user['password_hash'])) { 
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            echo 'Login successful. Welcome, ' . htmlspecialchars($user['username'] . '!');
            echo '<p><a href="../index.php">Back to Home Page</a></p>';
        } else {
            echo 'Incorrect password.';
        }
    } else {
        echo 'User not found.';
    }
}
?>


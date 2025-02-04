<?php
require_once('../config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit('Invalid email format');
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)";

    try {
        $pdo->beginTransaction();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username, $email, $hashedPassword]);
        $pdo->commit();

        echo "Registration successful!";
        echo '<p><a href="../index.php">Back to Home Page</a></p>';
    } catch (PDOException $error) {
        $pdo->rollBack();
        echo "Error: " . $error->getMessage();
    }
}

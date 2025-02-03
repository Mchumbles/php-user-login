<?php
require_once 'config/db.php'; 

try {
    if ($pdo) {
        echo "Database connection is successful!";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
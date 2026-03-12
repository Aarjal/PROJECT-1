<?php

declare(strict_types=1);

require __DIR__ . '/db.php';

$pdo->exec(
    'CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password_hash VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )'
);

$demoUsername = 'demo';
$demoPasswordHash = password_hash('demo123', PASSWORD_DEFAULT);

$stmt = $pdo->prepare('INSERT INTO users (username, password_hash) VALUES (:username, :password_hash) ON DUPLICATE KEY UPDATE username = username');
$stmt->execute([
    'username' => $demoUsername,
    'password_hash' => $demoPasswordHash,
]);

echo 'Setup complete. Demo user: demo / demo123';

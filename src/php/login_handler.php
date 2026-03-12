<?php

declare(strict_types=1);

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../pages/login.php');
    exit;
}

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if ($username === '' || $password === '') {
    $_SESSION['flash'] = [
        'type' => 'error',
        'message' => 'Please enter both username and password.'
    ];
    header('Location: ../pages/login.php');
    exit;
}

try {
    require __DIR__ . '/db.php';

    $stmt = $pdo->prepare('SELECT id, username, password_hash FROM users WHERE username = :username LIMIT 1');
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['user_id'] = (int) $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['flash'] = [
            'type' => 'success',
            'message' => 'Login successful. Welcome back, ' . $user['username'] . '!'
        ];

        header('Location: ../pages/home.php');
        exit;
    }

    $_SESSION['flash'] = [
        'type' => 'error',
        'message' => 'Invalid username or password.'
    ];
    header('Location: ../pages/login.php');
    exit;
} catch (Throwable $error) {
    $_SESSION['flash'] = [
        'type' => 'error',
        'message' => 'Database connection issue. Check phpMyAdmin and table setup.'
    ];
    header('Location: ../pages/login.php');
    exit;
}

<?php
require __DIR__ . '/../php/session.php';

$flash = pull_flash();
$username = current_username();

$pageTitle = 'StreamFlix | Login';
$extraStyles = ['../styles/login.css'];
require __DIR__ . '/../php/head.php';
?>
<body class="login-page">
    <?php require __DIR__ . '/../php/nav.php'; ?>

    <main class="body">
        <h1>Login</h1>
        <form class="form-container" action="../php/login_handler.php" method="post">
            <?php if ($flash): ?>
                <p class="form-message <?= htmlspecialchars($flash['type']) ?>"><?= htmlspecialchars($flash['message']) ?></p>
            <?php endif; ?>

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>
            <p class="form-note">Demo login: <strong>demo / demo123</strong></p>
            <button type="submit" class="button">Login</button>
        </form>
    </main>
</body>
</html>

<?php
require __DIR__ . '/../php/session.php';

$flash = pull_flash();
$username = current_username();

$pageTitle = 'StreamFlix | Home';
$extraStyles = [];
require __DIR__ . '/../php/head.php';
?>
<body class="home-page" data-page="home">
    <?php require __DIR__ . '/../php/nav.php'; ?>

    <main class="hero">
        <?php if ($flash): ?>
            <p class="flash-message <?= htmlspecialchars($flash['type']) ?>"><?= htmlspecialchars($flash['message']) ?></p>
        <?php endif; ?>

        <h1>Unlimited Movies, TV Shows, and More.</h1>
        <p>
            <?php if ($username): ?>
                Welcome, <?= htmlspecialchars($username) ?>. Search your favorite titles and start streaming instantly.
            <?php else: ?>
                Search your favorite titles and start streaming instantly.
            <?php endif; ?>
        </p>

        <input id="searchbar" type="text" placeholder="Search here..." aria-label="Search titles">
        <p id="search-feedback" class="status-text">Start typing to search titles like Avengers or Inception.</p>
        <a href="movies.php" class="button">Get Started</a>
    </main>

    <script src="../scripts/app.js"></script>
</body>
</html>

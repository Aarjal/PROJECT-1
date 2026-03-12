<header>
    <nav class="main-nav" aria-label="Main navigation">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="plans.php">Plans</a></li>
            <li><a href="movies.php">Movies</a></li>
            <?php if ($username): ?>
                <li><a href="../php/logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
            <li class="last"><a href="#">More ⮟</a>
                <ul class="dropdown">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">FAQs</a></li>
                    <?php if ($username): ?>
                        <li><a href="../php/logout.php">Sign Out</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Sign In</a></li>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<?php
require __DIR__ . '/../php/session.php';
$username = current_username();

$pageTitle = 'StreamFlix | Plans';
$extraStyles = ['../styles/plans.css'];
require __DIR__ . '/../php/head.php';
?>
<body class="plans-page" data-page="plans">
    <?php require __DIR__ . '/../php/nav.php'; ?>

    <section class="plans-section">
        <h1>Choose Your Plan</h1>
        <div class="plans-container">
            <div class="plan-card">
                <h2>Basic</h2>
                <p class="price">₹99/month</p>
                <ul>
                    <li>Access to limited content</li>
                    <li>Standard Quality</li>
                    <li>1 Device at a time</li>
                </ul>
                <a href="#" class="buy-now" data-plan-button data-plan="Basic">Buy Now</a>
            </div>

            <div class="plan-card">
                <h2>Standard</h2>
                <p class="price">₹199/month</p>
                <ul>
                    <li>Access to all content</li>
                    <li>HD Quality</li>
                    <li>2 Devices simultaneously</li>
                </ul>
                <a href="#" class="buy-now" data-plan-button data-plan="Standard">Buy Now</a>
            </div>

            <div class="plan-card">
                <h2>Premium</h2>
                <p class="price">₹299/month</p>
                <ul>
                    <li>All content unlocked</li>
                    <li>4K Ultra HD + HDR</li>
                    <li>4 Devices simultaneously</li>
                </ul>
                <a href="#" class="buy-now" data-plan-button data-plan="Premium">Buy Now</a>
            </div>
        </div>
        <p id="plan-message" class="status-text">Click a plan to test JS + UI response.</p>
    </section>

    <script src="../scripts/app.js"></script>
</body>
</html>

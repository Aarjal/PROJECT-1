<?php
require __DIR__ . '/../php/session.php';
$username = current_username();

$pageTitle = 'StreamFlix | Movies';
$extraStyles = ['../styles/movies.css'];
require __DIR__ . '/../php/head.php';
?>
<body class="movies-page" data-page="movies">
  <?php require __DIR__ . '/../php/nav.php'; ?>

  <section class="movies-section">
    <h1>Top Picks For You</h1>
    <div class="movie-tools">
      <input id="movie-search" type="text" placeholder="Filter movies by title" aria-label="Filter movies">
      <p id="movie-count" class="status-text"></p>
      <p id="movie-action" class="status-text">Click any watch button to test JS response.</p>
    </div>

    <div class="movie-card" data-title="Avengers">
      <img src="../../assets/images/avengers.jpg" alt="Movie 1">
      <h2>AVENGERS</h2>
      <p>A thrilling adventure of mystery and excitement.</p>
      <a href="#" class="watch-button" data-movie="Avengers">Watch Now</a>
    </div>

    <div class="movie-card" data-title="Life of Pi">
      <img src="../../assets/images/lifeofpie.jpg" alt="Movie 2">
      <h2>LIFE OF PI</h2>
      <p>An emotional journey that touches the soul.</p>
      <a href="#" class="watch-button" data-movie="Life of Pi">Watch Now</a>
    </div>

    <div class="movie-card" data-title="Inception">
      <img src="../../assets/images/inception.jpg" alt="Movie 3">
      <h2>INCEPTION</h2>
      <p>An action-packed blockbuster filled with drama.</p>
      <a href="#" class="watch-button" data-movie="Inception">Watch Now</a>
    </div>
  </section>

  <script src="../scripts/app.js"></script>
</body>

</html>

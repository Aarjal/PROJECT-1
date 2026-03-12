document.addEventListener('DOMContentLoaded', () => {
  const page = document.body.dataset.page;

  if (page === 'home') {
    initHomeSearch();
  }

  if (page === 'movies') {
    initMovieFiltering();
    initWatchButtons();
  }

  if (page === 'plans') {
    initPlanButtons();
  }
});

function initHomeSearch() {
  const searchBar = document.getElementById('searchbar');
  const searchFeedback = document.getElementById('search-feedback');

  if (!searchBar || !searchFeedback) {
    return;
  }

  searchBar.addEventListener('input', (event) => {
    const value = event.target.value.trim();

    if (value.length === 0) {
      searchFeedback.textContent = 'Start typing to search titles like Avengers or Inception.';
      return;
    }

    searchFeedback.textContent = `You searched for: ${value}`;
  });
}

function initMovieFiltering() {
  const movieSearch = document.getElementById('movie-search');
  const movieCards = Array.from(document.querySelectorAll('.movie-card'));
  const movieCount = document.getElementById('movie-count');

  if (!movieSearch || movieCards.length === 0 || !movieCount) {
    return;
  }

  const renderCount = () => {
    const visibleCount = movieCards.filter((card) => card.style.display !== 'none').length;
    movieCount.textContent = `${visibleCount} movie(s) shown`;
  };

  movieSearch.addEventListener('input', (event) => {
    const query = event.target.value.trim().toLowerCase();

    movieCards.forEach((card) => {
      const title = (card.dataset.title || '').toLowerCase();
      const isMatch = title.includes(query);
      card.style.display = isMatch ? 'inline-block' : 'none';
    });

    renderCount();
  });

  renderCount();
}

function initWatchButtons() {
  const watchButtons = document.querySelectorAll('.watch-button');
  const movieAction = document.getElementById('movie-action');

  if (watchButtons.length === 0 || !movieAction) {
    return;
  }

  watchButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
      event.preventDefault();
      const title = button.dataset.movie || 'this movie';
      movieAction.textContent = `${title} clicked. Backend streaming route can be connected next.`;
    });
  });
}

function initPlanButtons() {
  const planButtons = document.querySelectorAll('[data-plan-button]');
  const planMessage = document.getElementById('plan-message');

  if (planButtons.length === 0 || !planMessage) {
    return;
  }

  planButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
      event.preventDefault();
      const selectedPlan = button.dataset.plan || 'this';
      planMessage.textContent = `${selectedPlan} plan selected. Connect checkout in PHP next.`;
    });
  });
}

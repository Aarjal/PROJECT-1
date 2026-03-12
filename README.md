# StreamFlix

A simple movie-style website built with **PHP**, **MySQL**, **HTML/CSS**, and **JavaScript**.

## Features

- Multi-page PHP website (Home, Movies, Plans, Login)
- Session-based login/logout flow
- Demo user for quick testing
- Reusable shared components (`head.php`, `nav.php`, `session.php`)
- Basic frontend interactions via JavaScript

## Tech Stack

- PHP 8+
- MySQL / MariaDB
- HTML5 + CSS3
- Vanilla JavaScript

## Project Structure

```
index.php                 # Entry point (redirects to home page)
src/
	pages/                  # UI pages
		home.php
		login.php
		movies.php
		plans.php
	php/                    # Backend logic and shared includes
		db.php
		head.php
		init_db.sql
		login_handler.php
		logout.php
		nav.php
		session.php
		setup.php
	scripts/                # Frontend JS
		app.js
	styles/                 # Shared and page styles
assets/images/            # Static image assets
```

## Quick Start (Local Setup)

### 1) Clone and open the project

```bash
git clone https://github.com/Aarjal/PROJECT-1.git
cd PROJECT-1
```

### 2) Configure database credentials

Edit `src/php/db.php`:

- `$host`
- `$dbName`
- `$dbUser`
- `$dbPass`

Default currently targets:

- Host: `127.0.0.1`
- Database: `streamflix`
- User: `root`
- Password: *(empty)*

### 3) Create database and tables

Use **one** of these:

- Import `src/php/init_db.sql` in phpMyAdmin, or
- Run `src/php/setup.php` once in browser to auto-create table and demo user.

### 4) Run the app

Serve the project with a PHP server (Apache/XAMPP or built-in PHP server), then open:

- `index.php` (recommended)

## Demo Login

- Username: `demo`
- Password: `demo123`

## Important Notes

- `index.php` redirects to `src/pages/home.php`.
- `login_handler.php` expects POST requests from the login form.
- If login fails with DB errors, re-check credentials in `src/php/db.php` and ensure the `users` table exists.

## Future Improvements

- Add registration page
- Add form validation and CSRF protection
- Move DB secrets to environment variables
- Add responsive enhancements and accessibility improvements

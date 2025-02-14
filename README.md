# PHP Authentication System

A simple user authentication system using PHP and PostgreSQL, featuring registration, login, and logout with secure password hashing.

## Features

- User Registration (username, email, password)
- Login via email or username
- Secure password hashing
- Session-based authentication
- Logout functionality

## Requirements

- PHP 7.4+
- Composer
- PostgreSQL
- PHP Built-In Web Server (or Apache/Nginx)

## Setup

### 1. Clone the repository

```sh
git clone https://github.com/Mchumbles/php-user-login.git
cd php-user-login
```

### 2. Install dependencies

```sh
composer install
```

### 3. Configure environment

Create a .env file in the root directory with your database credentials:

```ini
DB_HOST=your_host
DB_PORT=your_port
DB_NAME=your_db
DB_USER=your_user
DB_PASSWORD=your_password
```

### 4. Set up the database

```sh
psql -U your_db_user -d your_db_name -f database/create_tables.sql
```

### 5. Start the server

```sh
php -S localhost:8000
```

Access the app at http://localhost:8000.

## Usage

- Register: http://localhost:8000/public/register.html
- Login: http://localhost:8000/public/login.html
- Home (after login): http://localhost:8000/index.php
- Logout: http://localhost:8000/public/logout.php

## Future Plans

This project is a personal exploration of PHP and Laravel. While it currently uses vanilla PHP, the goal is to transition to Laravel for a more streamlined and scalable development process. Future updates will focus on improving authentication, enhancing security, and increasing maintainability. As the project evolves, new features and optimizations will be explored to fully leverage Laravel’s capabilities.

## License

MIT License – Open source and free to use.

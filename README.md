# Laravel API Master Class

This repository contains the code from following along with the Laravel API Master Class course on Laracasts (https://laracasts.com/series/laravel-api-master-class).

## About The Project

This project demonstrates building a robust REST API using Laravel, following best practices and modern development patterns. Through this course, we cover:

- API Resource Development
- Authentication & Authorization
- API Versioning
- Rate Limiting
- Data Transformation
- Testing API Endpoints

## Requirements

- PHP >= 8.3
- Composer
- Laravel 12.x
- Database (MySQL)

## Installation

1. Clone the repository
```bash
git clone https://github.com/jhin1m/laravel-api-master-class.git
```

2. Install dependencies
```bash
composer install
```

3. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Set up database and run migrations
```bash
php artisan migrate
```

## Usage

Start the development server:
```bash
php artisan serve
```

## Learning Notes

# Course Progress & Key Learnings

This section will be updated as I progress through the course with key learnings and important concepts.

---

## Day 1 - Sep 23, 2025
- Initialize project and create `README.md`.
- Set up **User** model, factory, and migration.
- Update `DatabaseSeeder`.
- *That's easy enough. Let's move on.*

---

## Day 2 - Sep 24, 2025
- Implement core logic with validation.
- Update **API routes**.
- Add authentication with **Laravel Sanctum**.
- Create `AuthController` with `register` and `login` methods.
- Implement registration and login logic.
- Apply authentication middleware to routes.
- *That's a good start. Let's keep going.*

---

## Day 3 - Sep 25, 2025
- Add **Ticket** model, factory, and migration.
- Update `DatabaseSeeder` and API routes.
- Create `TicketController` with `index` and `store` methods.
- Implement ticket listing and creation logic.
- Protect ticket routes with authentication middleware.
- Test ticket endpoints using **Postman**.
- Document progress in `README.md`.
- *That's a solid foundation. Let's continue building.*

---

## Day 4 - Sep 28, 2025
- Implement **API versioning** for tickets.
- Create separate controllers for each API version.
- Update routes to use versioned controllers.
- Test versioned API endpoints with **Postman**.
- Document API versioning strategy in `README.md`.

- Authentication functionality with login and register endpoints, and update API routes.
- *That's a significant enhancement. Let's keep improving.*
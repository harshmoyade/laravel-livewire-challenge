# Laravel Livewire Task Manager

A simple and clean task management application built using Laravel 11, Livewire 3, Volt and MySQL.

This project was created as part of a PHP / Laravel Developer build challenge.

---

## Tech Stack

- PHP 8.3+
- Laravel 11
- Livewire 3
- Laravel Volt (Single File Component)
- MySQL
- Pest Testing

---

## Features

- View all tasks
- Create a new task using title input
- Validate task title before saving
- Reject empty task titles
- Toggle task status:
  - Complete
  - Incomplete

---

## Installation

Clone Repository:

```bash
git clone https://github.com/harshmoyade/laravel-livewire-challenge.git
```

Go to project directory:

```bash
cd laravel-livewire-challenge
```

Install dependencies:

```bash
composer install
npm install
```

Create environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

---

## Database Configuration

Update `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_livewire_challenge
DB_USERNAME=root
DB_PASSWORD=
```

Run migration:

```bash
php artisan migrate
```

---

## Run Application

Laravel server:

```bash
php artisan serve
```

Vite:

```bash
npm run dev
```

Open:

```
http://127.0.0.1:8000/tasks
```

---

## Testing

Run:

```bash
php artisan test
```

---

## Project Structure

Task Model:

```
app/Models/Task.php
```

Migration:

```
database/migrations/create_tasks_table.php
```

Volt Component:

```
resources/views/livewire/tasks.blade.php
```

Route:

```
/tasks
```

---

## AI Assistance

AI tools were used during development for:

- Environment setup
- Debugging
- Implementation guidance
- Code review assistance

Full AI conversation:

```
AI-CONVERSATION.md
```

---

## Author

Harsh Moyade

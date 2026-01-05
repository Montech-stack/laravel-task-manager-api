
# Laravel Task Manager API

## Overview
The **Laravel Task Manager API** is a RESTful API prototype built with **Laravel 10** to manage tasks.  
It demonstrates **clean backend architecture**, including **MVC patterns**, routing, controllers, models, database migrations, validation, and Docker integration.  

This project is designed as a **portfolio-ready educational prototype**, showing practical backend development skills.

---

## Project Architecture

laravel-task-manager-api/
## 📂 Project Structure

```bash
laravel-task-manager-api/
├── app/
│   ├── Http/
│   │   ├── Controllers/        # API endpoint logic
│   │   │   └── TaskController.php
│   │   └── Requests/           # Input validation classes
│   │       └── StoreTaskRequest.php
│   ├── Models/                 # Eloquent models
│   │   └── Task.php
│   └── Providers/              # Service providers
├── database/
│   ├── migrations/             # Database table schemas
│   │   └── 2024_01_01_create_tasks_table.php
│   └── seeders/                # Optional sample data
├── routes/
│   ├── api.php                 # REST API routes
│   └── web.php                 # Web routes (optional)
├── tests/
│   └── Feature/                # Feature tests (PHPUnit)
├── Dockerfile                  # Docker container definition
├── docker-compose.yml          # Docker Compose configuration
├── .env.example                # Environment variable template
├── composer.json               # PHP dependencies
└── README.md                   # Project documentation


---

## Features
- **Task Management**
  - List tasks (`GET /api/tasks`)
  - Create tasks (`POST /api/tasks`)
- **Clean MVC structure**
- **Request validation** using FormRequest
- **Dockerized environment** for consistent setup
- **Feature tests** for API endpoints

---

## Tech Stack
- PHP 8.2
- Laravel 10
- MySQL (conceptual)
- Docker & Docker Compose
- PHPUnit (testing)
- Composer (dependency management)

---

## Setup Instructions

1. **Clone the repository**

```
git clone https://github.com/Montech-stack/laravel-task-manager-api.git
cd laravel-task-manager-api

2. **Install dependencies**

composer install

3. **Setup environment**

cp .env.example .env
# update DB settings

4. **Run database migrations**

php artisan migrate

5. **Start the server**

php artisan serve
# or using Docker:
docker-compose up --build

6. **Test API endpoints**

#Get all tasks:

GET http://127.0.0.1:8000/api/tasks

# Create a new task:

POST http://127.0.0.1:8000/api/tasks
Content-Type: application/json
Body: { "title": "Demo Task", "description": "Example task" }



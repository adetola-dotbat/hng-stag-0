## HNG12 Stage 0 Public API

### Description

This is a simple public API built for the HNG12 Stage 0 task. It returns basic information such as the registered email, current date and time (ISO 8601 format), and the GitHub URL of the project.

Setup Instructions

Prerequisites

PHP (>=8.1)

Composer

Laravel 10+

Installation Steps

# Clone the repository

git clone https://github.com/yourusername/your-repo.git

# Navigate into the project directory

cd your-repo

# Install dependencies

composer install

# Start the Laravel development server

php artisan serve

# Clone the repository

git clone https://github.com/yourusername/your-repo.git

# Navigate into the project directory

cd your-repo

# Install dependencies

composer install

# Start the Laravel development server

php artisan serve

The API will be available at:

http://127.0.0.1:8000/api/info

API Documentation

Endpoint

GET /api/info

Response Format (200 OK)

{
"email": "your-email@example.com",
"current_datetime": "2025-01-30T09:30:00Z",
"github_url": "https://github.com/yourusername/your-repo"
}

Example Usage

Using cURL:

curl -X GET http://127.0.0.1:8000/api/info

Using Postman or a browser:

Open http://127.0.0.1:8000/api/info in your browser.

Hire PHP Developers

Looking for skilled PHP developers? Check out:

# DONORHUB PROJECT 2025

A comprehensive blood donor management system that helps connect donors with those in need.

## Project Structure

- `frontend/` - Client-side application (HTML, CSS, JavaScript)
- `backend/` - PHP API endpoints and server logic
- `database/` - MySQL database schemas and migrations
- `config/` - Configuration files for development and production
- `docs/` - Project documentation and API specifications

## Setup Instructions

1. Configure your web server (Apache/Nginx) or use PHP's built-in server
2. Import the database schema from `database/schema.sql`
3. Update database configuration in `config/database.php`
4. Start the development server

## Development

To start the development server:

```bash
cd backend
php -S localhost:8000 router.php
```

## Features

- Donor registration and management
- Blood donation tracking
- Search and filter donors
- Authentication system
- Administrative dashboard
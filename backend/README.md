# Backend API Documentation

## Database Setup
1. Import the database schema from `database/donour_db.sql`
2. Configure database connection in `config/database.php`

## API Endpoints

### User Management
- POST /api/register.php - Register new user
- POST /api/login.php - User login
- GET /api/user.php - Get user profile
- PUT /api/user.php - Update user profile

### Donor Management
- GET /api/donors.php - List all donors
- POST /api/donors.php - Register as donor
- PUT /api/donors/{id}/availability - Update donor availability

### Blood Requests
- GET /api/requests.php - List blood requests
- POST /api/requests.php - Create new request
- PUT /api/requests/{id}/status - Update request status

## Models
- User.php - User authentication and profile management
- Donor.php - Donor registration and management
- Request.php - Blood request handling
- Hospital.php - Hospital information management

## Database Structure
The database includes tables for:
- users
- donors
- hospitals
- requests
- inventory
- memberships
- payments
- audit_logs
- sessions
- user_files

## Security
- Password hashing using PHP's password_hash()
- Prepared statements for SQL queries
- Input validation and sanitization
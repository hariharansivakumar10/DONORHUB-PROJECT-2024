<?php
// Initialize database connection
require_once __DIR__ . '/../config/database.php';

class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Get user by ID
    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    // Get user by email
    public function getByEmail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result();
    }

    // Create new user
    public function create($username, $password_hash, $name, $email, $phone, $blood_group, $city) {
        $stmt = $this->conn->prepare("INSERT INTO users (username, password_hash, name, email, phone, blood_group, city) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $username, $password_hash, $name, $email, $phone, $blood_group, $city);
        return $stmt->execute();
    }
}
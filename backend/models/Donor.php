<?php
// Initialize database connection
require_once __DIR__ . '/../config/database.php';

class Donor {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Get all donors
    public function getAll() {
        $query = "SELECT * FROM donors";
        $result = $this->conn->query($query);
        return $result;
    }

    // Get donor by blood group
    public function getByBloodGroup($blood_group) {
        $stmt = $this->conn->prepare("SELECT * FROM donors WHERE blood_group = ? AND available = 1");
        $stmt->bind_param("s", $blood_group);
        $stmt->execute();
        return $stmt->get_result();
    }

    // Create new donor
    public function create($user_id, $name, $blood_group, $city, $phone, $email) {
        $stmt = $this->conn->prepare("INSERT INTO donors (user_id, name, blood_group, city, phone, email) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssss", $user_id, $name, $blood_group, $city, $phone, $email);
        return $stmt->execute();
    }

    // Update donor availability
    public function updateAvailability($id, $available) {
        $stmt = $this->conn->prepare("UPDATE donors SET available = ? WHERE id = ?");
        $stmt->bind_param("ii", $available, $id);
        return $stmt->execute();
    }
}
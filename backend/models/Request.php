<?php
// Initialize database connection
require_once __DIR__ . '/../config/database.php';

class Request {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create new blood request
    public function create($requester_user_id, $hospital_id, $blood_group, $units, $notes) {
        $stmt = $this->conn->prepare("INSERT INTO requests (requester_user_id, hospital_id, blood_group, units, notes) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisis", $requester_user_id, $hospital_id, $blood_group, $units, $notes);
        return $stmt->execute();
    }

    // Get all open requests
    public function getOpenRequests() {
        $query = "SELECT r.*, h.name as hospital_name, u.name as requester_name 
                 FROM requests r 
                 LEFT JOIN hospitals h ON r.hospital_id = h.id 
                 LEFT JOIN users u ON r.requester_user_id = u.id 
                 WHERE r.status = 'open'";
        return $this->conn->query($query);
    }

    // Update request status
    public function updateStatus($id, $status) {
        $stmt = $this->conn->prepare("UPDATE requests SET status = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?");
        $stmt->bind_param("si", $status, $id);
        return $stmt->execute();
    }
}
<?php
require_once __DIR__ . '/../common.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (!isset($data['username']) || !isset($data['password'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Username and password required']);
        exit();
    }
    
    $db = getDB();
    $stmt = $db->prepare('SELECT id, password_hash FROM users WHERE username = ?');
    $stmt->execute([$data['username']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$user || !password_verify($data['password'], $user['password_hash'])) {
        http_response_code(401);
        echo json_encode(['error' => 'Invalid credentials']);
        exit();
    }
    
    // Generate JWT token here
    $token = 'generated-jwt-token';
    
    echo json_encode([
        'token' => $token,
        'user_id' => $user['id']
    ]);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
<?php
header('Content-Type: application/json');

require_once '../config/database.php';
require_once '../models/User.php';

$user = new User($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get posted data
    $data = json_decode(file_get_contents("php://input"));
    
    if (!empty($data->username) && !empty($data->password) && !empty($data->email)) {
        // Hash password
        $password_hash = password_hash($data->password, PASSWORD_DEFAULT);
        
        if ($user->create(
            $data->username,
            $password_hash,
            $data->name,
            $data->email,
            $data->phone ?? null,
            $data->blood_group ?? null,
            $data->city ?? null
        )) {
            http_response_code(201);
            echo json_encode(array("message" => "User created successfully."));
        } else {
            http_response_code(503);
            echo json_encode(array("message" => "Unable to create user."));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Unable to create user. Data is incomplete."));
    }
}
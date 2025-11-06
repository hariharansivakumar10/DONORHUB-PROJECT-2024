<?php
// Development server router

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/api/donors' => '/backend/api/donors.php',
    '/api/auth/login' => '/backend/api/auth/login.php',
    '/api/auth/register' => '/backend/api/auth/register.php',
    '/api/donations' => '/backend/api/donations.php',
    '/api/requests' => '/backend/api/requests.php'
];

// Static file handling
if (file_exists(__DIR__ . '/frontend' . $uri)) {
    return false;
}

// API routing
if (isset($routes[$uri])) {
    require __DIR__ . $routes[$uri];
    exit;
}

// Default to frontend
require __DIR__ . '/frontend/index.html';
<?php
return [
    'db' => [
        'host' => 'localhost',
        'dbname' => 'donorhub',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8mb4'
    ],
    'jwt' => [
        'secret' => 'your-secret-key-here',
        'expiry' => 3600 // 1 hour
    ]
];
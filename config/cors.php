<?php

return [
    'paths' => ['*'], 
    'allowed_methods' => ['*'],  // '*' signifie que toutes les méthodes sont autorisées (GET, POST, PUT, DELETE, etc.)
    'allowed_origins' => ['*'],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
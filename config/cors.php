<?php

return [
    'paths' => ['api/*'], // Chemins auxquels cette configuration CORS s'applique
    'allowed_methods' => ['*'],  // '*' signifie que toutes les méthodes sont autorisées (GET, POST, PUT, DELETE, etc.)
    'allowed_origins' => [    // Origines (domaines) autorisées à effectuer des demandes CORS
        'http://localhost:3000', // L'URL de l'application React
    ],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
<?php

// CORS (Cross-Origin Resource Sharing) est une mesure de sécurité pour contrôler les requêtes web entre domaines.

return [
    'paths' => ['*'], // Toutes les ROUTES autorisées pour les requêtes CORS.
    'allowed_methods' => ['*'], // Toutes les METHODES HTTP autorisées (GET, POST, PUT, DELETE).
    'allowed_origins' => ['*'], // Toutes les ORIGINES autorisées à accéder aux ressources cross-origin.
    'allowed_headers' => ['*'], // Tous les EN-TÊTES HTTP autorisés pour les requêtes cross-origin.
    'exposed_headers' => [], // Aucun EN-TÊTE HTTP exposé pour les réponses cross-origin.
    'max_age' => 0, // Mise en cache CORS désactivée.
    'supports_credentials' => false, // Informations d'identification non prises en charge pour les requêtes cross-origin.
];
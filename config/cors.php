<?php

// Cette configuration CORS autorisant toutes les origines, toutes les méthodes

return [
    'paths' => ['*'], // '*' signifie que toutes les ROUTES sont AUTORISEES pour les requêtes CORS (cross-origin).
    'allowed_methods' => ['*'], // '*' signifie que toutes les METHODES HTTP sont AUTORISEES (GET, POST, PUT, DELETE)
    'allowed_origins' => ['*'], // '*' signifie que toutes les ORIGINES (ou DOMAINES) sont AUTORISEES à accéder aux ressources cross-origin.
    'allowed_headers' => ['*'], // '*' signifie que tous les EN-TETES HTTP sont AUTORISEES pour les requêtes cross-origin.
    'exposed_headers' => [], // Aucun EN-TETE HTTP spécifique n'est exposé (rendu visible) pour les réponses cross-origin.
    'max_age' => 0, // Le temps maximum de mise en cache pour les informations de pré-vérification CORS est défini à 0,
    'supports_credentials' => false, // Les informations d'identification ne sont pas prises en charge pour les requêtes cross-origin
];
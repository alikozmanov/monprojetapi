<?php

use Illuminate\Support\Facades\Route; //Importe la classe Route de Laravel, qui est utilisée pour définir des routes dans l'application

// Définit une route GET pour l'URI '/' (la page d'accueil)
Route::get('/', function () {
    return view('welcome'); // Renvoie la vue 'welcome' lorsque cette route est accédée
});

// Définit un ensemble de routes CRUD pour le contrôleur 'EstimateController'
Route::apiResource('estimates', 'EstimateController');

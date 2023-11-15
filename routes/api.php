<?php

use Illuminate\Http\Request; // Importe la classe Request de Laravel
use Illuminate\Support\Facades\Route; // Importe la classe Route de Laravel
use App\Http\Controllers\EstimateController; // Importe le contrôleur EstimateController

// définit les routes de l'API de l'application Laravel, permettant d'effectuer des opérations CRUD
// postman routes ok CRUD (Create, Read, Update, Delete) 

// Exemple de route pour la liste des devis (index)
Route::get('/estimates', [EstimateController::class, 'index']);

// Exemple de route pour afficher un devis spécifique (show)
Route::get('/estimates/{id}', [EstimateController::class, 'show']);

// Exemple de route pour créer un nouveau devis (store)
Route::post('/estimates', [EstimateController::class, 'store']);

// Exemple de route pour mettre à jour un devis existant (update)
Route::put('/estimates/{id}', [EstimateController::class, 'update']);

// Exemple de route pour supprimer un devis (destroy)
Route::delete('/estimates/{id}', [EstimateController::class, 'destroy']);

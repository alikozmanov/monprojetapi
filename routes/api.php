<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstimateController; 



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

<?php

use Illuminate\Support\Facades\Route; // Importe la classe Route du framework Laravel
use App\Http\Controllers\EstimateController; // Importez le contrôleur EstimateController


// Ce code utilise Laravel, un framework PHP, pour créer une route et affiche l'application React


// Définit une route pour la méthode GET à la racine de l'application
Route::get('/', function () { 
    return view('app');  // Retourne la vue 'app' (projet.blade.php) qui affichera l'application React
});
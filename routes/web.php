<?php


use Illuminate\Support\Facades\Route; // Importe la classe Route du framework Laravel
use App\Http\Controllers\EstimateController; // Importez le contrôleur EstimateController



// Définit une route pour la méthode GET à la racine de l'application
Route::get('/', function () { 
    return view('app');  // Retourne la vue 'app' (projet.blade.php) 
});








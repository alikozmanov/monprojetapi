<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstimateController; // Importez le contrôleur EstimateController

Route::get('/', function () { 
    return view('app'); // Nom de la vue Laravel(projet.blade.php) qui renverra l'application React
});
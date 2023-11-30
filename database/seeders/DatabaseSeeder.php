<?php


namespace Database\Seeders; // Déclaration de l'espace de noms pour le fichier

use Illuminate\Database\Seeder; // Utilisation de la classe Seeder fournie par Laravel

class DatabaseSeeder extends Seeder // Déclaration de la classe DatabaseSeeder qui étend Seeder
{
    
    public function run()  // Méthode run() appelée lors de l'exécution du seeder
    {
        // On appelle le seeder EstimatesTableSeeder pour peupler la table "estimates"
        $this->call(EstimatesTableSeeder::class);
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estimate;

class EstimatesTableSeeder extends Seeder
{
    public function run() // La méthode 'run' pour insérer des données de test dans la table "estimates".
    {
        for ($i = 0; $i < 4; $i++) { 
            Estimate::create([
                'first_name' => 'Nom' . $i, // Ajoute le prénom avec un numéro incrémenté (ex : "Nom0", "Nom1", ...)
                'last_name' => 'Prénom' . $i, // Ajoute le nom de famille avec un numéro incrémenté (ex : "Prénom0", "Prénom1", ...)
                'company_name' => 'Entreprise' . $i, // Ajoute le nom de l'entreprise avec un numéro incrémenté (ex : "Entreprise0", "Entreprise1", ...)
                'email' => 'email' . $i . '@example.com', // Génère une adresse e-mail avec un numéro incrémenté (ex : "email0@example.com", "email1@example.com", ...)
                'phone_number' => '123456789' . $i, // Génère un numéro de téléphone avec un numéro incrémenté (ex : "1234567890", "1234567891", ...)
                'website_url' => 'http://example' . $i . '.com', // Génère une URL de site web avec un numéro incrémenté (ex : "http://example0.com", "http://example1.com", ...)
                'project_description' => 'Description du projet ' . $i, // Ajoute une description de projet avec un numéro incrémenté (ex : "Description du projet 0", "Description du projet 1", ...)
                'project_type' => 'Type du projet ' . $i, // Ajoutez le champ 'project_type' avec une valeur fictive
                'services_requests' => 'Demande de services ' . $i, // Ajoutez le champ 'services_requests' avec une valeur fictive
                'other_text' => 'autre texte' .$i, // Ajoutez le champ 'other_text' avec une valeur fictive
            ]);
        }   
    }
}






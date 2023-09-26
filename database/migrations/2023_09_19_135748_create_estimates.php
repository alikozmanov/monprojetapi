<?php

use Illuminate\Database\Migrations\Migration; // Directive pour créer une migration
use Illuminate\Database\Schema\Blueprint; // Directive pour gérer la structure de la table
use Illuminate\Support\Facades\Schema; // Directive pour interagir avec le système de gestion de la base de données

return new class extends Migration
{
   
    public function up(): void /* La méthode UP est utilisée pour ajouter de nouvelles tables, colonnes ou index à votre base de données */
    {
        Schema::dropIfExists('estimates'); // Supprime la table 'estimates' si elle existe déjà
        Schema::create('estimates', function (Blueprint $table) { // Crée la table 'estimates'
           
            $table->id(); // Colonne 'id' auto-incrémentée (clé primaire)
            $table->string('first_name'); // Colonne 'first_name' de type chaîne de caractères
            $table->string('last_name'); // Colonne 'last_name' de type chaîne de caractères
            $table->string('company_name'); // Colonne 'company_name' de type chaîne de caractères
            $table->string('email'); // Colonne 'email' de type chaîne de caractères
            $table->string('phone_number'); // Colonne 'phone_number' de type chaîne de caractères
            $table->string('website_url')->nullable();// Colonne 'website_url' de type chaîne de caractères pouvant être nulle
            $table->text('project_description'); // Colonne 'project_description' de type texte (pour de plus longues descriptions)
            $table->timestamps(); // Colonnes 'created_at' et 'updated_at' pour la gestion automatique des horodatages(timestamps)
        });
    }

    public function down(): void /* La méthode DOWN doit inverser les opérations effectuées par la méthode UP. */
    {
        
        Schema::dropIfExists('estimates'); // Supprime la table 'estimates' si elle existe
    }
};

<?php

use Illuminate\Database\Migrations\Migration; // Importe la classe Migration pour créer une migration
use Illuminate\Database\Schema\Blueprint; // Importe la classe Blueprint pour gérer la structure de la table
use Illuminate\Support\Facades\Schema; // Importe la classe Schema pour interagir avec le système de gestion de la base de données

return new class extends Migration //Crée une new classe (sans nom) qui étend la classe Migration. Cette classe contient deux méthodes : up et down.
{
   
    public function up(): void /* La méthode up est utilisée pour définir les modifications à apporter à la base de données */
    {
        Schema::dropIfExists('estimates'); // Supprime la table 'estimates' si elle existe déjà
        Schema::create('estimates', function (Blueprint $table) { // Crée une nouvelle table 'estimates'/ Blueprint déclare la structure 
           
            $table->id(); // Colonne 'id' auto-incrémentée (clé primaire)
            $table->string('first_name')->default(''); // Valeur par défaut vide
            $table->string('last_name')->default(''); // Colonne 'last_name' de type chaîne de caractères avec une valeur par défaut vide
            $table->string('company_name'); // Colonne 'company_name' de type chaîne de caractères
            $table->string('email'); // Colonne 'email' de type chaîne de caractères
            $table->string('phone_number'); // Colonne 'phone_number' de type chaîne de caractères
            $table->string('website_url')->nullable();// Colonne 'website_url' de type chaîne de caractères pouvant être nulle
            $table->text('project_description'); // Colonne 'project_description' de type texte (pour de plus longues descriptions)
            $table->string('project_type'); // Colonne 'project_type' de type chaîne de caractères
            $table->text('services_requests'); // Colonne 'services_requests' de type texte
            $table->string('other_text')->nullable(true);
            $table->timestamps(); // Colonnes 'created_at' et 'updated_at' pour la gestion automatique des horodatages(timestamps)
        });
    }

    public function down(): void /* La méthode DOWN doit inverser les opérations effectuées par la méthode UP. */
    {
        
        Schema::dropIfExists('estimates'); // Supprime la table 'estimates' si elle existe
    }
};

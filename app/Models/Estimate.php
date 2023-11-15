<?php

namespace App\Models;   // Nous définissons le namespace où il se trouve dans la structure de dossiers de l'application.

use Illuminate\Database\Eloquent\Model; // Importer la classe de base Eloquent de Laravel, dont notre modèle héritera.


// Ce code spécifie les champs qui peuvent être remplis en toute sécurité et de manière massive 


class Estimate extends Model // Déclarer le modèle "Estimate" en l'étendant à partir de la classe Eloquent de base.
{
//La propriété 'fillable' spécifier les champs qui peuvent être remplis en toutes SECURITE et de manière MASSIVE.
    protected $fillable = [
        'first_name',           
        'last_name',            
        'company_name',         
        'email',               
        'phone_number',         
        'website_url',          
        'project_description',
        'project_type',
        'services_requests', 
        'other_text',
    ];
    
} 
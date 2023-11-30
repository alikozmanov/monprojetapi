<?php

namespace App\Models;  // Le namespace indique l'emplacement de la classe Estimate dans la structure de l'application

use Illuminate\Database\Eloquent\Model; // Importe la classe de base Eloquent pour la création de modèles.




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
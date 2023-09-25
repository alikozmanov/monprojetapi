<?php

namespace App\Models;   // Nous définissons le namespace où il se trouve dans la structure de dossiers de l'application.

use Illuminate\Database\Eloquent\Model; // Nous importons la classe de base Eloquent de Laravel, dont notre modèle héritera.


class Estimate extends Model // Nous déclarons notre modèle "Estimate" en l'étendant à partir de la classe Eloquent de base.
{
//La propriété 'fillable' nous spécifions les champs qui peuvent être remplis de manière massive et en toute sécurité.
    protected $fillable = [
        'first_name',           
        'last_name',            
        'company_name',         
        'email',               
        'phone_number',         
        'website_url',          
        'project_description',  
    ];
    
} 